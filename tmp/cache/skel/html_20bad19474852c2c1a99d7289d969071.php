<?php

/*
 * Squelette : squelettes/sommaire.html
 * Date :      Sat, 04 Aug 2018 15:23:14 GMT
 * Compile :   Tue, 07 Aug 2018 17:27:27 GMT
 * Boucles :   _EDITO, _EDITOmobile, _RECENTS, _RECENTSmobile, _MotoMag, _FFMCNat
 */ 

function BOUCLE_EDITOhtml_20bad19474852c2c1a99d7289d969071(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$doublons_index = array();

	// Initialise le(s) critère(s) doublons
	if (!isset($doublons[$d = 'articles'])) { $doublons[$d] = ''; }

	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_EDITO';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("articles.date",
		"articles.titre",
		"articles.id_article",
		"articles.texte",
		"articles.lang");
		$command['orderby'] = array('articles.date DESC');
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')));
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'L1.id_mot', "1"), 
			array(sql_in('articles.id_article', $doublons[$doublons_index[]= ('articles')], 'NOT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_20bad19474852c2c1a99d7289d969071','_EDITO',23,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

			foreach($doublons_index as $k) $doublons[$k] .= "," . $Pile[$SP]['id_article']; // doublons

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
				<h1>A LA UNE<hr/></h1> ' .
(($t1 = strval(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))))!=='' ?
		((	'
				<h5 class="titre-article-une"><a href="' .
	vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
	'">') . $t1 . '</a></h5>') :
		'') .
'
				<span class="published"><abbr title="' .
interdire_scripts(date_iso(normaliser_date($Pile[$SP]['date']))) .
'">' .
(($t1 = strval(interdire_scripts(nom_jour(normaliser_date($Pile[$SP]['date'])))))!=='' ?
		($t1 . ' ') :
		'') .
interdire_scripts(affdate(normaliser_date($Pile[$SP]['date']))) .
'</span>
				<hr/> ' .
(($t1 = strval(interdire_scripts(couper(propre($Pile[$SP]['texte'], $connect, $Pile[0]),'550'))))!=='' ?
		((	'
				<div class="extrait-une">') . $t1 . '</div>') :
		'') .
'
			');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_EDITO @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_EDITOmobilehtml_20bad19474852c2c1a99d7289d969071(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$doublons_index = array();

	// Initialise le(s) critère(s) doublons
	if (!isset($doublons[$d = 'articles'])) { $doublons[$d] = ''; }

	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_EDITOmobile';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("articles.date",
		"articles.titre",
		"articles.id_article",
		"articles.texte",
		"articles.lang");
		$command['orderby'] = array('articles.date DESC');
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')));
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'L1.id_mot', "1"), 
			array(sql_in('articles.id_article', $doublons[$doublons_index[]= ('articles')], 'NOT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_20bad19474852c2c1a99d7289d969071','_EDITOmobile',32,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

			foreach($doublons_index as $k) $doublons[$k] .= "," . $Pile[$SP]['id_article']; // doublons

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
				<h1>A LA UNE<hr/></h1> ' .
(($t1 = strval(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))))!=='' ?
		((	'
				<h5 class="titre-article-une"><a href="' .
	vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
	'">') . $t1 . '</a></h5>') :
		'') .
'
				<span class="published"><abbr title="' .
interdire_scripts(date_iso(normaliser_date($Pile[$SP]['date']))) .
'">' .
(($t1 = strval(interdire_scripts(nom_jour(normaliser_date($Pile[$SP]['date'])))))!=='' ?
		($t1 . ' ') :
		'') .
interdire_scripts(affdate(normaliser_date($Pile[$SP]['date']))) .
'</span>
				<hr/> ' .
