<?php
   $respuestas = array(
    	"Ahri",
	"Akali",
	"Ak 5",
	"AK-12",
	"AK-15",
	"AK-47",
	"AK-74U",
	"AK-Alfa",
	"Akane (AE)",
	"Akane (DG)",
	"Akane Asagiri",
	"Akane Fudo",
	"Akane Hino",
	"Akane Kasai"

       );
   $aleatorio = array_rand($respuestas);
   echo $respuestas[$aleatorio];
?>