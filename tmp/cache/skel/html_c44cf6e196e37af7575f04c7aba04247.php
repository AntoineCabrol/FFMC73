<?php

/*
 * Squelette : ../prive/squelettes/inclure/head.html
 * Date :      Wed, 14 Mar 2018 16:27:20 GMT
 * Compile :   Tue, 07 Aug 2018 17:17:01 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/inclure/head.html
// Temps de compilation total: 24.236 ms
//

function html_c44cf6e196e37af7575f04c7aba04247($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'titre', null), ''),true))))!=='' ?
		('<title>' . $t1 . '</title>
') :
		'') .
'
<meta http-equiv="Content-Type" content="text/html' .
(($t1 = strval(interdire_scripts((include_spip('inc/config')?lire_config('charset',null,false):''))))!=='' ?
		('; charset=' . $t1) :
		'') .
'" />
<script type=\'text/javascript\'>/*<![CDATA[*/
var url_menu_rubrique="' .
concat(((($a = (defined('_DIR_RACINE')?constant('_DIR_RACINE'):'')) OR (is_string($a) AND strlen($a))) ? $a : './'),(defined('_SPIP_SCRIPT')?constant('_SPIP_SCRIPT'):'')) .
'?action=menu_rubriques\\x26date=' .
interdire_scripts((include_spip('inc/config')?lire_config('date_calcul_rubriques',null,false):'')) .
'";
(function(H){H.className=H.className.replace(/\\bno-js\\b/,\'js\')})(document.documentElement);
' .
(($t1 = strval(interdire_scripts((((table_valeur(eval('return '.'$_COOKIE'.';'),'spip_accepte_ajax') >= '1')) ?'' :' '))))!=='' ?
		($t1 . (	'
function test_accepte_ajax(){jQuery.ajax({"url":"' .
	replace(generer_url_ecrire('test_ajax','js=1'),'&amp;','\\x26') .
	'"});}
')) :
		'') .
(((defined('_OUTILS_DEVELOPPEURS')?constant('_OUTILS_DEVELOPPEURS'):''))  ?
		(' ' . 'var _OUTILS_DEVELOPPEURS=true;
') :
		'') .
'var ajax_image_searching = \'<img src="' .
interdire_scripts(chemin_image('searching.gif')) .
'" alt="" />\';
var stat = ' .
interdire_scripts((((include_spip('inc/config')?lire_config('activer_statistiques',null,false):'') == 'non') ? '0':'1')) .
';
var confirm_changer_statut = \'' .
unicode_to_javascript(addslashes(html2unicode(_T('public|spip|ecrire:confirm_changer_statut')))) .
'\';
var error_on_ajaxform=\'' .
unicode_to_javascript(addslashes(html2unicode(_T('public|spip|ecrire:erreur_technique_ajaxform')))) .
'\';
/*]]>*/</script>
<meta name="viewport" content="width=device-width" />
' .
(($t1 = strval(url_absolue(timestamp(find_in_theme('reset.css')))))!=='' ?
		('<link rel="stylesheet" type="text/css" href="' . $t1 . '" id="csspriveereset" />') :
		'') .
'
' .
pipeline( 'header_prive_css' , '' ) .
(($t1 = strval(url_absolue(timestamp(find_in_theme('style_prive_defaut.css')))))!=='' ?
		('<link rel="stylesheet" type="text/css" href="' . $t1 . '" id="csspriveedef" />') :
		'') .
'
' .
(($t1 = strval(url_absolue(timestamp(find_in_path('spip_admin.css')))))!=='' ?
		('<link rel="stylesheet" type="text/css" href="' . $t1 . '"/>') :
		'') .
'
<link rel="stylesheet" type="text/css" href="' .
interdire_scripts(generer_url_public('style_prive.css', interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'paramcss', null),true)))) .
'" />
' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'minipres', null), ''),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	(($t2 = strval(url_absolue(timestamp(find_in_path('minipres.css')))))!=='' ?
			('<link rel="stylesheet" type="text/css" href="' . $t2 . '" />') :
			'') .
	'
')) :
		'') .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/favicon-head') . ', array(\'couleur\' => ' . argumenter_squelette(interdire_scripts(parametre_url(entites_html(table_valeur(@$Pile[0], (string)'paramcss', null),true),'couleur_foncee'))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../prive/squelettes/inclure/head.html\',\'html_c44cf6e196e37af7575f04c7aba04247\',\'\',18,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

<link rel="alternate" type="application/rss+xml" title="' .
interdire_scripts(attribut_html(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
'" href="' .
interdire_scripts(generer_url_public('backend', '')) .
'" />
<link rel="help" type="text/html" title="' .
attribut_html(_T('public|spip|ecrire:icone_aide_ligne')) .
'" href="' .
interdire_scripts(generer_url_public('aide', (	'var_lang=' .
	spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])))) .
'" />
' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('activer_breves',null,false):'') == 'non')) ?'' :' '))))!=='' ?
		($t1 . (	'
<link rel="alternate" type="application/rss+xml" title="' .
	attribut_html(_T('public|spip|ecrire:info_breves_03')) .
	'" href="' .
	interdire_scripts(generer_url_public('backend-breves', '')) .
	'" />
')) :
		'') .
'

' .
(($t1 = strval(timestamp(find_in_path('prive/javascript/layer_old.js'))))!=='' ?
		('<script type="text/javascript" src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(timestamp(find_in_path('prive/javascript/layer.js'))))!=='' ?
		('<script type="text/javascript" src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(timestamp(find_in_path('prive/javascript/presentation.js'))))!=='' ?
		('<script type="text/javascript" src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(timestamp(find_in_path('prive/javascript/gadgets.js'))))!=='' ?
		('<script type="text/javascript" src="' . $t1 . '"></script>') :
		'') .
'
');

	return analyse_resultat_skel('html_c44cf6e196e37af7575f04c7aba04247', $Cache, $page, '../prive/squelettes/inclure/head.html');
}
?>