(($t1 = strval(interdire_scripts(couper(propre($Pile[$SP]['texte'], $connect, $Pile[0]),'300'))))!=='' ?
		((	'
				<div class="extrait-articles extrait-une">') . $t1 . '</div>') :
		'') .
'
			');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_EDITOmobile @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_RECENTShtml_20bad19474852c2c1a99d7289d969071(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$doublons_index = array();

	// Initialise le(s) critère(s) doublons
	if (!isset($doublons[$d = 'articles'])) { $doublons[$d] = ''; }

	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_RECENTS';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("articles.date",
		"articles.titre",
		"articles.id_article",
		"articles.texte",
		"articles.lang");
		$command['orderby'] = array('articles.date DESC');
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')));
		$command['limit'] = '0,8';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('NOT', 
			array('=', 'articles.id_article', "1")), 
			array('NOT', 
			array('IN', 'articles.id_article', 
			array('SELF', 'articles.id_article', 
			array('=', 'L1.id_mot', "14")))), 
			array(sql_in('articles.id_article', $doublons[$doublons_index[]= ('articles')], 'NOT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_20bad19474852c2c1a99d7289d969071','_RECENTS',45,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

			foreach($doublons_index as $k) $doublons[$k] .= "," . $Pile[$SP]['id_article']; // doublons

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
					' .
(($t1 = strval(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))))!=='' ?
		((	'
					<h5 class="titre-article"><a href="' .
	vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
	'">') . $t1 . '</a></h5>') :
		'') .
'
					<span><abbr class="published-sommaire" title="' .
interdire_scripts(date_iso(normaliser_date($Pile[$SP]['date']))) .
'">' .
(($t1 = strval(interdire_scripts(nom_jour(normaliser_date($Pile[$SP]['date'])))))!=='' ?
		($t1 . ' ') :
		'') .
interdire_scripts(affdate(normaliser_date($Pile[$SP]['date']))) .
'</span> ' .
(($t1 = strval(interdire_scripts(couper(propre($Pile[$SP]['texte'], $connect, $Pile[0]),'200'))))!=='' ?
		((	'
					<div class="">') . $t1 . '</div>') :
		'') .
'<br/>
				');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_RECENTS @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_RECENTSmobilehtml_20bad19474852c2c1a99d7289d969071(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$doublons_index = array();

	// Initialise le(s) critère(s) doublons
	if (!isset($doublons[$d = 'articles'])) { $doublons[$d] = ''; }

	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_RECENTSmobile';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("articles.date",
		"articles.titre",
		"articles.id_article",
		"articles.texte",
		"articles.lang");
		$command['orderby'] = array('articles.date DESC');
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')));
		$command['limit'] = '0,4';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('NOT', 
			array('=', 'articles.id_article', "1")), 
			array('NOT', 
			array('IN', 'articles.id_article', 
			array('SELF', 'articles.id_article', 
			array('=', 'L1.id_mot', "14")))), 
			array(sql_in('articles.id_article', $doublons[$doublons_index[]= ('articles')], 'NOT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_20bad19474852c2c1a99d7289d969071','_RECENTSmobile',57,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

			foreach($doublons_index as $k) $doublons[$k] .= "," . $Pile[$SP]['id_article']; // doublons

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
					' .
(($t1 = strval(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))))!=='' ?
		((	'
					<h5 class="titre-article"><a href="' .
	vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
	'">') . $t1 . '</a></h5>') :
		'') .
'
					<span><abbr class="published" title="' .
interdire_scripts(date_iso(normaliser_date($Pile[$SP]['date']))) .
'">' .
(($t1 = strval(interdire_scripts(nom_jour(normaliser_date($Pile[$SP]['date'])))))!=='' ?
		($t1 . ' ') :
		'') .
interdire_scripts(affdate(normaliser_date($Pile[$SP]['date']))) .
'</span> ' .
(($t1 = strval(interdire_scripts(couper(propre($Pile[$SP]['texte'], $connect, $Pile[0]),'100'))))!=='' ?
		((	'
					<div class="extrait-articles">') . $t1 . '</div>') :
		'') .
'
				');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_RECENTSmobile @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_MotoMaghtml_20bad19474852c2c1a99d7289d969071(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'syndic_articles';
		$command['id'] = '_MotoMag';
		$command['from'] = array('syndic_articles' => 'spip_syndic_articles','L1' => 'spip_syndic');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("syndic_articles.date",
		"syndic_articles.titre",
		"syndic_articles.url");
		$command['orderby'] = array('syndic_articles.date DESC');
		$command['where'] = 
			array(
quete_condition_statut('L1.statut','publie,prop','publie',''), 
quete_condition_statut('syndic_articles.statut','publie,prop','publie',''), 
			array('=', 'syndic_articles.id_syndic', "2"));
		$command['join'] = array('L1' => array('syndic_articles','id_syndic'));
		$command['limit'] = '0,3';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_20bad19474852c2c1a99d7289d969071','_MotoMag',78,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
											' .
(($t1 = strval(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))))!=='' ?
		((	'
											<div class="texte">
												<img src="puce.gif" alt="" width="8" height="11" border="0" align="left">
												<a href="' .
	vider_url($Pile[$SP]['url']) .
	'" target="_self">') . $t1 . '</a>
											</div>
											') :
		'') .
'
											');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_MotoMag @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_FFMCNathtml_20bad19474852c2c1a99d7289d969071(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'syndic_articles';
		$command['id'] = '_FFMCNat';
		$command['from'] = array('syndic_articles' => 'spip_syndic_articles','L1' => 'spip_syndic');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("syndic_articles.date",
		"syndic_articles.titre",
		"syndic_articles.url");
		$command['orderby'] = array('syndic_articles.date DESC');
		$command['where'] = 
			array(
quete_condition_statut('L1.statut','publie,prop','publie',''), 
quete_condition_statut('syndic_articles.statut','publie,prop','publie',''), 
			array('=', 'syndic_articles.id_syndic', "1"));
		$command['join'] = array('L1' => array('syndic_articles','id_syndic'));
		$command['limit'] = '0,3';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_20bad19474852c2c1a99d7289d969071','_FFMCNat',103,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
											' .
(($t1 = strval(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))))!=='' ?
		((	'
											<div class="texte">
												<img src="puce.gif" alt="" width="8" height="11" border="0" align="left">
												<a href="' .
	vider_url($Pile[$SP]['url']) .
	'" target="_self">') . $t1 . '</a>
											</div>
											') :
		'') .
'
											');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_FFMCNat @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/sommaire.html
// Temps de compilation total: 68.238 ms
//

function html_20bad19474852c2c1a99d7289d969071($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!DOCTYPE html>
<html lang="fr">

<head>
	<!-- Entête -->
	<meta charset="utf-8" />
	' .
recuperer_fond( 'inclure/inc_styles' , array(), array('compil'=>array('squelettes/sommaire.html','html_20bad19474852c2c1a99d7289d969071','',7,$GLOBALS['spip_lang'])), _request('connect')) .
'
	' .
recuperer_fond( 'inclure/inc_fonts' , array(), array('compil'=>array('squelettes/sommaire.html','html_20bad19474852c2c1a99d7289d969071','',2,$GLOBALS['spip_lang'])), _request('connect')) .
'
	' .
recuperer_fond( 'inclure/inc_robots-do' , array(), array('compil'=>array('squelettes/sommaire.html','html_20bad19474852c2c1a99d7289d969071','',2,$GLOBALS['spip_lang'])), _request('connect')) .
'
	' .
recuperer_fond( 'inclure/inc_desc' , array(), array('compil'=>array('squelettes/sommaire.html','html_20bad19474852c2c1a99d7289d969071','',2,$GLOBALS['spip_lang'])), _request('connect')) .
'
	<title>' .
interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])) .
'</title>
</head>

