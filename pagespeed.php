<?php 
function hostname($url){
    $parse = parse_url($url);
    $host = $parse['host'];
    $host = str_replace("http://","",$host);
    $host = str_replace("https://","",$host);
    $host = str_replace("tr.","",$host);
    $host = str_replace("www.","",$host);
    return $host;
}

function pagespeed($url){
    $source = @file_get_contents("https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=http://$url&screenshot=false&locale=tr-TR&category=pwa&key=AIzaSyACLwihrhuE3dFwATD414iAbDUCKO2iVTM");
    if(isset($source)){ $source = json_decode($source, true); }
    if(isset($source["id"])){
        $domain = hostname($source["id"]);
    }else{
        $domain = $url;
    }
    return $domain;
}

echo pagespeed("odatv.com");

?>
