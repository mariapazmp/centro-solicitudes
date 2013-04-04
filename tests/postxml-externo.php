<?php 
$xml_data ='<issue>'.'<subject>REST APItutututtu</subject>'.'<assigned_to_id>6</assigned_to_id>'.'<project_id>solicitudes_web_crie</project_id>'.'</issue>';
 
 
$URL = "http://localhost:8081/redmine/issues.xml";
 
			$ch = curl_init($URL);
			curl_setopt($ch, CURLOPT_MUTE, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
			curl_setopt($ch, CURLOPT_POSTFIELDS, "$xml_data");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$output = curl_exec($ch);
			curl_close($ch);
 
?>
