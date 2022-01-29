<?php

require_once('EspoApiClient.php');

if (isset($_POST['submitted'])) {

    $url = 'https://crm.firstmarkets.com';

    $apiKey = '48a00f9032bfb820d3e4fb00c55f2a9d';

    $client = new EspoApiClient($url);

    $client->setApiKey($apiKey);

    $file = $this->convert($_POST['yourCV']);

echo $file;

    // example creating a new job
    try {
        $response = $client->request('POST', 'Jobs', [
            'name' => $_POST['name'],
            'emailAddress' => $_POST['emailAddress'],
            'phoneNumber' => $_POST['phoneNumber'],
            'nationality' => $_POST['nationality'],
            'socialStatus' => $_POST['socialStatus'],
            'gender' => $_POST['gender'],
            'dateOfBirth' => $_POST['dateOfBirth'],
            'educationalQualification' => $_POST['educationalQualification'],
            'addressStreet' => $_POST['addressStreet'],
            'addressCity' => $_POST['addressCity'],
            'addressState' => $_POST['addressState'],
            'addressPostalCode' => $_POST['addressPostalCode'],
            'addressCountry' => $_POST['addressCountry'],
            'job' => $_POST['job'],
            'usePrograms' => $_POST['usePrograms'],
            'note' => $_POST['note'],
            'minimumSalary' => $_POST['minimumSalary'],
            'minimumSalaryCurrency' => $_POST['minimumSalaryCurrency'],
            'expectedSalary' => $_POST['expectedSalary'],
            'expectedSalaryCurrency' => $_POST['expectedSalaryCurrency'],
            'lastSalary' => $_POST['lastSalary'],
            'lastSalaryCurrency' => $_POST['lastSalaryCurrency'],
            'yourCV' => $file,
            'otherDetails' => $_POST['otherDetails'],
        ]);

        echo "Data Saved Successfully.";
    } catch (\Exception $e) {
        $errorCode = $e->getCode();
    }
}


function convert($file)
{
    $data = file_get_contents($file);
    $base64 = 'data:text/plain;base64,' . base64_encode($data);

    return json_encode([
        "name" => "test.txt",
        "type" => "text/plain",
        "role" => "Attachment",
        "relatedType" => "Document",
        "field" => "file",
        "file" => $base64
    ]);
}