<body class="page-accueil">

	<!-- Header -->
	' .
recuperer_fond( 'inclure/inc_entete' , array(), array('compil'=>array('squelettes/sommaire.html','html_20bad19474852c2c1a99d7289d969071','',8,$GLOBALS['spip_lang'])), _request('connect')) .
'

	<!-- Corps de la page -->
	<div class="conteneur">

		<div class="une">
			' .
BOUCLE_EDITOhtml_20bad19474852c2c1a99d7289d969071($Cache, $Pile, $doublons, $Numrows, $SP) .
'
		</div>
		<div class="une-mobile">
			' .
BOUCLE_EDITOmobilehtml_20bad19474852c2c1a99d7289d969071($Cache, $Pile, $doublons, $Numrows, $SP) .
'
		</div>

		<div id="colonne-laterale-gauche">
			<div class="article">
				<h1>LES DERNIERS ARTICLES<hr></h1>
				
				' .
BOUCLE_RECENTShtml_20bad19474852c2c1a99d7289d969071($Cache, $Pile, $doublons, $Numrows, $SP) .
'
			</div>
			<!-- Articles -->
		<!--
			<div class="article-mobile">
				<h1>LES DERNIERS ARTICLES<hr></h1>
				
				' .
BOUCLE_RECENTSmobilehtml_20bad19474852c2c1a99d7289d969071($Cache, $Pile, $doublons, $Numrows, $SP) .
'
			</div> -->
			<!-- Articles mobile -->

			<div class="article">
				
				<table WIDTH="100%" BORDER="0" CLASS="news">
					<TR>
						
						<TD WIDTH="50%" VALIGN="TOP" STYLE="padding-right: 20px;">
							<DIV ID="NewsMotoMag">
								<IMG SRC="images/Motomag_mini.jpg">&nbsp;&nbsp;
								<B>  Les derni&egrave;res infos de MotoMag</B>
								<BR>
								<BR>
								<div class="texte-news">
									' .
