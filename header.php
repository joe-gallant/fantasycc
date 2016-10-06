<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title>Fantasy Cricket App</title>
</head>
<body>

<nav id="main-menu">
	<ul>
		<li id="back" onclick="openMenu()">Back</li>
		<li><a href="#">Dashboard</a></li>
		<li><a href="#">Manage Team</a></li>
		<li><a href="#">League</a></li>
		<li><a href="#">Players</a></li>
		<li><a href="#">Rules</a></li>
	</ul>
</nav>

<div id="container">

<header>
	<div class="left"><img src="images/logo.png" alt="Logo" /></div>
	<button onclick="openMenu()" id="burger-menu" class="right">
		<span></span>
	</button>
</header>