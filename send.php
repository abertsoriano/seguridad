<?php
$args = array(
	'name' => FILTER_SANITIZE_STRING,
	'empresa' => FILTER_SANITIZE_STRING,
	'email' => FILTER_VALIDATE_EMAIL,
	'telefono' => FILTER_SANITIZE_STRING,
	'message' => FILTER_SANITIZE_STRING
);
$json = [];
$params = filter_input_array(INPUT_POST, $args);

$params['name'] = trim($params['name']);
$params['empresa'] = trim($params['empresa']);

if ( $params['name'] == '' ) {
	$json['info'][] = '<li>Escriba su nombre completo</li>';
}
if ( $params['empresa'] == '' ) {
	$json['info'][] = '<li>Debe escribir el nombre de su empresa</li>';
}
if ( $params['telefono'] == '' ) {
	$json['info'][] = '<li>Debe escribir el telefono lokita</li>';
}
if ( ! $params['email'] ) {
	$json['info'][] = '<li>Escriba un correo electrónico válido</li>';
}
if ( $params['message'] == '' ) {
	$json['info'][] = '<li>Debe escribir su Mensaje</li>';
}

if (!empty($json)) {
	$json['is_errors'] = true;
} else {

	require 'mailer/PHPMailerAutoload.php';

	$mail = new PHPMailer(true);
	try {
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->Host = 'localhost';
		$mail->SMTPSecure = 'tls';
		$mail->Username = 'larriega@gmail.com';
		$mail->Password = '';
		$mail->CharSet = 'UTF-8';
		$mail->Port = 587;

		$mail->From = $params['email'];
		$mail->FromName = $params['name'];
		$mail->addAddress('contacto@controlempresarialgroup.com', 'CONTROL EMPRESARIAL GROUP S.A.C.');
		$mail->addReplyTo($params['email'], $params['name']);

		$mail->isHTML(true);
		$mail->Subject = 'Mensaje enviado desde la web de www.controlempresarialgroup.com';
		$mail->Body = '<h2>De: ' . $params['name'] . '</h2><ul><li><strong>Empresa: </strong><span>' . $params['empresa'] . '</span></li>'
						.'<li><strong>Teléfono: </strong><span>' . $params['telefono'] . '</span></li><li><p>' . nl2br($params['message']) . '</p></li></ul>';

		if ( $mail->send() ) {
			$json = array('is_errors' => false, 'success' => true);
		} else {
			$json = array('is_errors' => true, 'info' => ['<li>Lo sentimos, ocurrió un error inesperado. Intentelo de nuevo mas tarde.</li>']);
		}
	} catch (phpmailerException $pex) {
		$json = ['is_errors' => true, 'info' => [$pex->getMessage()]];
	}
}

echo json_encode($json);
