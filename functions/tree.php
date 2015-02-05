<?php
function treeOut($tree){
	$markup = '';
	foreach($tree as $branch => $twig){
		// $markup .= '<li>' . $branch . '</li>';
		$markup .= '<li>' . ((is_array($twig)) ? $branch . treeOut($twig) : $twig) . '</li>';
	}

	return '<ul>' . $markup . '</ul>';
}
?>