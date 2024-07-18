<div id="overflow" class="center">
	<form action="index.php?bouton=<?php echo !$on; ?>&module=meetix" method="post" id="formulaire">
<?php
include ('admin/config.php');
if (isset($_POST['pseudo']))
{
	if ($_POST['message']!='' and $_POST['pseudo']!='')
	{
		$pseudo=htmlentities($_POST['pseudo'], ENT_QUOTES);
		$message=htmlentities($_POST['message'], ENT_QUOTES);
		mysql_connect($db['hostName'], $db['userName'], $db['password']);
		mysql_select_db($db['dataBase']);
		mysql_query("INSERT INTO meetix(pseudo, message) VALUES('$pseudo','$message')") or die(mysql_error());
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
	if ($_POST['pseudo']=='')
		echo 'Il faut rentrer un nom!';
}
?>"/>
		</p>
		<p>
			<label for="message" >Message : </label>
			<br/>
			<textarea type="text" name="message" rows="5" cols="60" >
<?php
if (isset($_POST['message']))
{
	if ($_POST['message']=='')
		echo 'Il faut écrire un message...';
}
?></textarea>
			</p>
		<p><input type="submit" value="envoyer" />	<input type="reset" value="effacer" /></p>
	</form>
	<div>
<?php
	mysql_connect($db['hostName'], $db['userName'], $db['password']);
	mysql_select_db($db['dataBase']);
	$reponse=mysql_query("SELECT COUNT(*) AS nb_messages FROM meetix");
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
		echo "\n\t<a href=\"index.php?bouton=".!$on."&module=meetix&page=".$pagePrec."\" title=\"page précédante\"><</a>&nbsp&nbsp;";
	}
	echo "\n\t<a href=\"index.php?bouton=".!$on."&module=meetix&page=1\" title=\"première page\">1..</a>&nbsp&nbsp;";
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
		echo "\n\t<a href=\"index.php?bouton=".!$on."&module=meetix&page=".$i."\">".$i."</a>&nbsp&nbsp;";
	}
	if ($pagesTotales!=1)
		echo "\n\t<a href=\"index.php?bouton=".!$on."&module=meetix&page=".$pagesTotales."\" title=\"dernière page\">..".$pagesTotales."</a>&nbsp&nbsp;";
	if ($pageActuelle!=$pagesTotales)
	{
		$pageSuiv=$pageActuelle+1;
		echo "\n\t<a href=\"index.php?bouton=".!$on."&module=meetix&page=".$pageSuiv."\" title=\"page suivante\">></a>";
		}
	echo "\n<p/>";
	$reponse=mysql_query('SELECT pseudo, message FROM meetix ORDER BY id DESC LIMIT '.$message.','.$messageParPage.' ');
	while($donnees=mysql_fetch_array($reponse))
	{
		echo "\n<dl>";
		echo "\n<dt class=\"titre\">".nl2br($donnees['pseudo'])." :</dt>";
		echo "\n\t<dd>".nl2br($donnees['message'])."</dd>";
		echo "\n</dl>";
	}
	echo "\n<p>page ".$pageActuelle."</p>\n";
	mysql_close();
?>
	</div>
</div>