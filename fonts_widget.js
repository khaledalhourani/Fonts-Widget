// $Id$
(function ($) {

/**
 * Implementation of Drupal.behaviors.
 */
Drupal.behaviors.fonts_widget = {
  attach: function(context, settings) {
    Drupal.behaviors.fonts_widget.init();
    Drupal.behaviors.fonts_widget.enable();
  },

  /**
   * Desc
   */
  init: function() {
    var nass = $("#main #content");

    $(".fonts-widget-button div").click(function() {
      // Apply the appropriate css
      $(this).parent().parent().find("div").each(function() {
        $(this).parent().removeClass("active");
        nass.removeClass($(this).attr("id"));
      });

      $(this).parent().addClass("active");
      nass.addClass($(this).attr("id"));

      // Trigger new event
      nass.trigger('cssClassChanged')

      // Save settings onclick via ajax request
      var property = $(this).parent().parent().attr("id");
      var id = $(this).attr("id");
      var url = Drupal.settings.base_url + '/fonts_widget/save/' + property + '/' + id;
      $.post(url);
    });
  },

  /**
   * Desc
   */
  enable: function() {
    $.each(Drupal.settings.settings, function(key, value){
      $("#" + value).click();
    });
  },
};

})(jQuery);