<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title></title>
</head>
<body>

<form method="GET">
<input type="text" name="pessoa">
<button>Enviar</button>

</form>

<?php

$name = $_GET['pessoa'] ;
echo $name." é um cara legal";

?> 
</body>
</html>
