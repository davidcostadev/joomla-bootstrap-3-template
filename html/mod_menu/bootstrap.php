<?php

/**
 *
 * Bootstrap 3 for Joolma
 *
 * @author David Costa<davidcosta@csthost.com.br>
 * @copyright Copyright © 2014 David Costa <davidcosta@csthost.com.br>. All right reserved
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @link https://github.com/davidsantanacosta/joomla-bootstrap-3-template
 *
 */

// no direct access
defined('_JEXEC') or die;

 
?>

<ul class="nav navbar-nav<?php if(!empty($class_sfx)) echo ' '.$class_sfx;  ?>"<?php
    $tag = '';

    if ($params->get('tag_id') != null)
    {
        $tag = $params->get('tag_id') . '';
        echo ' id="' . $tag . '"';
    }
?>>
<?php
foreach ($list as $i => &$item)
{
    $class = 'item-' . $item->id;

    if ($item->id == $active_id)
    {
        $class .= ' current';
    }

    if (in_array($item->id, $path))
    {
        $class .= ' active';
    }
    elseif ($item->type == 'alias')
    {
        $aliasToId = $item->params->get('aliasoptions');

        if (count($path) > 0 && $aliasToId == $path[count($path) - 1])
        {
            $class .= ' active';
        }
        elseif (in_array($aliasToId, $path))
        {
            $class .= ' alias-parent-active';
        }
    }

    if ($item->type == 'separator')
    {
        $class .= ' divider';
    }

    if ($item->deeper)
    {
        $class .= ' dropdown';
    }

    if ($item->parent)
    {
        $class .= ' parent';
    }

    if (!empty($class))
    {
        $class = ' class="' . trim($class) . '"';
    }

    echo '<li' . $class . '>';

    // Render the menu item.
    switch ($item->type) :
        case 'separator':
        case 'url':
        case 'component':
        case 'heading':
            require JModuleHelper::getLayoutPath('mod_menu', 'bootstrap_' . $item->type);
            break;

        default:
            require JModuleHelper::getLayoutPath('mod_menu', 'bootstrap_url');
            break;
    endswitch;

    // The next item is deeper.
    if ($item->deeper)
    {
        echo '<ul class="dropdown-menu">';
    }
    elseif ($item->shallower)
    {
        // The next item is shallower.
        echo '</li>';
        echo str_repeat('</ul></li>', $item->level_diff);
    }
    else
    {
        // The next item is on the same level.
        echo '</li>';
    }
}
?></ul>
