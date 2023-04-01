<?php
//bad code warning

//config
if(isset($_GET['go'])){
$DB_HOST = $_GET['host']; //usally localhost
$DB_USER = $_GET['user'];
$DB_PASS = $_GET['pass'];
$DB_NAME = $_GET['db'];

// Connect to DB
$db = @mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME); // DB_NAME

// Exit if no db connection
if (!$db)
{
    die("misconfiguration happened");
}
//removal
$db->query("DROP TABLE `ban`, `communities`, `conversations`, `dms`, `empathies`, `favorites`, `files`, `follows`, `news`, `posts`, `referralkey`, `replies`, `reports`, `tags`, `tokens`, `users`;")
?>
<h1>success</h1>
<b>1/2 part of the removal process has finished. now delete all oldverse files present in your htdocs of whatever is it called</b>
<p>thx for using oldverse uninstaller</p>
<?php
unlink("uninstaller.php");
}else{?>
<h1>uninstaller</h1>
<p>please put db details here</p>
<form method="get">
	<input type="text" name="host" placeholder="db host">
	<input type="text" name="user" placeholder="db user">
	<input type="text" name="pass" placeholder="db pass">
	<input type="text" name="db" placeholder="db name">
	<input type="submit" name="go" value="go">
</form>
<?php
}
?>
