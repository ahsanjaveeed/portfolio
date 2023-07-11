<?php 

	$file_name = "AhsanJaveeed.pdf";
	//  $file_url = "https://firebasestorage.googleapis.com/v0/b/vendorapp-acc5f.appspot.com/o/AhsanJaved_CV_21.pdf?alt=media&token=ff3a206c-55cb-4cec-a0fc-7b2e0ac02ad5";
	 $file_url = "img/AhsanJaved_2023.pdf";
	header('Content-Type: application/octet-stream');
	header("Content-Transfer-Encoding: Binary"); 
	header("Content-disposition: attachment; filename=\"".$file_name."\""); 
	readfile($file_url);
	exit;
	
?>