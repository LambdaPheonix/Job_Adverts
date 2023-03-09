<?php
// define WSDL location
$wsdl = "https://webapp.placementpartner.com/ws/clients/?wsdl";
// provided by Parallel Software

$username = 'parallel';
$password = 'parallel';
$soap_args = array(
'exceptions' => true,
'cache_wsdl' => WSDL_CACHE_NONE,
'soap_version' => SOAP_1_1,
'trace' => 1
);

// create SOAP Client
$client = new SoapClient($wsdl, $soap_args);
// Authenticate with username and password
$session_id = $client->login($username, $password);
// create a filter that matches job_description against "PHP"
$php_filter = array(
array('field' => 'job_description', 'value' => 'php', 'operator' => 'exact')
);
// Retrieve adverts with filter
$vacancies = $client->getAdverts($session_id);
// dump the results
var_dump($vacancies);
// php php_adverts.php
echo "<br><br><br>".gettype($vacancies). " " . count($vacancies);
$arrstr = array();
foreach($vacancies as $elem){
    $str = json_encode($elem);
    array_push($arrstr,$str);
    echo "<br><br><br>".$str;
}
/*
$dump = json_encode($vacancies);

$dumparr = split_str($dump);

echo "<h1>Arr starts here</h1>";
foreach($dumparr as $elem){
    echo "<br>". $elem;
}

function split_str($dump){
    $arrKeys = array();
    $key = '';
    $value = "";
    $i = 0; // keeps track of how far into the string we are
    while ($i < strlen($dump)){
        $strpos = stripos($dump,")",$i);
        $key = substr($dump,$i,$strpos);
        echo $key;
        $i = $strpos+1;
        $strpos = stripos($dump,")",$i);
        $value = substr($dump,$i,$strpos);
        echo $value;
        array_push($arrKeys,$key, $value);
    }
    return $arrKeys;

}

*/
?>