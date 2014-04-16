<?php

/**
 *
 * Bootstrap 3 for Joolma
 *
 * @author Gonzalo Suez<info@gsuez.cl>, Adrian Fürschuß, David Costa<davidcosta@csthost.com.br>
 * @copyright Copyright © 2014 David Costa <davidcosta@csthost.com.br>. All right reserved
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @link https://github.com/davidsantanacosta/joomla-bootstrap-3-template
 *
 */

// no direct access
defined('_JEXEC') or die;

// Getting params from template
$params = JFactory::getApplication()->getTemplate(true)->params;
$app    = JFactory::getApplication();
$doc    = JFactory::getDocument();


// Removed useless scripts
unset($doc->_scripts[JURI::root(true) . '/media/system/js/mootools-more.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/mootools-core.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/core.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/modal.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/caption.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/punycode.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/validate.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery.min.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery-noconflict.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/bootstrap.min.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery-migrate.min.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/tabs-state.js']);

if (isset($this->_script['text/javascript'])) { 
    $this->_script['text/javascript'] = preg_replace(
        '%jQuery\(window\).on\(\'load\',  function\(\) \{\n.*?new JCaption\(\'img.caption\'\);\n(.*?)\}\);%', '',
         $this->_script['text/javascript']);

    if (empty($this->_script['text/javascript']))
        unset($this->_script['text/javascript']);
}

// Put othes script under jquery
$scriptsBefore = $doc->_scripts;
unset($doc->_scripts);

// add javascript files
// JavaScript plugins (requires jQuery) 
$doc->addScript('templates/'.$this->template . '/js/jquery-1.10.2.min.js');
$doc->addScript('templates/'.$this->template . '/js/jquery-noconflict.js');

// Include all compiled plugins (below), or include individual files as needed 
$doc->addScript('templates/'.$this->template . '/js/bootstrap.min.js');
$doc->addScript('templates/' . $this->template . '/js/holder.js');
$doc->addScript('templates/' . $this->template . '/js/dropdown.js');
$doc->addScript('templates/' . $this->template . '/js/display.js');

// Add Stylesheets
$doc->addStyleSheet('templates/'.$this->template.'/css/bootstrap.min.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/navbar.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/template.css');

foreach ($scriptsBefore as $key => $value) {
    $doc->addScript($key);
}


// Variables
$app         = JFactory::getApplication();
$doc         = JFactory::getDocument();
$params      = $app->getParams();
$headdata    = $doc->getHeadData();
$menu        = $app->getMenu();
$active      = $app->getMenu()->getActive();
$pageclass   = $params->get('pageclass_sfx');
$tpath       = $this->baseurl.'/templates/'.$this->template;

// Parameter
$modernizr   = $this->params->get('modernizr');
$fontawesome = $this->params->get('fontawesome');
$pie         = $this->params->get('pie');

// Generator tag
$this->setGenerator(null);

// force latest IE & chrome frame
$doc->setMetadata('x-ua-compatible', 'IE=edge,chrome=1');

// Add javascripts
if($modernizr == 1) {
    $doc->addScript($tpath.'/js/modernizr-2.6.2.js');
}

// add stylesheets
if($fontawesome == 1) {
    $doc->addStyleSheet($tpath.'/css/font-awesome.min.css');
}


// file ending
if($this->countModules('bartop-left') > 0 && $this->countModules('bartop-right') > 0) {
    $bartopGrid = 6;
} else {
    $bartopGrid = 12;
}


//Content width
$sidebarLeft  = $this->countModules('left');
$sidebarRight = $this->countModules('right');


if($sidebarLeft >  0 && $sidebarRight >  0) {
    $contentWidth = 6;
} elseif($sidebarLeft == 0 && $sidebarRight == 0) {
    $contentWidth = 12;
} else {
    $contentWidth = 9;
}

