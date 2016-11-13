<?php
 /*------------------------------------------------------------------------
# author    Gonzalo Suez
# Copyright © 2013 gsuez.cl. All rights reserved.
# @license  http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website   http://www.gsuez.cl
-------------------------------------------------------------------------*/// no direct access
defined('_JEXEC') or die;
JHtml::_('bootstrap.framework');
if(file_exists('../css/custom.css')) $doc->addStylesheetVersion($tpath.'/css/custom.css');
if(file_exists('../js/custom.js')) $doc->addStylesheetVersion($tpath.'/js/custom.js');
$doc->addCustomTag('<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />');
$doc->addCustomTag('<link rel="apple-touch-icon-precomposed" href="'.$tpath.'/images/apple-touch-icon-57x57-precomposed.png">');
$doc->addCustomTag('<link rel="apple-touch-icon-precomposed" sizes="72x72" href="'.$tpath.'/images/apple-touch-icon-72x72-precomposed.png">');
$doc->addCustomTag('<link rel="apple-touch-icon-precomposed" sizes="114x114" href="'.$tpath.'/images/apple-touch-icon-114x114-precomposed.png">');
$doc->addCustomTag('<link rel="apple-touch-icon-precomposed" sizes="144x144" href="'.$tpath.'/images/apple-touch-icon-144x144-precomposed.png">');
$ietag = array('<!--[if lte IE 8]>');
$ietag[] = '<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>';
if ($pie == 1) {
	$ietag[]='<style>{behavior:url('.$tpath.'/js/PIE.htc);}</style>';
}
$ietag[] = '<![endif]-->';
$doc->addCustomTag(implode("\n",$ietag));
