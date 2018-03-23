<?php
/**
*
* @package phpBB Extension - Right Header Image
* @copyright (c) 2015 HiFiKabin
* Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_RIGHTHEADERIMAGE_CONFIG'				=> 'Rechter Header Afbeelding',
	'ACP_RIGHTHEADERIMAGE_CONFIG_EXPLAIN'		=> 'Dit is de configuratie pagina voor de Rechter Header Afbeelding extensie. De header van uw forum wordt automatisch aangepast aan de grootte van de afbeelding.',

	'ACP_RIGHTHEADERIMAGE_CONFIG_SET'			=> 'Configuratie',
	'RIGHTHEADERIMAGE_CONFIG_SAVED'				=> 'Rechter Header Afbeelding instellingen opgeslagen',

	'RIGHTHEADERIMAGE_ENABLE'					=> 'Schakel Rechter Header Afbeelding in',
	'RIGHTHEADERIMAGE_ENABLE_EXPLAIN'			=> 'Wilt u de Rechter Header Afbeelding EXT inschakelen??',

	'RIGHTHEADERIMAGE_SEARCH'					=> 'Zoek',
	'RIGHTHEADERIMAGE_SEARCH_EXPLAIN'			=> 'Wilt u de zoekopdracht in de NavBar weergeven wanneer Rechter Header Afbeelding is ingeschakeld?',

	'RIGHTHEADERIMAGE_IMAGE_URL'				=> 'Rechter Header Afbeelding URL',
	'RIGHTHEADERIMAGE_IMAGE_URL_EXPLAIN'		=> 'Voer de volledige URL van de afbeelding in, INCLUSIEF http: // ',
	'RIGHTHEADERIMAGE_IMAGE_URL_PLACEHOLDER'	=> 'http://afbeelding.jpg',

	'RIGHTHEADERIMAGE_IMAGE_LINK'				=> 'Rechter Header Afbeelding Link URL',
	'RIGHTHEADERIMAGE_IMAGE_LINK_EXPLAIN'		=> 'Voer de volledige URL in van de pagina waaraan u de afbeelding wilt koppelen, INCLUSIEF http: // ',
	'RIGHTHEADERIMAGE_IMAGE_LINK_PLACEHOLDER'	=> 'http://link.com',

	'RIGHTHEADERIMAGE_TARGET'					=> 'Link doel',
	'RIGHTHEADERIMAGE_TARGET_EXPLAIN'			=> 'Wat wil je doen als er op de afbeelding wordt geklikt?' ,
	'RIGHTHEADERIMAGE_TARGET_NOTHING'			=> 'Niets' ,
	'RIGHTHEADERIMAGE_TARGET_SAME'				=> 'Link openen in hetzelfde tabblad' ,
	'RIGHTHEADERIMAGE_TARGET_NEW'				=> 'Link openen in een nieuw tabblad' ,

	'RIGHTHEADERIMAGE_RESIZE'					=> 'Afbeelding Groote',
	'RIGHTHEADERIMAGE_RESIZE_EXPLAIN'			=> 'U kunt de maximale grootte van de afbeelding hier wijzigen, maar bedenk dat grotere afbeeldingen de lay-out in de header kunnen verstoren. Standaard is 200' ,

	'RIGHTHEADERIMAGE_REQUIRE_3.1.4'			=> 'Deze extensie vereist phpBB 3.1.4 of hoger en werkt niet met 3.2.0 of nieuwer.',
	'RIGHTHEADERIMAGE_REQUIRE_3.2.0'			=> 'Deze extensie is voor phpBB 3.2.0 of hoger en werkt niet met 3.1.0.',
));
