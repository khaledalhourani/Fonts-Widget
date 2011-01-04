<?php
// $Id$

/**
 * @file
 * Default theme implementation for displaying fonts widget block.
 *
 * Available variables:
 * - $user: User profile.
 *
 * @see template_preprocess_fonts_widget_block()
 */
?>

<div class="fonts-widget-container" id="face">
  <div class="fonts-widget-title">الخط:</div>
  <div class="fonts-widget-button">
    <div class="widget-item typeface" id="uthmani" title="الخط العثماني"></div>
  </div>
  <div class="fonts-widget-button">
    <div class="widget-item typeface" id="arabic" title="الخط العربي التقليدي"></div>
  </div>
</div>

<div class="fonts-widget-container" id="size">
  <div class="fonts-widget-title">الحجم:</div>
  <div class="fonts-widget-button">
    <div class="widget-item size" id="size-1" title="صغير"></div>
  </div>
  <div class="fonts-widget-button">
    <div class="widget-item size" id="size-2" title="متوسط"></div>
  </div>
  <div class="fonts-widget-button">
    <div class="widget-item size" id="size-3" title="كبير"></div>
  </div>
</div>

<div class="fonts-widget-container" id="height">
  <div class="fonts-widget-title">عدد اﻷسطر:</div>
  <div class="fonts-widget-button">
    <div class="widget-item height" id="height-1" title="قليل"></div>
  </div>
  <div class="fonts-widget-button">
    <div class="widget-item height" id="height-2" title="عادي"></div>
  </div>
  <div class="fonts-widget-button">
    <div class="widget-item height" id="height-3" title="كثير"></div>
  </div>
</div>