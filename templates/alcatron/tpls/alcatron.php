<?php
/** 
 *------------------------------------------------------------------------------
 * @package       T3 Framework for Joomla!
 *------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2004-2013 JoomlArt.com. All Rights Reserved.
 * @license       GNU General Public License version 2 or later; see LICENSE.txt
 * @authors       JoomlArt, JoomlaBamboo, (contribute to this project at github 
 *                & Google group to become co-author)
 * @Google group: https://groups.google.com/forum/#!forum/t3fw
 * @Link:         http://t3-framework.org 
 *------------------------------------------------------------------------------
 */


defined('_JEXEC') or die;
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" class="<?php $this->bodyClass(); ?>">

  <head>
    <jdoc:include type="head" />
    <?php $this->loadBlock ('head') ?>
  </head>

  <body>
    <?php $this->loadBlock ('top_bar') ?>
    <?php $this->loadBlock ('header') ?>
    
<div class="main-wrapper">
    <?php $this->loadBlock ('slide') ?>
	
    <?php $this->loadBlock ('spotlight-1') ?>
	
    <?php $this->loadBlock ('slide_gallery') ?>
	
	<?php $this->loadBlock ('midblock') ?>
	
	<?php $this->loadBlock ('article-content') ?>
	 
    <?php $this->loadBlock ('column') ?>
	
	<?php $this->loadBlock ('side') ?>
	 
    <?php $this->loadBlock ('mainbody') ?>
    
    <?php $this->loadBlock ('spotlight-2') ?>
    
    <?php $this->loadBlock ('navhelper') ?>
   
  </div>  
  <?php $this->loadBlock ('footer') ?>
  </body>

</html>