<?php
 /*------------------------------------------------------------------------
# author    Gonzalo Suez
# Copyright © 2013 gsuez.cl. All rights reserved.
# @license  http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website   http://www.gsuez.cl
-------------------------------------------------------------------------*/// no direct access
defined('_JEXEC') or die;
JHtml::_('bootstrap.framework');
$doc->addCustomTag('<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />');
$doc->addCustomTag('<link rel="apple-touch-icon-precomposed" href="<?php  echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">');
$doc->addCustomTag('<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php  echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">');
$doc->addCustomTag('<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php  echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">');
$doc->addCustomTag('<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php  echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">');
$doc->addCustomTag('<!--[if lte IE 8]>');
$doc->addCustomTag('<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>');
if ($pie == 1) {
	$doc->addStyleDeclaration('{behavior:url('.$tpath.'/js/PIE.htc);}');
}
$doc->addCustomTag('<!--[endif]>');
