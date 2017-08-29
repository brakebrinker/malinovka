<?php

$method = $_SERVER['REQUEST_METHOD'];

//Script Foreach
$c = true;
if ( $method === 'POST' ) {

	$project_name = "Malinovka";
	$send_email  = "zavod.malinovka@yandex.ru";
	// $send_email  = "max.pevnev@gmail.com";
	$admin_email  = "";
	$form_subject = "Заявка c сайта Malinovka";

	foreach ( $_POST as $key => $value ) {
		if ( $value != "" && $key != "project_name" && $key != "send_email" && $key != "form_subject" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
			<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
			<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
		</tr>
		";
	}
}
} else if ( $method === 'GET' ) {

	$project_name = "Up&Grow";
	$admin_email  = "**********@gmail.com";
	$form_subject = "Заявка c сайта Up&Grow";

	foreach ( $_GET as $key => $value ) {
		if ( $value != "" && $key != "project_name" && $key != "send_email" && $key != "form_subject" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
			<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
			<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
		</tr>
		";
	}
}
}

$message = "<table style='width: 100%;'>$message</table>";

function adopt($text) {
	return '=?UTF-8?B?'.base64_encode($text).'?=';
}

$headers = "MIME-Version: 1.0" . PHP_EOL .
"Content-Type: text/html; charset=utf-8" . PHP_EOL .
'From: '.adopt($project_name).' <'.$admin_email.'>' . PHP_EOL .
'Reply-To: '.$send_email.'' . PHP_EOL;

// echo $send_email;
// echo adopt($form_subject);
// echo $message;
// echo $headers; mr@jetmark.ru

if (mail($send_email, adopt($form_subject), $message, $headers )) { 
    echo "send"; 
} else { 
    echo "error"; 
} 
