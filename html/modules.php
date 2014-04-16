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


/**
 * This is a file to add template specific chrome to module rendering.  To use it you would
 * set the style attribute for the given module(s) include in your template to use the style
 * for each given modChrome function.
 *
 * eg.  To render a module mod_test in the submenu style, you would use the following include:
 * <jdoc:include type="module" name="test" style="submenu" />
 *
 * This gives template designers ultimate control over how modules are rendered.
 *
 * NOTICE: All chrome wrapping methods should be named: modChrome_{STYLE} and take the same
 * two arguments.
 */

/*
 * Module chrome for rendering the module in a submenu
 */
function modChrome_block($module, &$params, &$attribs) {
    if (!empty ($module->content)) : ?>
        <div class="block <?php if ($params->get('moduleclass_sfx')!='') : ?><?php echo $params->get('moduleclass_sfx'); ?><?php endif; ?>">
            <div class="moduletable">               
                <?php if ($module->showtitle != 0) : ?>
                    <div class="module-title">
                        <h3 class="title"><?php echo $module->title; ?></h3>
                    </div>
                <?php endif; ?>
                <div class="module-content">
                    <?php echo $module->content; ?>
                </div>
            </div>              
        </div>
    <?php endif;
}

/*
 * Module chrome for rendering in grid for 4 columns
 */
function modChrome_grid3($module, &$params, &$attribs) {
    if (!empty ($module->content)) : ?>
        <div class="col-xs-12 col-sm-6 col-md-3 <?php if ($params->get('moduleclass_sfx')!='') : ?><?php echo $params->get('moduleclass_sfx'); ?><?php endif; ?>">
            <div class="moduletable">               
                <?php if ($module->showtitle != 0) : ?>
                    <div class="module-title">
                        <h3 class="title"><?php echo $module->title; ?></h3>
                    </div>
                <?php endif; ?>
                <div class="module-content">
                    <?php echo $module->content; ?>
                </div>
            </div>              
        </div>
    <?php endif;
}

/*
 * Module chrome for rendering in grid for 3 columns
 */
function modChrome_grid4($module, &$params, &$attribs) {
    if (!empty ($module->content)) : ?>
        <div class="col-xs-12 col-sm-4 col-md-4 <?php if ($params->get('moduleclass_sfx')!='') : ?><?php echo $params->get('moduleclass_sfx'); ?><?php endif; ?>">
            <div class="moduletable">               
                <?php if ($module->showtitle != 0) : ?>
                    <div class="module-title">
                        <h3 class="title"><?php echo $module->title; ?></h3>
                    </div>
                <?php endif; ?>
                <div class="module-content">
                    <?php echo $module->content; ?>
                </div>
            </div>              
        </div>
    <?php endif;
}

/*
 * Module chrome for rendering in grid for 2 columns
 */
function modChrome_grid6($module, &$params, &$attribs) {
    if (!empty ($module->content)) : ?>
        <div class="col-xs-12 col-sm-6 col-md-6 <?php if ($params->get('moduleclass_sfx')!='') : ?><?php echo $params->get('moduleclass_sfx'); ?><?php endif; ?>">
            <div class="moduletable">               
                <?php if ($module->showtitle != 0) : ?>
                    <div class="module-title">
                        <h3 class="title"><?php echo $module->title; ?></h3>
                    </div>
                <?php endif; ?>
                <div class="module-content">
                    <?php echo $module->content; ?>
                </div>
            </div>              
        </div>
    <?php endif;
}

/*
 * Module chrome for rendering in absolute mode in top right
 */
function modChrome_absolute_topright($module, &$params, &$attribs) {
    if (!empty ($module->content)) : ?>
        <div class="absolute absolute-top absolute-right <?php if ($params->get('moduleclass_sfx')!='') : ?><?php echo $params->get('moduleclass_sfx'); ?><?php endif; ?>">
            <?php if ($module->showtitle != 0) : ?>
                <h3 class="title"><?php echo $module->title; ?></h3>
            <?php endif; ?>
            <?php echo $module->content; ?>
        </div>
    <?php endif;
}

/*
 * Module chrome for rendering in absolute mode in top left
 */
function modChrome_absolute_topleft($module, &$params, &$attribs) {
    if (!empty ($module->content)) : ?>
        <div class="absolute absolute-top absolute-left <?php if ($params->get('moduleclass_sfx')!='') : ?><?php echo $params->get('moduleclass_sfx'); ?><?php endif; ?>">
            <?php if ($module->showtitle != 0) : ?>
                <h3 class="title"><?php echo $module->title; ?></h3>
            <?php endif; ?>
            <?php echo $module->content; ?>            
        </div>
    <?php endif;
}

/*
 * Module chrome for rendering in absolute mode in top right
 */
function modChrome_absolute_bottomright($module, &$params, &$attribs) {
    if (!empty ($module->content)) : ?>
        <div class="absolute absolute-bottom absolute-right <?php if ($params->get('moduleclass_sfx')!='') : ?><?php echo $params->get('moduleclass_sfx'); ?><?php endif; ?>">
            <?php if ($module->showtitle != 0) : ?>
                <h3 class="title"><?php echo $module->title; ?></h3>
            <?php endif; ?>
            <?php echo $module->content; ?>           
        </div>
    <?php endif;
}

/*
 * Module chrome for rendering in absolute mode in bottom left
 */
function modChrome_absolute_bottomleft($module, &$params, &$attribs) {
    if (!empty ($module->content)) : ?>
        <div class="absolute absolute-bottom absolute-left <?php if ($params->get('moduleclass_sfx')!='') : ?><?php echo $params->get('moduleclass_sfx'); ?><?php endif; ?>">
            <?php if ($module->showtitle != 0) : ?>
                <h3 class="title"><?php echo $module->title; ?></h3>
            <?php endif; ?>
            <?php echo $module->content; ?>           
        </div>
    <?php endif;
}