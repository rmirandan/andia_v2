<?php

// Your ID and token
$list_id = "12d025816e";
$apikey = '987e14ae90fbbe8dcf1c6fcd4a606b81-us18';

// The data to send to the API
$postData = json_encode([ 
        'email_address' => $_GET['email'],
        'status' => "subscribed",
        'double_optin' => "false",
        'merge_fields' => [
            "NAME" => $_GET['name'],
            "COMPANY" => $_GET['company'],
            "POSITION" => $_GET['position'],
            "PHONE" => $_GET['phone'],
            "MSSG" => $_GET['message'],
            
        ]
    ]);
// Setup cURL
echo($postData);

$ch = curl_init('https://us18.api.mailchimp.com/3.0/lists/'.$list_id.'/members/');
curl_setopt_array($ch, array(
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_USERPWD => 'angel@andia.io:' . $apikey,
    CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
    CURLOPT_POSTFIELDS => $postData
));

// Send the request
$response = curl_exec($ch);
$resultStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if ($resultStatus == 200) {
    // everything went better than expected
    echo ($response);
} else {
    // the request did not complete as expected. common errors are 4xx
    // (not found, bad request, etc.) and 5xx (usually concerning
    // errors/exceptions in the remote script execution)

echo('Request failed: HTTP status code: ' . $resultStatus);
echo $response;
}
?>