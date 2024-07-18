<div id="accueil">
	<h1>Accueil</h1>
</div>
<div id="commentaires">
	<h2>Commentix</h2>
	<p><a href="index.php?bouton=<?php echo !$on ?>&module=commentaires">Postez un commentaires!</a></p>
<?php
include ('admin/config.php');
mysql_connect($db['hostName'], $db['userName'], $db['password']);
mysql_select_db($db['dataBase']);
$reponse=mysql_query("SELECT COUNT(*) AS nb_messages FROM commentaires") or die(mysql_error());
$donnees=mysql_fetch_row($reponse);
if ($donnees[0]>5)
	$messageParPage=5;
else
	$messageParPage=$donnees[0];
$reponse=mysql_query('SELECT pseudo, comm FROM commentaires ORDER BY id DESC LIMIT 0,'.$messageParPage.' ');
while($donnees=mysql_fetch_array($reponse))
{
	echo "\n<dl>";
	echo "\n<dt class=\"titre\">".nl2br($donnees['pseudo'])."</dt>";
	echo "\n\t<dd>".nl2br($donnees['comm'])."</dd>";
	echo "\n</dl>";
}
mysql_close();
?>
</div>