using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Text.RegularExpressions;
using System.Threading.Tasks;

class Program
{

  static void Main(string[] args)
  {
    Dictionary<string, string> db_connection_settings = new Dictionary<string, string>();

    if (args.Length < 5)
    {
      Console.WriteLine("usage  : wpcfg <path to wp-config.php> <DB_HOST> <DB_NAME> <DB_USER> <DB_PASSWORD>");
      Console.WriteLine("example: wpcfg .\\source\\wp-config.php us-cdbr-azure-east-c.cloudapp.net wordpressdb wpadmin Passw0rd!");
      Environment.Exit(1);
    }

    string path_wp_config = args[0];

    db_connection_settings.Add("DB_HOST", args[1]);
    db_connection_settings.Add("DB_NAME", args[2]);
    db_connection_settings.Add("DB_USER", args[3]);
    db_connection_settings.Add("DB_PASSWORD", args[4]);

    // Try to open wp_config.php
    string config_file_contents = null;
    try
    {
      if (!Path.IsPathRooted(path_wp_config))
        path_wp_config = Path.Combine(Environment.CurrentDirectory, path_wp_config);
      config_file_contents = File.ReadAllText(path_wp_config);
    }
    catch (Exception ex)
    {
      Console.WriteLine(ex.Message);
      if (ex.InnerException != null)
        Console.WriteLine(ex.InnerException.Message);
      Environment.Exit(2);
    }

    // Change the configuration settings
    string regex_pattern = @"define\('{0}', '(?<val>.+)'\)";
    foreach (string key in db_connection_settings.Keys)
    {
      string this_key_pattern = string.Format(regex_pattern, key);
      Regex regex = new Regex(this_key_pattern);
      Match match = regex.Match(config_file_contents);

      if (!match.Success)
      {
        Console.WriteLine("Could not find setting: " + key);
        Console.WriteLine("No changes made." + key);
        Environment.Exit(1);
      }
      string extracted_value = match.Groups["val"].Value;
      string new_value = db_connection_settings[key];
      string config_with_new_value = match.ToString().Replace(extracted_value, new_value);
      config_file_contents = config_file_contents.Replace(match.ToString(), config_with_new_value);
    }

    File.WriteAllText(path_wp_config, config_file_contents);
  }
}
