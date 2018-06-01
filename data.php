<?php
$username =$_POST['id1'];
$password =$_POST['id2'];
$height =$_POST['id3'];
$weight =$_POST['id4'];
$postcode =$_POST['id5'];



$list = array
(
$username,
$password,
$height,
$weight,
$postcode
);

$filename = $username.'.csv';

if (file_exists($filename)) {

  $handle = fopen($username.'.csv', "a");
  fputcsv($handle, $list);
  fclose($handle);
}
else {

  //following code is to create csv file.
  $file = fopen($username.'.csv',"w");
  fputcsv($file,$list);
  fclose($file);

}

?>
