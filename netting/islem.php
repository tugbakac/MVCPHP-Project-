<?php
	include 'baglan.php';

	if (isset($_POST['generalSetting'])) {
		echo "This is true area WELCOME!";
	}
	//Table Update Codes
	$saveSetting=$db->prepare("UPDATE adjustment SET
		adjustment_title=:adjustment_title,
		adjustment_description=:adjustment_description,
		adjustment_keywords=:adjustment_keywords,
		adjustment_author=:adjustment_author
		WHERE adjustment_id=0");

	$update=$saveSetting->execute(array(
		'adjustment_title'=>$_POST['adjustment_title'],
		'adjustment_description'=>$_POST['adjustment_description'],
		'adjustment_keywords'=>$_POST['adjustment_keywords'],
		'adjustment_author'=>$_POST['adjustment_author']
	));

	if ($update) {
		header("Location:../production/settingForm.php?durum=ok");
	}else
	{
		header("Location:../production/settingForm.php?durum=no");
	}
?>