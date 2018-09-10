<?php
	$nome = $_POST['name'];
	$email = $_POST['email'];
	$assunto = $_POST['subject'];
	$mensagem = $_POST['message'];

	// system("curl -s --user 'api:6dd3510964328ecd1fac57eb442f46f2-7efe8d73-b6516c7l' https://api.mailgun.net/v3/https://app.mailgun.com/app/domains/sandbox3662044142d04ea5bfc3b22ecb43e9ad.mailgun.org/messages -F from='".$nome." <".$email.">' -F to=contato@pantekti.com.br -F subject='[CONTATO DO SITE] ".$assunto."' -F text='".$mensagem."'");

	system("curl -s --user 'api:6dd3510964328ecd1fac57eb442f46f2-7efe8d73-b6516c7c' https://api.mailgun.net/v3/sandbox3662044142d04ea5bfc3b22ecb43e9ad.mailgun.org/messages -F from='".$nome." <".$email.">' -F to=contato@pantekti.com.br -F subject='[CONTATO DO SITE] ".$assunto."' -F text='".$mensagem."'");
	
	echo "OK";
?>
