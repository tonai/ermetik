<?php
if (!isset($on))
{
	$on=0;
}
if (isset($_GET['bouton']))
{
	$on=1-$_GET['bouton'];
}
if (isset($_GET['module']))
	$module=$_GET['module'];
else
	$module='';
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Ermetik</title>
		<link rel="stylesheet" media="screen" type="text/css" title="Design" href="style<?php echo $on; ?>.css" />
		<script language="javascript">
function programme()
{
	var disp=document.getElementById("programme").style.display;
	if (disp=='none')
		document.getElementById("programme").style.display='block';
	else
		document.getElementById("programme").style.display='none';
	document.getElementById("trombi").style.display='none';
	document.getElementById("evenement").style.display='none';
}

function trombi()
{
	var disp=document.getElementById("trombi").style.display;
	if (disp=='none')
		document.getElementById("trombi").style.display='block';
	else
		document.getElementById("trombi").style.display='none';
	document.getElementById("programme").style.display='none';
	document.getElementById("evenement").style.display='none';
}

function evenement()
{
	var disp=document.getElementById("evenement").style.display;
	if (disp=='none')
		document.getElementById("evenement").style.display='block';
	else
		document.getElementById("evenement").style.display='none';
	document.getElementById("programme").style.display='none';
	document.getElementById("trombi").style.display='none';
}
		</script>
	</head>
	<body>
		<div id="page">
			<div id="contenu">
				<div id="bouton">
					<a href="index.php?bouton=<?php echo $on; ?>&module=<?php echo $module; ?>"></a>
				</div>
				<div id="menu">
					<ul>
						<li>
							<a href="index.php?bouton=<?php echo !$on; ?>&module=accueil" id="menu1"></a>
						</li>
						<li>
							<a href="#" onClick="javascript:programme()" id="menu2"></a>
						</li>
						<li>
							<a href="#" onClick="javascript:trombi()" id="menu3"></a>
						</li>
						<li>
							<a href="#" onClick="javascript:evenement()" id="menu4"></a>
						</li>
						<li>
							<a href="index.php?bouton=<?php echo !$on; ?>&module=bonus" id="menu5"></a>
						</li>
					</ul>
				</div>
				<div id="corps">
<?php
if ($module!='')
{
	if ($module=='accueil')
	{
		include('accueil.php');
	}
	elseif ($module=='bonus')
	{
		include('bonus.php');
	}
	elseif ($module=='programme')
	{
		include('programme.php');
	}
	elseif ($module=='critiques')
	{
		include('critiques.php');
	}
	elseif ($module=='television')
	{
		include('television.php');
	}
	elseif ($module=='clap')
	{
		include('clap.php');
	}
	elseif ($module=='c')
	{
		include('c.php');
	}
	elseif ($module=='equipe')
	{
		include('equipe.php');
	}
	elseif ($module=='film')
	{
		include('film.php');
	}
	elseif ($module=='vaisselle')
	{
		include('vaisselle.php');
	}
	elseif ($module=='bouffe')
	{
		include('bouffe.php');
	}
	elseif ($module=='vip')
	{
		include('vip.php');
	}
	elseif ($module=='commentaires')
	{
		include('commentaires.php');
	}
}
else
	include('accueil.php');
?>
				</div>
				<div id="programme" style="display: none;">
					<ul>
						<li><a href="index.php?bouton=<?php echo !$on; ?>&module=programme">ZE programme</a></li>
						<li><a href="index.php?bouton=<?php echo !$on; ?>&module=critiques">Les critiques</a></li>
						<li><a href="index.php?bouton=<?php echo !$on; ?>&module=television">Télévision</a></li>
						<li><a href="index.php?bouton=<?php echo !$on; ?>&module=clap">CLAP</a></li>
						<li><a href="index.php?bouton=<?php echo !$on; ?>&module=c">En C</a></li>
						</ul>
				</div>
				<div id="trombi" style="display: none;">
					<ul>
						<li><a href="index.php?bouton=<?php echo !$on; ?>&module=equipe">L'équipe</a></li>
						<li><a href="index.php?bouton=<?php echo !$on; ?>&module=film">Le film</a></li>
					</ul>
				</div>
				<div id="evenement" style="display: none;">
					<ul>
						<li><a href="index.php?bouton=<?php echo !$on; ?>&module=vaisselle">Open vaisselle</a></li>
						<li><a href="index.php?bouton=<?php echo !$on; ?>&module=bouffe">Open bouffe</a></li>
						<li><a href="index.php?bouton=<?php echo !$on; ?>&module=vip">Soirée VIP</a></li>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>
