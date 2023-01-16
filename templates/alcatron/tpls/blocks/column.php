<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<!-- NAV HELPER -->
<nav class="wrap column<?php $this->_c('column') ?>">
  <div class="container">
  <div class="row">
  <div class="span6">
    <jdoc:include type="modules" name="<?php $this->_p('left') ?>" styile="xhtml"/>
  </div>
  <div class="span1">
    <jdoc:include type="modules" name="<?php $this->_p('mid') ?>" styile="xhtml"/>
  </div>
  <div class="span5">
    <jdoc:include type="modules" name="<?php $this->_p('right') ?>" style="xhtml"/>
  </div>
  </div>
  </div>
</nav>
<!-- //NAV HELPER -->