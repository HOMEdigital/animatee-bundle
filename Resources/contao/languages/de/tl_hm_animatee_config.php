<?php

/**
 * tl_hm_animatee_config language file
 * DE Deutsch
 *
 * @copyright  HOME - HolsteinMedia
 * @author     Dirk Holstein <dh@holsteinmedia.com>
 *
 */

$moduleName = 'tl_hm_animatee_config';

// #-- Legend
$GLOBALS['TL_LANG'][$moduleName]['default_legend']      = 'Animation';
$GLOBALS['TL_LANG'][$moduleName]['config_legend']       = 'Einstellungen';
$GLOBALS['TL_LANG'][$moduleName]['published_legend']    = 'Veröffentlichung';

// #-- Fields
$GLOBALS['TL_LANG'][$moduleName]['name']            = array('Name', 'Der Animation-Name, wird im Backend angezeigt');
$GLOBALS['TL_LANG'][$moduleName]['published']       = array('Veröffentlichen', 'Die Animation kann Content-Elementen verwendet werden');

$GLOBALS['TL_LANG'][$moduleName]['aosAnimation']    = array("Animation", "Select an animation to trigger");
$GLOBALS['TL_LANG'][$moduleName]['aosOffset']       = array("Offset", "Change offset to trigger animations sooner or later (px)");
$GLOBALS['TL_LANG'][$moduleName]['aosDuration']     = array("Duration", "Duration of animation (ms)");
$GLOBALS['TL_LANG'][$moduleName]['aosEasing']       = array("Easing", "Choose timing function to ease elements in different ways");
$GLOBALS['TL_LANG'][$moduleName]['aosDelay']        = array("Delay", "Delay animation (ms)");
$GLOBALS['TL_LANG'][$moduleName]['aosAnchor']       = array("Anchor element", "Anchor element, whose offset will be counted to trigger animation instead of actual elements offset");
$GLOBALS['TL_LANG'][$moduleName]['aosAnchorPlacement'] = array("Anchor placement", "Anchor placement - which one position of element on the screen should trigger animation");
$GLOBALS['TL_LANG'][$moduleName]['aosOnce']         = array("Trigger once", "Choose wheter animation should fire once, or every time you scroll up/down to element");

$GLOBALS['TL_LANG']['XPL']['aosHelp'] = array(
    array("Duration", "Duration accept values from 50 to 3000, with step 50ms, it's because duration of animation is handled by css, and to not make css longer than it is already I created implementations only in this range. I think this should be good for almost all cases."),
    array("Anchor placement", "You can set different placement option on each element, the principle is pretty simple, each anchor-placement option contains two words i.e. <code>top-center</code>. This means that animation will be triggered when <code>top</code> of element will reach <code>center</code> of the window. <code>bottom-top</code> means that animation will be triggered when <code>bottom</code> of an element reach <code>top</code> of the window, and so on.")
);

// +-- Buttons
$GLOBALS['TL_LANG'][$moduleName]['new']             = array('Neue Animation', 'Eine neue Animation erstellen');
$GLOBALS['TL_LANG'][$moduleName]['show']            = array('Animation', 'Einträge der Animation ID %s anzeigen');
$GLOBALS['TL_LANG'][$moduleName]['copy']            = array('Animation duplizieren', 'Animation ID %s duplizieren');
$GLOBALS['TL_LANG'][$moduleName]['delete']          = array('Animation löschen', 'Animation ID %s löschen');
$GLOBALS['TL_LANG'][$moduleName]['edit']    	    = array('Animation bearbeiten', 'Animation ID %s bearbeiten');

