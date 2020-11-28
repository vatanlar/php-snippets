  <?php 
  
  $browser_language = (string) (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) === true && $_SERVER['HTTP_ACCEPT_LANGUAGE'] !== '') ? strtok(strip_tags($_SERVER['HTTP_ACCEPT_LANGUAGE']), ',') : '';
  $browser_language = (isset($_GET['language']) === true && $_GET['language'] !== '') ? $_GET['language'] : $browser_language;
  $language = (string) '';
  switch (substr($browser_language, 0, 2)) {
    case 'de':
      $language = 'de';
      break;
    case 'en':
      $language = 'en';
      break;
    default:
      $language = 'tr';
  }


  echo $language;
