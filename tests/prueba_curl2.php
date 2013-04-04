
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

	<head>
	</head>
	
	<body>
	<h1>Hasdjfkjkjcuchicuchi </h1>
	
<?php 
require_once ('ActiveResource.php');
 
class Issue extends ActiveResource {
    var $site = 'http://pazu:123456@localhost:8080/';
    var $request_format = 'xml'; // REQUIRED!
}
 
// Creando
$issue = new Issue (array ('subject' => 'XML REST API', 'project_id' => '1'));
$issue->save ();
echo $issue->id;
 

?>

	
	</body>
</html>