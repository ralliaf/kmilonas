<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<!-- FOOTER -->
<footer id="t3-footer" class="wrap t3-footer">

  <!-- FOOT NAVIGATION -->
  <div class="container">
    <?php $this->spotlight ('footnav', 'footer-1, footer-2, footer-3, footer-4') ?>
	<!-- //FOOT NAVIGATION -->

  <section class="t3-copyright">
    <div class="container">
      <div class="row">
        <div class="<?php echo $this->getParam('t3-rmvlogo', 1) ? 'span8' : 'span12' ?> copyright<?php $this->_c('footer')?>">
          <jdoc:include type="modules" name="<?php $this->_p('footer') ?>" />
        </div>
        <?php if($this->getParam('t3-rmvlogo', 1)): ?>
        <div class="<?php echo $this->getParam('t3-rmvlogo', 1) ? 'span4' : 'span12' ?> copyright<?php $this->_c('foot_icon')?>">
          <jdoc:include type="modules" name="<?php $this->_p('foot_icon') ?>" />
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  </div>
  

</footer>
<!-- //FOOTER -->