<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
?>
<div class = "breadcrumb<?php echo $moduleclass_sfx; ?>">
	<ol class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
<?php if ($params->get('showHere', 1))
	{
		echo '<span class="showHere">' .JText::_('MOD_BREADCRUMBS_HERE').'</span>';
	}
	
	// Get rid of duplicated entries on trail including home page when using multilanguage
	for ($i = 0; $i < $count; $i++)
	{
		if ($i == 1 && !empty($list[$i]->link) && !empty($list[$i - 1]->link) && $list[$i]->link == $list[$i - 1]->link)
		{
			unset($list[$i]);
		}
	}
	// Find last and penultimate items in breadcrumbs list
	end($list);
	$last_item_key = key($list);
	prev($list);
	$penult_item_key = key($list);

	// Generate the trail
	foreach ($list as $key => $item) :
	// Make a link if not the last item in the breadcrumbs
	$show_last = $params->get('showLast', 1);
	
	echo '<li property="itemListElement" typeof="ListItem">';
	if ($key != $last_item_key)
	{
		// Render all but last item - along with separator
		if (!empty($item->link))
		{
			echo '<a href="' . $item->link . '" property="item" typeof="WebPage"><span property="name">' . $item->name . '</span></a>';
		}
		else
		{
			echo '<span property="name">' . $item->name . '</span>';
		}
	}
	elseif ($show_last)
	{
		// Render last item if reqd.
		echo '<span itemprop="name">' . $item->name . '</span>';
	}
	echo '<meta property="position" content="'.($key+1).'" />';
	echo '</li>';
	endforeach; ?>
	</ol>
</div>
