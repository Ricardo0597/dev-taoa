(function ($) {
    'use strict';

    Drupal.behaviors.myBehavior = {
        attach: function (context, settings) {

            var controller = new ScrollMagic.Controller();
            $('.views-row').each(function (index) {
                
                var $bg = $(this).find('.views-field-field-background-image');
                var $content = $(this).find('.views-field-field-icon');

                var tl = new TimelineMax();
                tl
                    .from($bg, 2, {y: '-40%', ease: Power0.easeNone}, 0)
                    .from($content, 1, {autoAlpha: 0, ease: Power0.easeNone}, 0.4)
                ;

                var scene = new ScrollMagic.Scene({
                    triggerElement: this,
                    triggerHook: 1,
                    duration: "100%"
                })
                .setTween(tl)
                .addTo(controller);
            });
        }
    }
}(jQuery));