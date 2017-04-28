<?php
echo "<h1>Hello OpenShift!<h1>";
echo "Greetings:";
echo getenv("GREETINGS");
echo "<br>";
echo "<h1>Hello OpenShift! CI test<h1>";
echo "Greetings:";
echo getenv("GREETINGS");
echo "Container Name: ";
echo gethostname();
echo "<br>";
echo "Client IP: ";
echo $_SERVER["REMOTE_ADDR"];
?>
