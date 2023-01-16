<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<!-- NAV HELPER -->
<nav class="wrap t3-top_bar<?php $this->_c('top_bar') ?>">
  <div class="container">
  <div class="row">
  <div class="span11">
  <jdoc:include type="modules" name="<?php $this->_p('top_left') ?>" style="xhtml"/>
</div>
<div class="span1">
    <jdoc:include type="modules" name="<?php $this->_p('top_right') ?>" style="xhtml"/>
  </div>
  </div>
  </div>
</nav>
<!-- //NAV HELPER -->