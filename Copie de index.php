<?php
		if (!isset($on))
		{
			$on=0;
		}
		if (isset($_GET['bouton']))
		{
			$on=1-$_GET['bouton'];
		}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Ermetik - Le futur BDE</title>
		<link rel="stylesheet" media="screen" type="text/css" title="Design" href="style<?php echo $on; ?>.css" />
	</head>
	<body>
		<div id="page">
			<div id="bouton">
				<a href="index.php?bouton=<?php echo $on; ?>"></a>
			</div>
			<div id="menu">
				<ul>
					<li><a href="index.php?bouton=<?php echo !$on; ?>&module=accueil" id="menu1"></a></li>
					<li>
						<a href="index.php?bouton=<?php echo !$on; ?>&module=programme" id="menu2"></a>
						<ul>
							<li>LE programme</li>
							<li>les critiques</li>
							<li>télévision</li>
							<li>CLAP</li>
							<li>en C</li>
						</ul>
					</li>
					<li>
						<a href="index.php?bouton=<?php echo !$on; ?>&module=trombi" id="menu3"></a>
						<ul>
						</ul>
					</li>
					<li>
						<a href="index.php?bouton=<?php echo !$on; ?>&module=evenements" id="menu4"></a>
						<ul>
						</ul>
					</li>
					<li>
						<a href="index.php?bouton=<?php echo !$on; ?>&module=bonus" id="menu5"></a>
						<ul>
						</ul>
					</li>
				</ul>
			</div>
			<div id="corps">
				<p>Isdem diebus Apollinaris Domitiani gener, paulo ante agens palatii Caesaris curam, ad Mesopotamiam missus a socero per militares numeros immodice scrutabatur, an quaedam altiora meditantis iam Galli secreta susceperint scripta, qui conpertis Antiochiae gestis per minorem Armeniam lapsus Constantinopolim petit exindeque per protectores retractus artissime tenebatur.</p>

				<p>Hac ex causa conlaticia stipe Valerius humatur ille Publicola et subsidiis amicorum mariti inops cum liberis uxor alitur Reguli et dotatur ex aerario filia Scipionis, cum nobilitas florem adultae virginis diuturnum absentia pauperis erubesceret patris.</p>

				<p>Post hoc impie perpetratum quod in aliis quoque iam timebatur, tamquam licentia crudelitati indulta per suspicionum nebulas aestimati quidam noxii damnabantur. quorum pars necati, alii puniti bonorum multatione actique laribus suis extorres nullo sibi relicto praeter querelas et lacrimas, stipe conlaticia victitabant, et civili iustoque imperio ad voluntatem converso cruentam, claudebantur opulentae domus et clarae.</p>

				<p>Haec igitur lex in amicitia sanciatur, ut neque rogemus res turpes nec faciamus rogati. Turpis enim excusatio est et minime accipienda cum in ceteris peccatis, tum si quis contra rem publicam se amici causa fecisse fateatur. Etenim eo loco, Fanni et Scaevola, locati sumus ut nos longe prospicere oporteat futuros casus rei publicae. Deflexit iam aliquantum de spatio curriculoque consuetudo maiorum.</p>

					<p>Quid enim tam absurdum quam delectari multis inanimis rebus, ut honore, ut gloria, ut aedificio, ut vestitu cultuque corporis, animante virtute praedito, eo qui vel amare vel, ut ita dicam, redamare possit, non admodum delectari? Nihil est enim remuneratione benevolentiae, nihil vicissitudine studiorum officiorumque iucundius.</p>
			</div>
		</div>
	</body>
</html>
