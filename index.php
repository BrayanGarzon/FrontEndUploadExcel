<?php
$recaptcha_secret = "6LfhebMpAAAAAJ6lMr086cLVU311-jQjv4eyYUDb";
$response = $_POST['g-recaptcha-response'];

$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
    'secret' => $recaptcha_secret,
    'response' => $response
);

$options = array(
    'http' => array (
        'method' => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$response_data = json_decode($result, true);

if ($response_data['success'] == true) {
    // El reCAPTCHA fue validado correctamente, procede con el procesamiento del formulario.
} else {
    // El reCAPTCHA no fue validado correctamente, muestra un mensaje de error.
}
?>
