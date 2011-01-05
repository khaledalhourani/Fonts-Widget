<?php
// $Id$

/**
 * @file
 * Default theme implementation for displaying fonts widget block.
 *
 * Available variables:
 * - $user: User profile.
 * - $items: widget items.
 *
 * @see template_preprocess_fonts_widget_block()
 */
?>

<?php foreach ($items as $item): ?>
  <div class="fonts-widget-container" id="<?php print $item['name']; ?>">
    <div class="fonts-widget-title"><?php print $item['title']; ?></div>

    <?php foreach ($item as $subitem): ?>
      <?php if (is_array($subitem)): ?>
      <div class="fonts-widget-button">
        <div class="widget-item <?php print $item['class']; ?>" id="<?php print $subitem['name']; ?>" title="<?php print $subitem['title']; ?>"></div>
      </div>
      <?php endif; ?>
    <?php endforeach; ?>

  </div>
<?php endforeach; ?>