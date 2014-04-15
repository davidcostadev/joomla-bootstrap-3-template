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

 /**
  * Code of apply code slide of sidebar
  */
(function($) {
    $(document).ready(function () {
        $('[data-toggle=offcanvas]').click(function () {
            $('.row-offcanvas').toggleClass('active')
        });
    });
})(jQuery);