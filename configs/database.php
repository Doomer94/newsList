<?php
define(DB_HOST, "127.0.0.1:3306");
define(DB_USERNAME, "root");
define(DB_PASSWORD, "");
define(DB_NAME, "app");
$mysqli = new mysqli( DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
?>