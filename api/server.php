<?php
include __DIR__ . "/../database.php";
$faqs_json = json_encode($faqs);
header("Content-Type: application/json");
echo $faqs_json;
?>