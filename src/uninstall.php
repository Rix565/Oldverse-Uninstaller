<?php
//config
const DB_HOST = "localhost"; //usally localhost
const DB_USER = "oldverse";
const DB_PASS = "";
const DB_NAME = "oldverse";

// Connect to DB
$db = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME); // DB_NAME

// Exit if no db connection
if (!$db)
{
    http_response_code(500);
    exit;
}
//removal
$sql->query("DROP TABLE `ban`, `communities`, `conversations`, `dms`, `empathies`, `favorites`, `files`, `follows`, `news`, `posts`, `referralkey`, `replies`, `reports`, `tags`, `tokens`, `users`;")
?>
<h1>success</h1>
<b>1/2 part of the removal process has finished. now delete all oldverse files present in your htdocs of whatever is it called</b>
<p>thx for using oldverse uninstaller</p>
