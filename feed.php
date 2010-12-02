<?php
//get cool feedburner count
$whaturl="https://feedburner.google.com/api/awareness/1.0/GetFeedData?uri=Torrentfreak";

//Initialize the Curl session
$ch = curl_init();

//Set curl to return the data instead of printing it to the browser.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//Set the URL
curl_setopt($ch, CURLOPT_URL, $whaturl);

//Execute the fetch
$data = curl_exec($ch);

//Close the connection
curl_close($ch);
$xml = new SimpleXMLElement($data);
$fb = $xml->feed->entry['circulation'];
//end get cool feedburner count

echo $fb;

?>

Testitem for GITHUB
