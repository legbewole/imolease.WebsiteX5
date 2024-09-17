<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Nom', @$_POST['imObjectForm_9_1'], '', false);
	$form->setField('Email', @$_POST['imObjectForm_9_2'], '', false);
	$form->setField('Objet', @$_POST['imObjectForm_9_3'], '', false);
	$form->setField('Message', @$_POST['imObjectForm_9_4'], '', false);

	$errorMessage = '';
	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != '173157A6AB15CA6362FAF2E2E8B7DB53' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('noreply@narcisse-z.websitex5.me', '', 'imolease@bourjon.com', 'Nouveau contact du site Imolease', "Nouvelles données reçues depuis mon site web :", false);
		@header('Location: ../index.php');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file