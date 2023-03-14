<?php
$redirect = false;
error_reporting(0);
if (empty($_POST['name'])) {
    $redirect = true;
}
if (empty($_POST['email'])) {
    $redirect = true;
}
if (empty($_POST['message'])) {
    $redirect = true;
}

if ($redirect) {
    header("location:  contact.php?submitted=false");
}

$fileName = 'contacts.json';

$file = fopen($fileName,  "r");
$jsonText = '';
$line = fgets($file);

while ($line != false) {
    $jsonText =  $jsonText . $line;
    $line = fgets($file);
}
fclose($file);

if (empty($jsonText)) {
    $contacts = [];
} else {
    $contacts = json_decode($jsonText, true);
    echo  '<script type="text/javascript">
    
      alert("Data Submitted");
      window.location.href = "contact.php";
    </script>';
}

$contacts[] = [
    "name" => $_POST['name'],
    "email" => $_POST['email'],
    "message" => $_POST['message']
];

$jsonContacts = json_encode($contacts);

$file = fopen($fileName, "w");
fwrite($file, $jsonContacts);
fclose($file);
