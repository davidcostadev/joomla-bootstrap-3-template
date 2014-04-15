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

include 'includes/params.php';

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">

    <?php
    include 'includes/head.php';
    ?>

    <body>
        <div class="wrapper">
            <header>
                <div class="container">

                    <nav role="navigation" id="topnav">
                        <!--top-->
                        <?php if ($this->countModules('top')) : ?>
                            <div class="row">
                                <jdoc:include type="modules" name="top" style="none" />        
                            </div>
                        <?php endif; ?>
                        <!--top-->
                        <!-- top-left -->
                        <?php if ($this->countModules('top-left')) : ?>
                            <div class="pull-left">
                                <jdoc:include type="modules" name="top-left" style="none" />
                            </div>
                        <?php endif; ?>
                        <!-- top-left -->
                        <!-- top-right -->
                        <?php if ($this->countModules('top-right')) : ?>
                            <div class="pull-right">
                                <jdoc:include type="modules" name="top-right" style="none" />
                            </div>
                        <?php endif; ?>
                        <!-- top-right -->
                    </nav>
                </div>
            </header>

            <div id="wrap">
                <!--Navigation-->
                <div id="navigation">
                    <div class="container">
                        <div class="navbar navbar-default" role="navigation">
                            <div id="brand">
                                <a href="<?php echo $this->params->get('logo_link') ?>">
                                    <img src="<?php echo $this->params->get('logo_file') ?>"class="thumbnail" alt="Logo" />
                                </a>
                            </div>
                            <div class="navbar-header">
                                <?php if ($this->countModules('left')) : ?>
                                    <button type="button" class="navbar-toggle navbar-toggle-left" data-toggle="offcanvas">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                <?php endif; ?>
                                <?php if ($this->countModules('navigation')) : ?>
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                <?php endif; ?>
                            </div>
                            <?php if ($this->countModules('navigation')) : ?>
                                <div class="navbar-collapse collapse">
                                    <nav class="navigation navbar-right" role="navigation">
                                        <jdoc:include type="modules" name="navigation" style="none" />
                                    </nav>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!--Navigation-->
                <!--fullwidth-->
                <?php if ($this->countModules('fullwidth')) : ?>
                    <div id="fullwidth">
                        <div class="row">
                            <jdoc:include type="modules" name="fullwidth" style="block"/>
                        </div>
                    </div>
                <?php endif; ?>
                <!--fullwidth-->
                <!--bartop-->
                <?php if ($this->countModules('bartop-left') || $this->countModules('bartop-right')) : ?>
                    <div id="bartop">
                        <div class="container">
                            <div class="row">
                                <?php if ($this->countModules('bartop-left')) : ?>
                                    <div class="col-xs-12 col-md-<?php echo $bartopGrid;?>">
                                        <jdoc:include type="modules" name="bartop-left" style="none"/>
                                    </div>
                                <?php endif; ?>
                                <?php if ($this->countModules('bartop-right')) : ?>
                                    <div class="col-xs-12 col-md-<?php echo $bartopGrid;?>">
                                        <jdoc:include type="modules" name="bartop-right" style="none"/>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <!--bartop-->
                <!--Showcase-->
                <?php if ($this->countModules('showcase')) : ?>
                    <div id="showcase">
                        <div class="container">
                            <div class="row">
                                <jdoc:include type="modules" name="showcase" style="block"/>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <!--Showcase-->
                <!--Feature-->
                <?php if ($this->countModules('feature')) : ?>
                    <div id="feature">
                        <div class="container">
                            <div class="row">
                                <jdoc:include type="modules" name="feature" style="block" />        
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <!--Feature-->
                <!-- Content -->
                <div class="container">
                    <?php if ($this->countModules('breadcrumbs')) : ?>
                        <div id="breadcrumbs">        

                            <div class="row">
                                <jdoc:include type="modules" name="breadcrumbs" style="block" />
                            </div>

                        </div>
                    <?php endif; ?>
                    <div id="main" class="row show-grid row-offcanvas row-offcanvas-left">
                        <!-- Left -->
                        <?php if ($this->countModules('left')) : ?>
                            <div id="sidebar" class="col-xs-12 col-sm-4 col-md-3 sidebar-offcanvas">
                                <jdoc:include type="modules" name="left" style="xhtml" />
                            </div>
                        <?php endif; ?>
                        <!-- Component -->
                        <div id="container" class="col-xs-12 col-sm-8 col-md-<?php echo $contentWidth ; ?>">
                            <!-- Content-top Module Position -->        
                            <?php if ($this->countModules('content-top')) : ?>
                                <div id="content-top">
                                    <div class="row">
                                        <jdoc:include type="modules" name="content-top" style="block" />        
                                    </div>
                                </div>
                            <?php endif; ?>

                            <jdoc:include type="component" />
                            <jdoc:include type="message" />   

                            <!-- Below Content Module Position -->        
                            <?php if ($this->countModules('content-bottom')) : ?>
                                <div id="content-bottom">
                                    <div class="row">
                                        <jdoc:include type="modules" name="content-bottom" style="block" /> 
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!-- Right -->
                        <?php if ($this->countModules('right')) : ?>
                            <div id="sidebar-2" class="hidden-sm col-md-3">
                                <jdoc:include type="modules" name="right" style="xhtml" />
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- Content -->
                <!-- bottom -->
                <?php if ($this->countModules('bottom')) : ?>
                    <div id="bottom">
                        <div class="container">
                            <div class="row">
                                <jdoc:include type="modules" name="bottom" style="block" />
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <div id="push"></div>
                <!-- bottom -->
            </div>
            <!-- footer -->
            <?php if ($this->countModules('footer')) : ?>
                <div id="footer">
                    <div class="container">
                        <div class="row">
                            <jdoc:include type="modules" name="footer" style="block" />
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!-- footer -->
        </div>

        <jdoc:include type="modules" name="debug" />        
        <!-- page -->        
        <!-- JS -->
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            (function($) {
                $(document).ready(function() {
                    // dropdown
                    if ($('.parent').children('ul').length > 0) {
                        $('.parent').addClass('dropdown');
                        $('.parent > a').addClass('dropdown-toggle');
                        $('.parent > a').attr('data-toggle', 'dropdown');
                        $('.parent > a').append('<b class="caret"></b>');
                        $('.parent > ul').addClass('dropdown-menu');
                    }
                });
            })(jQuery);
        </script>
        <script type="text/javascript">
            (function($) {
                $('.dropdown input').click(function(e) {
                    e.stopPropagation();
                });
            })(jQuery);
        </script>
        <script type="text/javascript">
            (function($) {
                $('.dropdown-menu .dropdown-submenu a[data-toggle="dropdown-submenu"]').click(function(e) {
                    e.stopPropagation();
                });
            })(jQuery);
        </script>

        <!-- JS -->
    </body>
</html>
