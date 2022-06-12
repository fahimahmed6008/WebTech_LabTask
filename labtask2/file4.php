<?php

echo "Name:";
echo $_POST["uname"]."<br>";
echo "Password:";
echo $_POST["pass"]."<br>";
echo "Gender:";
echo $_POST["gender"]."<br>";
echo "Skill:";
foreach ($_POST["skills"] as $b)
{
	echo $b;
}


?>