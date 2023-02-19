<?php
if( !function_exists('apache_request_headers') ) {
///
function apache_request_headers() {
  $arh = array();
  $rx_http = '/\AHTTP_/';
  foreach($_SERVER as $key => $val) {
    if( preg_match($rx_http, $key) ) {
      $arh_key = preg_replace($rx_http, '', $key);
      $rx_matches = array();
      // do some nasty string manipulations to restore the original letter case
      // this should work in most cases
      $rx_matches = explode('_', $arh_key);
      if( count($rx_matches) > 0 and strlen($arh_key) > 2 ) {
        foreach($rx_matches as $ak_key => $ak_val) $rx_matches[$ak_key] = ucfirst($ak_val);
        $arh_key = implode('-', $rx_matches);
      }
      $arh[$arh_key] = $val;
    }
  }
  return( $arh );
}
///
}
///

$server = print_r($_SERVER, true);
$post = print_r($_POST, true);
$get = print_r($_GET, true);
$raw = file_get_contents("php://input");
$header = print_r( apache_request_headers(), true );


$fp = fopen('data', 'a+');
fwrite($fp,  "\n\n################################################\n[".date('Y-m-d H:i:s')."] \n################################################\n");
fwrite($fp, "**********\nHEADER:\n**********\n".$header."**********\nSERVER:\n**********\n".$server."**********\nPOST:\n**********\n".$post."**********\nGET:\n**********\n".$get."**********\nRAW:\n**********\n".$raw);
fclose($fp);
?>

HEADER:
<?=$header?>
SERVER:
<?=$server?>
POST:
<?=$post?>
GET:
<?=$get?>
RAW:
<?=$raw?>