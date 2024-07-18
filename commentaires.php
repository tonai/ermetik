<h1>Commentaires</h1>
<form action="index.php?bouton=<?php echo !$on; ?>&module=commentaires" method="post" class="center">
<?php
include ('admin/config.php');
if (isset($_POST['pseudo']))
{
	if ($_POST['pseudo']!='' and $_POST['comm']!='')
	{
		$pseudo=htmlentities($_POST['pseudo'], ENT_QUOTES);
		$comm=htmlentities($_POST['comm'], ENT_QUOTES);
		mysql_connect($db['hostName'], $db['userName'], $db['password']);
		mysql_select_db($db['dataBase']);
		mysql_query("INSERT INTO commentaires(pseudo, comm) VALUES('$pseudo','$comm')") or die(mysql_error());
		mysql_close();
		echo "<p>Votre message a bien été enregistré</p>\n";
	}
}
?>
	<p>
		<label for="pseudo" >Nom : </label><input type="text" name="pseudo" value="
<?php
if (isset($_POST['pseudo']))
{
	if ($_POST['pseudo']==null)
		echo 'Il faut rentrer un nom!';
}
?>"/>
	</p>
	<p>
		<label for="comm" >Message : </label>
		<br/>
		<textarea type="text" name="comm" rows="5" cols="60" >
<?php
if (isset($_POST['comm']))
{
	if ($_POST['comm']==null)
		echo 'Il faut écrire un message...';
}
?></textarea>
		</p>
	<p><input type="submit" value="envoyer" />	<input type="reset" value="effacer" /></p>
</form>

<div id="messages">
<?php
	/*
	mysql_connect($db['hostName'], $db['userName'], $db['password']);
	mysql_select_db($db['dataBase']);
	$reponse=mysql_query("SELECT COUNT(*) AS nb_messages FROM commentaires") or die(mysql_error());
	$donnees=mysql_fetch_row($reponse);
	$messageParPage=10;
	if (!isset($_GET['page']))
	{
		$message=0;
		$pageActuelle=1;
	}
	else
	{
		$message=$messageParPage*($_GET['page']-1);
		$pageActuelle=$_GET['page'];
	}
	$pagesTotales=ceil(($donnees[0])/$messageParPage);
	$pages=$pagesTotales;
	echo '<p>';
	if ($pageActuelle!=1)
	{
		$pagePrec=$pageActuelle-1;
		echo "\n\t<a href=\"index.php?bouton=".!$on."&module=commentaires&page=".$pagePrec."\" title=\"page précédante\"><</a>&nbsp&nbsp;";
	}
	echo "\n\t<a href=\"index.php?bouton=".!$on."&module=commentaires&page=1\" title=\"première page\">1..</a>&nbsp&nbsp;";
	$i=2;
	if ($pageActuelle<=5)
	{
		$i=2;
		if ($pages>9)
			$pages=9;
	}
	elseif ($pageActuelle>=($pagesTotales-4) and $pageActuelle>5)
	{
		if ($pagesTotales>=6)
			$i=$pagesTotales-7;
	}
	else
	{
		$i=$pageActuelle-3;
		$pages=$pageActuelle+3;
	}
	for ($i;$i<$pages;$i++)
	{
		echo "\n\t<a href=\"index.php?bouton=".!$on."&module=commentaires&page=".$i."\">".$i."</a>&nbsp&nbsp;";
	}
	if ($pagesTotales!=1)
		echo "\n\t<a href=\"index.php?bouton=".!$on."&module=commentaires&page=".$pagesTotales."\" title=\"dernière page\">..".$pagesTotales."</a>&nbsp&nbsp;";
	if ($pageActuelle!=$pagesTotales)
	{
		$pageSuiv=$pageActuelle+1;
		echo "\n\t<a href=\"index.php?bouton=".!$on."&module=commentaires&page=".$pageSuiv."\" title=\"page suivante\">></a>";
		}
	echo "\n<p/>";
	$reponse=mysql_query('SELECT pseudo, comm FROM commentaires ORDER BY id DESC LIMIT '.$message.','.$messageParPage.' ');
	while($donnees=mysql_fetch_array($reponse))
	{
		echo "\n<dl>";
		echo "\n<dt>".nl2br($donnees['pseudo'])." :</dt>";
		echo "\n\t<dd>".nl2br($donnees['comm'])."</dd>";
		echo "\n</dl>";
	}
	echo "\n<p>page ".$pageActuelle."</p>\n";
	mysql_close();
	*/
?>
</div>