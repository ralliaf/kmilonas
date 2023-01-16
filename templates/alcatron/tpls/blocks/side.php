<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<!-- NAV HELPER -->
<nav class="wrap side<?php $this->_c('side') ?>">
  <div class="container">
  <div class="row">
  <div class="span8">
    <jdoc:include type="modules" name="<?php $this->_p('side1') ?>" style="xhtml"/>
  </div>
  <div class="span4">
    <jdoc:include type="modules" name="<?php $this->_p('side2') ?>" style="xhtml"/>
  </div>
  </div>
  </div>
</nav>
<!-- //NAV HELPER -->