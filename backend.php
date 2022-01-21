<?php

require_once('EspoApiClient.php');

if (isset($_POST['submitted'])) {

    $url = 'https://crm.firstmarkets.com';

    $apiKey = '48a00f9032bfb820d3e4fb00c55f2a9d';

    $client = new EspoApiClient($url);

    $client->setApiKey($apiKey);

    // example creating a new lead
    try {
        $response = $client->request('POST', 'Jobs', [
            'name' => $_POST['name'],
            'emailAddress' => $_POST['emailAddress'],
            'phoneNumber' => $_POST['phoneNumber'],
            'nationality' => $_POST['nationality'],
        ]);

        echo "Data Saved Successfully.";
    } catch (\Exception $e) {
        $errorCode = $e->getCode();
    }
}
