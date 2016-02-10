<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> Michael Patterson Project Manager </title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<?php include("include/head.php");?> 
	</head>


	<body id="home">


		<?php include ("include/header.php");?>

		<div id="content">
			<h1>Java SQLite to XML converter</h1>
			<p>Github: <a href="https://github.com/PattersonProject/SQLite-to-XML">https://github.com/PattersonProject/SQLite-to-XML</a></p>
			<h2>Project Description</h2>
			<p>This set of Java classes prompts the user for the name of a database that contains information on Oscar winning movies and converts it to a set of well formed XML files which make up an XML database. The sqlite database was built by the teaching staff of Harvard Extension CSCI E 66 Database Systems class in the spring of 2015. It contains 5 tables - Actor, Director, Movie, Oscar and Person. The resulting XML database links the people, Oscars and movies using the id parameter of the XML tags.</p>
			<h2>Instructions for Running the program</h2>
			<p>Clone this repository and from the root directory run the following command: java -cp ".bin;../sqlite-jdbc-3.8.11.2.jar" MovieToXML The source files are in the /scr directory, the movie database is in the root directory. The XML files will be generated in the root directory.</p>
			<h2>Approach</h2>
			<p>My approach was to have the main method in MovieToXML build each XML file by instantiating XMLElement objects based on query results. Once an XMLElement was built, including its child elements the attributes are queried and appended. It is then written to the appropriate XML file. When there are no more records in the query the file is completed and closed. The XMLElement class is written to be as versatile as possible, and can be used to write XML files in different applications as needed. The XMLElement class is responsible for appropriate indentations of the tags, while the main class keeps track of inline elements vs. open elements.</p>
		</div>

		<br><br><br>

		<?php include("include/footer.php");?>
		
	</body>
</html>