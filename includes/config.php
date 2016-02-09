    <?php
// Definieer de status van het project
define('PROJECT_STATUS','development');

// Stel de instellingen in op Nederlands
setlocale(LC_ALL, 'nl_NL');

// De keys
define('API_KEY',      '77zyca2yjdst0v'                                          );
define('API_SECRET',   'WHfNYw9HzPcXWfjO'                                       );

// You must pre-register your redirect_uri at https://www.linkedin.com/secure/developer
define('REDIRECT_URI', 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['SCRIPT_NAME']);
define('SCOPE',        'r_basicprofile r_emailaddress'                              );

