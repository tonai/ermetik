<h1>Open bouffe</h1>
<form method="post" action="index.php?bouton=<?php echo !$on; ?>&module=bouffe" class="center">
<?php
include ('admin/config.php');
if (isset($_POST['nom']))
{
	if ($_POST['nom']!=null and $_POST['chambre']!=null)
	{
		$nom=htmlentities($_POST['nom'], ENT_QUOTES);
		$chambre=htmlentities($_POST['chambre'], ENT_QUOTES);
		$accept=$_POST['accept'];
		$chambreTable=str_split(strtolower($chambre));

		if (($chambreTable[0]=='a' or $chambreTable[0]=='b' or $chambreTable[0]=='c' or $chambreTable[0]=='d' or $chambreTable[0]=='e' or $chambreTable[0]=='f') and ($chambreTable[1]>=0 and $chambreTable[1]<=3) and ($chambreTable[4]==null or $chambreTable[4]=='a' or $chambreTable[4]=='b') and $chambreTable[5]==null)
		{
			if ($accept=='on')
			{
				mysql_connect($db['hostName'], $db['userName'], $db['password']);
				mysql_select_db($db['dataBase']);
				$reponse=mysql_query("SELECT chambre FROM bouffe");
				$inscrit=0;
				while($donnees=mysql_fetch_row($reponse))
				{
					if ($chambre==$donnees[0])
					{
						$inscrit=1;
					}
				}
				if ($inscrit==1)
					echo "<p class=\"erreur\">Vous vous ètes déja inscrit</p>\n";
				else
				{
					mysql_query("INSERT INTO bouffe(nom, chambre) VALUES('$nom','$chambre')") or die(mysql_error());
					mysql_close();
					echo "<p>Votre inscription a bien été enregistrée</p>\n";
				}
			}
			else
			{
				echo "<p class=\"erreur\">Il faut accepter les conditions pour pouvoir s'inscrire</p>\n";
			}
		}
		else
		{
			echo "<p class=\"erreur\">erreur de chambre</p>\n";
		}
	}
}
?>
	<p>
		<label for="nom">Nom : </label>
		<input type="text" name="nom" value="
<?php
if (isset($_POST['nom']))
{
	if ($_POST['nom']==null)
		echo 'Il faut rentrer un nom!';
}
?>"/>
	</p>
	<p>
		<label for="chambre">Chambre : </label>
		<input type="text" name="chambre" value="
<?php
if (isset($_POST['chambre']))
{
	if ($_POST['chambre']==null)
		echo 'il faut une chambre';
}
?>"/>
	</p>
	<p>
		<label for="accept">J'accepte les conditions</label>
		<input type="checkbox" name="accept"/>
	</p>
	<p>
		<input type="submit" value="envoyer" />
	</p>
</form>