<?php
$imgUrl = "https://site.com/path-to-image.jpg";
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, "urls=".$imgUrl."");
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
  "content-type: application/x-www-form-urlencoded",
        'Authorization: Basic '. base64_encode("NANONETS_API_KEY:")
));
curl_setopt($curl, CURLOPT_URL, 'https://app.nanonets.com/api/v2/ObjectDetection/Model/{MODEL_ID}/LabelUrls/');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
$result = curl_exec($curl);
if(!$result){die("Connection Failure");}
curl_close($curl);
echo $result;
?>
