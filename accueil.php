<div id="accueil">
	<h1>Accueil</h1>
</div>
<div id="commentaires">
	<h2>Commentix</h2>
	<p><a href="index.php?bouton=<?php echo !$on ?>&module=commentaires">Postez un commentaires!</a></p>
<?php
include ('admin/config.php');
/*
$mysqli = mysqli_connect($db['hostName'], $db['userName'], $db['password']);
mysqli_select_db($mysqli, $db['dataBase']);
$reponse=mysqli_query($mysqli, "SELECT COUNT(*) AS nb_messages FROM commentaires") or die(mysqli_error());
$donnees=mysqli_fetch_row($reponse);
if ($donnees[0]>5)
	$messageParPage=5;
else
	$messageParPage=$donnees[0];
$reponse=mysqli_query($mysqli, 'SELECT pseudo, comm FROM commentaires ORDER BY id DESC LIMIT 0,'.$messageParPage.' ');
while($donnees=mysqli_fetch_array($reponse))
{
	echo "\n<dl>";
	echo "\n<dt class=\"titre\">".nl2br($donnees['pseudo'])."</dt>";
	echo "\n\t<dd>".nl2br($donnees['comm'])."</dd>";
	echo "\n</dl>";
}
mysqli_close($mysqli);
*/
?>
</div>