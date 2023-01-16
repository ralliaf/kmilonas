<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<!-- NAV HELPER -->
<nav class="wrap t3-article-content<?php $this->_c('article-content') ?>">
  <div class="container">
  <div class="row">
  <div class="span3">
    <jdoc:include type="modules" name="<?php $this->_p('sidenav') ?>" style="xhtml"/>
  </div>
  <div class="span9">
    <jdoc:include type="modules" name="<?php $this->_p('content') ?>" style="xhtml"/>
  </div>
  </div>
  </div>
</nav>
<!-- //NAV HELPER -->