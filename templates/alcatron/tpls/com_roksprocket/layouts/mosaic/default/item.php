<?php
/**
 * @version   $Id: item.php 10885 2013-05-30 06:31:41Z btowles $
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2013 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

/**
 * @var $item RokSprocket_Item
 */
?>
<li<?php echo strlen($item->custom_tags) ? ' class="'.$item->custom_tags.'"' : ''; ?> data-mosaic-item>
	<div class="sprocket-mosaic-item" data-mosaic-content>
		<?php echo $item->custom_ordering_items; ?>
		<div class="sprocket-padding">
			<?php if ($item->getPrimaryImage()) :?>
			<div class="sprocket-mosaic-image-container">
				<?php if ($item->getPrimaryLink()) : ?><a href="<?php echo $item->getPrimaryLink()->getUrl(); ?>"><?php endif; ?>
				<img src="<?php echo $item->getPrimaryImage()->getSource(); ?>" alt="" class="sprocket-mosaic-image" />

				<div class="sprocket-mosaic-text">
			<div class="sprocket-mosaic-head">
				<?php if ($item->getTitle()): ?>
				<h2 class="sprocket-mosaic-title">
					<?php if ($item->getPrimaryLink()): ?><a href="<?php echo $item->getPrimaryLink()->getUrl(); ?>"><?php endif; ?>
						<?php echo $item->getTitle();?>
					<?php if ($item->getPrimaryLink()): ?></a><?php endif; ?>
				</h2>
				<?php endif; ?>

				<?php if ($parameters->get('mosaic_article_details') != 0): ?>
				<div class="sprocket-mosaic-infos">
					<?php if ($parameters->get('mosaic_article_details') !== 'date'): ?>
					By 	<span class="author"><?php echo $item->getAuthor(); ?></span>
					<?php endif; ?>
					<?php if ($parameters->get('mosaic_article_details') == 1): ?> / <?php endif; ?>
					<?php if ($parameters->get('mosaic_article_details') !== 'author'): ?>
					<span class="date"><?php echo $item->getDate();?></span>
					<?php endif; ?>
				</div>
				<?php endif; ?>
			</div>
				<?php echo $item->getText(); ?>
				<?php if ($item->getPrimaryLink()) : ?>
			<div class="magic_button">
			<a class="button btn-icon" href="<?php echo $item->getPrimaryLink()->getUrl(); ?>"><i class="icon-external-link icon-large"></i></a>
			
			<a class="button btn-icon" href="<?php echo $item->getPrimaryImage()->getSource(); ?>" data-rel="prettyPhoto"><i class="icon-zoom-in icon-large"></i></a>
			
			</div>
			
			<?php endif; ?>
			</div>
			</div>
			<?php endif; ?>

			

		

			

			<!--<?php if (count($item->custom_tags_list)) : ?>
				<ul class="sprocket-mosaic-tags">
				<?php
					foreach($item->custom_tags_list as $key => $name){
				 		echo ' <li class="sprocket-tags-'.$key.'">'.$name.'</li>';
					}
				?>
				</ul>
			<?php endif; ?>--------------->
		</div>
	</div>
</li>
