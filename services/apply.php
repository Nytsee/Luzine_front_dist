<?php
header('Content-Type: application/json');
sleep(2);
// Example: validate POST data
$response = [
    'status' => 0, // default to error
    'msg' => 'Something went wrong'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Example: basic validation
    if (!empty($_POST['user_mail']) && !empty($_POST['lastFame']) && !empty($_POST['user_phone'])) {
        $response['status'] = 1;
        $response['msg'] = 'Form submitted successfully!';
    } else {
        $response['status'] = 0;
        $response['msg'] = 'Please fill all required fields.';
    }
}

echo json_encode($response);
exit;
