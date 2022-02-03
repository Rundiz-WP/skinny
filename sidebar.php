<?php
/** 
 * Skinny theme.
 * 
 * This file is not required by WordPress nor Theme Check but for split the HTML into its purpose.
 * 
 * @package skinny
 * @since 0.1
 * @license http://opensource.org/licenses/MIT MIT
 */


// all the code below is not required by WordPress nor Theme Check.
if (is_active_sidebar('sidebar')) {
    ?>
<ul id="sidebar-area" class="sidebar-area widget-area" role="complementary">
    <?php dynamic_sidebar('sidebar'); ?> 
</ul><!-- #sidebar-area -->
    <?php
}