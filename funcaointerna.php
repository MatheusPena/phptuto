<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title></title>
</head>
<body>
<?php
	echo strlen("matheus"); //strlen conta quantas strings existem dentro do parênteses
	echo "<br>"; //pula linha
	echo str_word_count("oi matheus"); //str_word_count conta quantas palavras existem dentro do parênteses
	echo "<br>"; //pula linha
	echo strrev("oi matheus"); //strrev escreve o que está dentro do parênteses ao contrário
	echo "<br>"; //pula linha
	echo strpos("oi matheus", "matheus"); //strpos checa em qual posição está a string mencionada 
	echo "<br>"; //pula linha
	echo str_replace("matheus", "gabriel", "oi matheus"); //str_replace substitui a string mencionada
?> 
</body>
</html>
