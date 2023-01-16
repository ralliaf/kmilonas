<?php
/**
 * @version		$Id: item_comments_form.php 1812 2013-01-14 18:45:06Z lefteris.kavadas $
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2013 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die;

?>

<h3><?php echo JText::_('Leave a Comment') ?></h3>

<div class="contact-form comment clearfix">
<form action="<?php echo JURI::root(true); ?>/index.php" method="post" id="comment-form contact" class="form-validate">
	
	
    <div class="inbox1">
	<input class="inputbox1" type="text" name="userName" id="userName" value="<?php echo JText::_('Name'); ?>" onblur="if(this.value=='') this.value='<?php echo JText::_('Name'); ?>';" onfocus="if(this.value=='<?php echo JText::_('Name'); ?>') this.value='';" />
	</div>

    <div class="inbox2">
	<input class="inputbox2" type="text" name="commentEmail" id="commentEmail" value="<?php echo JText::_('E-mail'); ?>" onblur="if(this.value=='') this.value='<?php echo JText::_('E-mail'); ?>';" onfocus="if(this.value=='<?php echo JText::_('E-mail'); ?>') this.value='';" />
	</div>

    <div class="inbox3">
	<input class="inputbox3" type="text" name="commentURL" id="commentURL" value="<?php echo JText::_('Website'); ?>"  onblur="if(this.value=='') this.value='<?php echo JText::_('Website'); ?>';" onfocus="if(this.value=='<?php echo JText::_('Website'); ?>') this.value='';" />
	<div>
	
	
    <div class="textareabox">
	<textarea class="inputbox" onblur="if(this.value=='') this.value='<?php echo JText::_('Comment'); ?>';" onfocus="if(this.value=='<?php echo JText::_('Comment'); ?>') this.value='';" name="commentText" id="commentText"><?php echo JText::_('Comment'); ?></textarea>
	</div>



	<?php if($this->params->get('recaptcha') && $this->user->guest): ?>
	<label class="formRecaptcha"><?php echo JText::_('K2_ENTER_THE_TWO_WORDS_YOU_SEE_BELOW'); ?></label>
	<div id="recaptcha"></div>
	<?php endif; ?>
<div class="clear"></div>
	<input type="submit" class="button" id="submit submitCommentButton" value="<?php echo JText::_('Post a comment'); ?>" />

	<span id="formLog"></span>

	<input type="hidden" name="option" value="com_k2" />
	<input type="hidden" name="view" value="item" />
	<input type="hidden" name="task" value="comment" />
	<input type="hidden" name="itemID" value="<?php echo JRequest::getInt('id'); ?>" />
	<?php echo JHTML::_('form.token'); ?>
</form>
</div>
