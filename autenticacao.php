<?php
if(!$_SESSION['usuario']) {
	header('Location: main.php');
	exit();
}