<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<!-- META FOR IOS & HANDHELD -->
<meta name="viewport" content="width=device-width, initial-scale=1.0<?php echo $this->getParam('responsive', 1) ? ', maximum-scale=1.0, user-scalable=no' : '' ?>"/>
<meta name="HandheldFriendly" content="true" />
<meta name="apple-mobile-web-app-capable" content="YES" />
<!-- //META FOR IOS & HANDHELD -->

<?php 
// SYSTEM CSS
$this->addStyleSheet(JURI::base(true).'/templates/system/css/system.css'); 
?>

<?php 
// T3 BASE HEAD
$this->addHead(); 
$this->addscript(JURI::base(true).'/templates/alcatron/js/jquery.noConflict.js');
$this->addscript(JURI::base(true).'/templates/alcatron/js/jquery.js');
$this->addscript(JURI::base(true).'/templates/alcatron/js/jquery.bxslider.min.js');
$this->addscript(JURI::base(true).'/templates/alcatron/js/script.js');
$this->addscript(JURI::base(true).'/templates/alcatron/js/foundation.min.js');
$this->addscript(JURI::base(true).'/templates/alcatron/js/app-bottom-calls.js');
$this->addscript(JURI::base(true).'/templates/alcatron/js/foundation.orbit.js');
$this->addscript(JURI::base(true).'/templates/alcatron/js/jquery.carouFredSel-6.2.0-packed.js');
$this->addscript(JURI::base(true).'/templates/alcatron/js/prettify.js');
$this->addscript(JURI::base(true).'/templates/alcatron/js/jquery.smallipop.js');
$this->addscript(JURI::base(true).'/templates/alcatron/js/smallipop.calls.js');
$this->addscript(JURI::base(true).'/templates/alcatron/js/zepto.js');
$this->addscript(JURI::base(true).'/templates/alcatron/js/custom.modernizr.js');

?>


  <script>
    $(document).foundation();
  </script>  
 



<?php 
// CUSTOM CSS
if(is_file(T3_TEMPLATE_PATH . '/css/custom.css')) {
	$this->addStyleSheet(T3_TEMPLATE_URL.'/css/custom.css'); 
}
?>

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- For IE6-8 support of media query -->
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo T3_URL ?>/js/respond.min.js"></script>
<![endif]-->

<!-- You can add Google Analytics here-->