(($t1 = BOUCLE_MotoMaghtml_20bad19474852c2c1a99d7289d969071($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
										' . $t1 . '
									') :
		'') .
'
								</div>
								<BR>
								<DIV STYLE="text-align: right;">
									<I><A HREF="http://www.motomag.com" TARGET="_blank">Toutes les news de Motomag ></A></I>
								</DIV>
							</DIV>
						</TD>
						 
						<TD WIDTH="50%" VALIGN="TOP" STYLE="padding-left: 20px;">
							<DIV ID="NewsNationales">
								<IMG SRC="images/FFMC_mini.jpg">&nbsp;&nbsp;
								<B>Les infos de la FFMC nationale</B>
								<BR>
								<BR>
								<div class="texte-news">
									' .
(($t1 = BOUCLE_FFMCNathtml_20bad19474852c2c1a99d7289d969071($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
										' . $t1 . '
									') :
		'') .
'
								</div>
								<BR>
								<DIV STYLE="text-align: right;">
									<I><A HREF="http://www.ffmc.asso.fr/" TARGET="_blank">Toutes les news du national ></A></I>
								</DIV>
							</DIV>
						</TD>
						
					</TR>
				</table>
				' .
'
			</div>
			<!-- Dernières infos -->
		</div>

		<div id="colonne-laterale-droite">
			<?xml version="1.0" encoding="utf-8"?>
			<!-- Generator: Adobe Illustrator 22.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
			<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
				<style type="text/css">
					.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#3F982C;}
					.st1{fill-rule:evenodd;clip-rule:evenodd;fill:#30891D;}
					.st1:hover{fill-rule:evenodd;clip-rule:evenodd;fill:#F6AD1A;}
				</style>
				<!-- Hauts de France -->
				<path class="st0" d="M301.2,126.7c1,6.6-10.4-1.8-15.2-4.4c-2.4-1.3-13,3.2-19.4-4c-6.1-6.9-17.1,7.1-20.5-7.5
					c-1.9-8.4-2.3-15.1-2.3-25c0-1.8-1.7-3.6-2.7-5.3c-2.2-3.5-2-0.8-3.2-5.2c-0.9-3.2,0-7.9,0.1-11.3c0-5.7-2-20.1,1.8-24.7
					c2.6-3.2,17.1-6.4,21.6-7.5c7-1.9,5.8-0.5,8.5,5.6c2.4,5.4,4.6,8.5,9.5,10.6c3.9,1.7,6.8,2.8,10.9,5.8c10.5,7.8,21,11.2,28.8,20.4
					c0.7,3.9,1.2,12.8,0.4,16.8c-1,5.1-2.8,9.6-4.4,12c-3.2,4.5-8.7,7-9.9,8.3C300.7,116.7,300.3,120.6,301.2,126.7z"/>
				<!-- Normandie -->
				<path class="st0" d="M230.8,77c3.8,0.9,6.6,3.7,8.7,6.7c3.8,5.7,1.1,8,1.4,13.6c0.2,4,1.3,5.2,2.2,8.7c0.9,3.4,1.7,9.1-0.5,12.4
					c-2.3,3.4-7.1,3.4-6.3,11.3c0.4,4-5.5,6.3-6.2,6.7c-3,1.7-8.4,0.4-11.1,2.5c-3.6,2.9-5.2,14.9-4.8,16.9c2.9,15.6-6.3,4.8-9.7,2.5
					c-2.8-1.9-6.5-2.8-10.6-3.6c-5.8-1-3.5-1.1-8.2-4.4c-4.6-3.2-3.9-2.1-11.2-0.9c-7.1,1.3-6.8,0.5-12-1.3c-2.6-0.9-6,0.9-10.5,0.4
					c-5.4-0.6-5.7-3.3-8.6-8.3c-2.2-3.7-3.1-6.1-4-10c-0.9-3.7,1.1-10.7,0-15.6c-1.1-4.6-8.4-13.1-8-19.5c0.5-7.1,6.5-4.1,11.4-2.1
					c3,1.2,5.3,0.8,7.5,3.6c2.4,3.1,0.3,7.9,2.6,10.9c4.4,5.7,16.8,2.8,22.5,4.2c5.6,1.4,9.5,2.6,16.8,0.9c3-0.7,8-1.3,9.6-4.3
					c3.4-6.5-4.4-2.9-5.4-7C193.8,91.6,225.4,83.3,230.8,77z"/>
				<!-- Île de France -->
				<path class="st0" d="M258.3,119c5.5-2,8.6,3.4,13.1,5.1c3.8,1.5,9.3-0.4,13.6,0.7c3.5,1,8.6,4.8,12.2,6.8c3.5,2,1.3,9.8,0.6,13.1
					c-0.9,4.3,1,11.4-5.3,11.3c-4.7-0.1-10.8,10.2-17.7,9.3c-4.7-0.6-4.8-3.4-9.2-5.8c-4.6-2.6-10.1-1.3-13.9-4.5
					c-4-3.4-14.9-23.1-13.5-28C240.8,117.9,251.9,121.5,258.3,119z"/>
				<!-- Grand Est -->
				<path class="st0" d="M339.2,71.9c3.5,3.1-1,13.1,3.7,17.3c3.4,3,5.4,2.2,8.5,4.4c2.7,1.9,5,3.4,6.8,4.9c4.1,3.5,16.6,0.4,21.9,1.7
					c1.4,0.3,4.2,2.6,5.4,3c3.7,1.1,2.8,4.9,5.7,5.7c2.4,0.7,9.9,1,12.3,1.3c2.1,0.2,4,3.1,6.3,4c7.1,2.9,17.1,2.5,17.8,4
					c1.4,3.3,11.1,2.3,12.4,3.4c5.9,5.7-2.3,11.8-4.6,17.6c-3.5,9.2-4.6,19.6-5.9,29.3c-1,7.4,0.6,23.4-9.1,25.1
					c-7,1.2-5.5-4.9-8.9-10.6c-3.8-6.4-14.3-12.6-21.6-13.4c-4.5-0.5-10.1,0.8-14.2,3.4c-2.2,1.4-3,7.1-4.7,8.6
					c-2.4,2.1-6.4,2.8-9.1,4.5c-1.6,1-3.3,4.1-5.1,4.1c-5,0.1-9.2-10.2-11.4-13.1c-8-10.1-18.5,3.4-28.6-2.9
					c-4.4-2.7-11.4-10.3-14.4-14.5c-4.6-6.7-1.9-13.3-1.2-20.9c0.6-5.8,2-5.5,2-11.6c0-5-0.3-8.8,2.3-12.6c3.5-5.1,9.9-6,12.9-12.3
					c1.1-2.4,2.3-5.3,3.4-8.5c1.3-3.7,0.3-13.4,0.5-18.1C331.4,79.1,337.5,72.3,339.2,71.9z"/>
				<!-- Bourgogne-Franche-Comté -->
				<path class="st0" d="M295.8,157.9c5.1,0.5,4.8,3.2,9.6,8.3c3,3.2,9.4,10.8,13.9,10.8c2.9,0,5.2,2.7,10.2,1.8
					c7.2-1.2,9.3-4.9,14.3,0.1c2.7,2.7,6.9,12.4,11.5,13c7.4,0.9,8.4-6,15.7-7.3c4.5-0.8,3.9-7.5,7.7-10c5.9-3.9,13.3-2.3,19.8,0.8
					c4.4,2.1,8.4,3.7,10.8,8.7c4.1,8.4-0.7,10,1.4,13.2c5.2,7.7,0.6,10-3.7,17.9c-2,3.6-4.5,6.3-6.8,9.5c-2.2,3.1-2.3,5.6-2.8,10
					c-0.8,7-8,9.4-10,12.9c-5.4,9.3-25.7-8.3-34.2-5.6c-3.3,1-6,4.3-7.9,6.3c-3.4,3.7-3.3,2.4-9.2,4.2c-5.3,1.6-7,5.6-12.4,3.5
					c-6.2-2.4-9.1-10.4-11.8-15.3c-1.8-3.3-4.4-4.5-7.3-5.8c-3.5-1.6-11.7-0.2-15.1-4.4c-3.4-4.3-3.4-12.1-4-17.5
					c-0.8-7.8-1.7-16.7-1-24.5c0.4-4.5,1.6-4.4,2.7-8c0.4-1.2,1.9-1.5,2-3.4c0.3-4.1-4.5-7.2-4.3-10.8
					C285.4,161.6,291.8,157.5,295.8,157.9z"/>
				<!-- Bretagne -->
				<path class="st0" d="M46.6,149.5c-7-1.8-3.9-5.1-0.5-7.7c6.1-4.7,13.1-3.9,20.3-3.9c8.3,0,13.2-3,20.7-6.2c6.5-2.8,8.6-3,13.2,1.5
					c0.8,0.8,4,7.6,4.9,8.1c4,2.3,6-0.1,9.1-0.5c3.6-0.5,16.5,1.1,17.8,2.7c-0.3-0.4,6.3,2.3,6.6,2.4c3.3,1.2,5.6,3.2,8.1,4
					c10.3,3.2,7.4,0.3,8.9,11.2c0,0.1,0.8,3.2,0.6,5.3c-0.3,3.8-3.3,8.4-6.2,10.7c-4.2,3.3-13.8,3.5-17.9,5.8c-3.4,1.9-3.9,2.4-7.6,6.3
					c-4,4.3-11.8,5.9-14.5,11.2c-3.5-0.3-11.1-5.7-12.6-7.2c-0.7-0.7-4-1.2-4.8-1.6c-1.6-0.7-3-1.8-4.7-2.9c-4.6-3-10.3-5.3-15.7-9.2
					c-6.6-4.8-19,0.4-23.8-7.6c-3.8-6.3,1.7-4.9,1.3-10.9c-0.1-1.9-2.6-2.9-3.2-4.8C46.1,154.5,47.6,152.3,46.6,149.5z"/>
				<!-- Pays de Loire -->
				<path class="st0" d="M187.3,154.5c3,3.5,11.6,2.6,13.5,4c1.7,1.2,6.8,3.9,8.3,5c9.9,6.7,8.3,14.8,1.6,20.7c-2.5,2.2-5.9,5.2-9,7.3
					c-2,1.4-2.9,0.7-4.6,3.2c-1.2,1.8-3.7,7.5-4.2,9c-1.4,4.1-0.1,6.2-4.2,8.2c-2.7,1.3-8,0.1-10.2,1c-2.2,0.9-4,2.2-6.5,3.3
					c-1.5,0.7-7.8,0.3-8.3,2.5c-0.8,3.2-0.3,7.5,0.7,10.4c1.4,4,3.7,8.3,3.8,12.5c0.1,5.8-0.8,7.6-7.2,9.1c-2.2,0.5-6.9,1.2-7.6,1.2
					c-2.1,0-5.8,0.4-8.2,1.3c-7.8-2.7-20.1-15.3-23.7-23.4c-2.4-5.3-4.8-10.9-0.4-15.4c2.2-2.2,5-4.5,6.5-9.7
					c-14.6,3.1-16.1,1.5-14.5-2.9c1.7-5.6,8.3-6.2,13-10c1.8-1.4,2.5-4.3,4.5-5.6c4-2.6,9.9-1.9,14.3-3.6c3.3-1.3,8.2-3.3,9.9-6.1
					c1.2-2,3.4-7.4,3.8-9.1c0.9-3.6-3-13.2,0.7-15.9c2.9-2.1,6.6,0.9,9.2,1.2C174.6,153.1,181.9,148.2,187.3,154.5z"/>
				<!-- Centre - Val de Loire -->
				<path class="st0" d="M239.2,138.7c1.6,4,1.7,4.5,3.4,7.4c1.5,2.6,5.6,9.2,9.1,12.3c2.3,2.1,4.9,1.9,7.8,2.7c3.8,1.1,3.7,0.3,7,2.6
					c1.8,1.3,2,3.8,4.3,4.6c0.6,0.2,7.2-2.5,10.3-0.6c4.3,2.7,6.7,7.7,5,12.2c-0.1,0.3-3.6,3.2-3.8,4.1c-1.1,3.6,0.4,10.2,0.3,14.6
					c-0.3,8.4-0.7,17.9,1.8,25.5c1.8,5.3-3.6,6.7-7.6,10c-3.8,3.1-7,9.1-11.8,12c-2,1.2-3.9,1.3-5.7,2c-7,2.6-23.8,4.5-30.7-1.5
					c-2.9-2.6-9.2-10.8-9.5-13.9c-0.4-4.2-5.3-11.2-8-12.2c-5.7-2.1-7,0.8-11.4-2.5c-5.4-4-5.2-7.8-3.6-14c2.2-8.6,7.7-11.6,14.4-16.7
					c7.1-5.5,8.9-8.1,7.5-17.8c-0.5-3.9-2.1-6.5-0.7-11.6c0.5-1.9-0.5-6.7,0-8.7c0.8-3.3,2.7-7.7,4.6-8.5c2-0.7,5-0.3,7.1-0.8
					C233.1,138.9,237.1,133.5,239.2,138.7z"/>
				<!-- Nouvelle Aquitaine -->
				<path class="st0" d="M255.4,313.4c-5.7,1.1-8.2-2.6-13.1-1.5c-4.4,1-7.3,1.2-8.9,6.8c-1.4,4.8-2.3,5.2-5.5,7.8
					c-4.1,3.3-7.6,6.4-9.2,11.5c-0.5,1.7-2.2,7-3.2,10.8c-1.3,5.1-5.6,7.8-9.7,9c-4.1,1.2-11.1,0.8-14.3,1.6c-2.1,0.6-2.3,1.2-3.7,1.8
					c-2.6,1-5.2-1.2-7.6,0.9c-2.3,2.1-2,8.3-2,10.8c0.2,6.6,4.7,9.1,5.4,15.5c0.7,6.8-5.4,11.5-10.9,25.5c-5.3-0.1-3.4,1.3-9.5,1
					c-8.1-0.3-7.4-6.5-13.5-10.1c-3.9-2.3-13.1-0.5-14.7-4.3c-2.5-6.3,3.9-5.4-3.1-9c-0.5-0.3-6.7-0.9-7.3-1.5c-1.7-1.6,5.7-6.1,6.7-7.4
					c4.5-5.7,5.5-10,5.7-17.1c0.1-3.7,1.2-8.1,1.6-10.4c0.5-2.8-0.8-9.1,0.6-11.7c1.2-2.2,6.2-9.3,7.4-12.9c1.4-4.1-1.7-6.8-1.8-12.1
					c-0.1-3.2,1-5.1,1.5-8.6c0.5-4.4-2-12.9,0.1-16.6c4.7-8.1,9.5,1.7,12,5.9c1.8,3,5.9,13,7.9,4.9c0.8-3-2.9-9.2-4-11.8
					c-8.4-19-24.5-12.3-23.4-22.6c0.3-2.5,14.5,10.8,10.6-10c-0.5-2.9-2.3-2.6-3.1-4.9c1.3-1.1,8.3-1.1,10.4-1.2
					c10.7-0.5,15-5,12.8-15.8c-1.2-5.7-8.6-20.1-0.2-18.3c3.8,0.8,5.6-3.2,10-4.7c4.8-1.5,11.6,0.5,16.2,3.3c2.7,1.7,3.2,3.1,5.7,4.1
					c1.1,0.5,7.8,0.2,9.5,1.2c2.4,1.6,4.6,7.4,5.3,10.2c0.3,1.3,4,7.2,5.4,8.8c1.8,2.3,3.6,4.9,5.7,6.7c3.9,3.3,10.5,3.8,12.8,3.7
					c8.3-0.3,11.6-0.1,19.5-2.6c5.9-1.9,6.3-1.6,8.9,2.8c0.2,0.3,2.9,8.8,2.8,8.4c0.8,5.1-2.3,8.8-3.1,13.6c-0.9,5.6,2.2,14-1.1,18.6
					c-2.1,2.9-6.2,4.3-8.3,7.8C256.8,305,256.1,309.3,255.4,313.4z"/>
				<!-- Auvergne - Rhône Alpes -->
				<path class="st1" d="M346.2,343.9c-3.9-3.3-14.2-1-15.9-1.2c-3.6-0.3-6.5-4-8.9-9.5c-1.1-2.4-3.5-4.6-5.1-6.9
					c-2.7-3.8-4.3-5.9-9.8-7.7c-7.5-2.4-8.9-0.3-14.7,3.7c-3.2,2.2-1.9,3.7-6.5,1.5c-4.9-2.3-4.6-8.6-10.8-4.4c-2.6,1.8-3.3,4.4-5,6
					c-5.8,5.8-8.4-2.3-9.7-6.6c-1.1-3.5-2.1-4.1-1.7-8.8c0.4-4.1,1.2-7.5,4.9-10.2c2.1-1.5,6.6-4.9,7.2-7c0.9-3-0.1-10.7,0.3-16.7
					c0.4-5.5,2.4-8.8,2.9-10.3c1.6-4.8-3.1-13.1-3.2-14.2c-0.3-8.4,3-10.8,7.1-14.9c4.7-4.7,8.5-5.7,13.5-2.2c4.3,3,10.8,2.2,13.4,3.6
					c10,5.6,11.8,24.3,25.1,20.3c2.7-0.8,4.3-2.1,6.9-3.3c1.8-0.8,3.9-0.7,6.6-1.5c2.1-0.6,3.1-2.5,5-4.1c2.3-2,4.6-5.5,8-5.7
					c4.2-0.2,23.8,11.4,33,8.9c3.8-1,10.4-8,14-7.6c6.7,0.7,11.6,16.7,10.5,22c-0.5,2.5-3,3.4-3.4,6.2c-0.7,4.4,2.4,6.5,4.3,9.7
					c6.8,11.3,1.1,21.8-9.3,19.8c-7-1.3-6.4,7.6-7.7,9.9c-0.8,1.5-2.9,1.5-4.7,2.5c-3.1,1.6-3.7,2.9-6.5,4.7
					c-5.1,3.3-12.9,6.8-14.6,13.4c-0.8,3-0.7,8.7-4.5,10.2c-1,0.4-7.2-1.5-8.1-1.8C354.1,340.2,349.7,346.9,346.2,343.9z"/>
				<!-- Occitanie -->
				<path class="st0" d="M237.4,316.9c2.4-4.4,13-1.9,16.5-0.6c3.7,1.3,3.2,2.8,4.6,6.4c1.6,4.2,0.7,5.6,6.2,6.6
					c5.9,1.1,5.1-1.5,9.3-5.9c7.5-7.9,7.1,6.6,16.1,4.5c2.1-0.5,4.9-5.8,7.4-7c5.2-2.5,8.8-0.7,13.1,2.8c4.6,3.7,4,4.7,6.4,9.2
					c1.9,3.6,6.5,10,10.3,11.9c4.4,2.1,8.4-0.7,11.8-0.6c3.8,0,7.6,3.1,9.7,7.9c2.8,6.2-0.1,5.6-3.3,10c-3.6,5.1-6,12.9-12.9,16.9
					c-5.9,3.5-10,0.5-16.1,2.7c-6,2.1-18.7,12-22.6,19.5c-4,7.7,2.8,18.4-0.7,25.7c-1.2,2.5-3.8,3.1-6.6,3.7c-5.8,1.3-11.4,3-17.3,4.2
					c-15,3.1-15.1-3.8-26.1-10.5c-3.9-2.4-8.9-2.4-13.4-3.3c-7.7-1.5-15.2-2.5-23.1-2.8c-7.5-0.3-13.4,1.3-20.7-0.1
					c-4.8-0.9-7.4-2.2-10.4-3.3c1.5-3.8,5.8-12.8,8.6-16.9c2.5-3.6,2.3-9.7,2.1-11c-1-5-3.8-6.9-4.8-12.9c-1.4-8.7-0.2-11,4.6-10
					c2.8,0.6,6.5-2.9,8.2-2.9c9.5,0,11.8,0,18.4-4.2c4.8-3,4.9-9.3,6.7-13.7c1-2.6,2.3-7.7,4.2-9.9c0.8-0.9,6.8-5.7,7.7-6.4
					C235.9,322.8,233.6,323.8,237.4,316.9z"/>
				<!-- Provence - Alpes - Côte d\'Azur -->
				<path class="st0" d="M347.9,362.7c2.8-2.3,3.9-3.7,4.3-7.5c0.6-6.1-3.8-6.1,0.7-9.1c8.1-5.5,13,5.2,18.4-3.2
					c2.9-4.5,1.7-8.8,4.6-12.3c2.1-2.7,10.3-7,13.1-9.3c4.9-4.2,10.5-5,11.1-6.4c1-2.7,0.6-6.4,2.1-7.9c2.4-2.5,7.4,0.3,11.5-2.2
					c0,1.7,2.4,3.9,2.9,6c1.4,5.4-0.2,6.8,1.5,11c0.7,1.8,2.8,6.2,4.1,7.5c0.7,0.7,1.2,3.5,2.2,4.8c1.6,2.1,5.6,5.2,7.9,6.6
					c0,0,5.9,1.9,4.7,1.8c5.2,0.8,17.7-0.1,18.4,7.9c0.4,4.4-3.2,4.5-5.4,5.9c-2.5,1.6-3.8,3-6.3,5.2c-2.5,2.2-3.9,2.6-6.7,5
					c-3.3,2.7-5.7,6.7-8.9,9.3c-1.5,1.2-3.3,0.9-4.5,1.9c-4.8,4.3-8.6,9.8-13.3,14.2c-6.2,5.8-8.9,9.7-17.1,9.4
					c-6.6-0.3-18.7-3.7-23.6-8.6c-2.6-2.6-2.9-11.2-7.8-12.2c-7.9-1.6-10.2,10.6-20.3,6.9c-2.4-0.9-6-4.5-5.9-7.2c0-0.4,3.9-2.7,4.5-3.3
					C343.2,373,343.9,365.9,347.9,362.7z"/>
				<!-- Corse -->
				<path class="st0" d="M449.3,413.4c6.7,0,8.1,18.3,9.4,23.6c0.6,2.4,1.1,15-0.9,17.2c-2.4,2.6-0.1,11.1-2.3,16.1
					c-2.9,6.6-13.4,10-18.1,4.2c-2.5-3.1-4.1-9.7-5.9-12.8c-3.6-6.6-2-15.2-5.4-22.1c2.8,0,4.3-13.6,8.6-15.9
					C443.6,418.9,446.9,425,449.3,413.4z"/>
				<!-- Guyane -->
				<path class="st0" d="M60.4,291.3c-1.7-5,3.7-9.9,4.8-16.8c1.1-6.9-4.1-9.2-5.2-15.2c-0.6-3.3,0.1-7.2,1.4-10.3c0.7-1.6,4-7.5,5-8.1
					c5.9-3.3,18.5,4.3,23.1,7.5c3.7,2.5,10.4,5.4,12.1,9.6c2.8,7-5.8,12.9-8.7,18.5c-1.4,2.7-1.3,5.9-3.6,8.7c-3.8,4.7-6.1,4.7-10.8,4.5
					c-1.7-0.1-5.9-0.6-8.3-0.3c-2.4,0.3-2.7,1.4-5.3,2.3C62,292.7,63.2,291.3,60.4,291.3z"/>
				<!-- Réunion -->
				<path class="st0" d="M64.8,309.7c1.4-4.2,2.6-5,6.8-6.5c1.5-0.5,0.2-0.5,3.2-1.1c1.7-0.3,3.6,0,5.4,0c6,0,9.3,2.7,10.9,6.9
					c0.2,0.5,1.8,2.2,2.1,2.8c0.7,1.3,0.5,3,1.4,4.1c0.7,1,2.3,1.6,3.1,2.8c2.2,2.9,0.9,3.3,0.2,6.6c-0.6,3,0.2,5.3-2.4,7.3
					c-6.3,4.8-15.8,1.7-20.9-1.8c-3-2.1-7.7-4.7-9-7.9c-0.2-0.6-0.7-2.7-0.7-2.8c-0.4-1.2-0.9-1.1-1.4-2.1
					C62,315.1,61.9,310.6,64.8,309.7z"/>
			</svg>
			<div class="bloc-twitter">
                                <a class="twitter-timeline" data-width="100%" data-height="100%" data-link-color="$couleur1--sombre" href="https://twitter.com/ffmc73">Tweets by ffmc73</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>

			<div class="btn">
				<div class="btn__logo"></div>
				<div class="btn__texte">ADHERER ou faire un DON</div>
			</div>

			<img class="illustration-mobilisation" src="https://www.motomag.com/IMG/jpg/moto_magazine_couverture.jpg" width="auto">
		</div>

		<div class="bandeau-antenne">' .
interdire_scripts(propre($GLOBALS['meta']['descriptif_site'], $connect, $Pile[0])) .
'</div>

	</div>

	<!-- Footer -->
	' .
recuperer_fond( 'inclure/inc_pied' , array(), array('compil'=>array('squelettes/sommaire.html','html_20bad19474852c2c1a99d7289d969071','',259,$GLOBALS['spip_lang'])), _request('connect')) .
'

</body>

</html>
');

	return analyse_resultat_skel('html_20bad19474852c2c1a99d7289d969071', $Cache, $page, 'squelettes/sommaire.html');
}
?>