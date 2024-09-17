<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Date d\'arrivée', @$_POST['imObjectForm_1_1'], '', false);
	$form->setField('Date de départ', @$_POST['imObjectForm_1_2'], '', false);
	$form->setField('Adults', @$_POST['imObjectForm_1_3'], '', false);
	$form->setField('Enfants', @$_POST['imObjectForm_1_4'], '', false);

	$errorMessage = '';
	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != 'F90FCF4A377AF25B568FD41B09CE4253' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('noreply@narcisse-z.websitex5.me', '', 'imolease@bourjon.com', 'Nouveau contact', "Nouvelles données reçues depuis mon site web :", false);
		@header('Location: ../index.php');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file