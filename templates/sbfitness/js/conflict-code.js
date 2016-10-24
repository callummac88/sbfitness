/*
    Disable MooTools methods which conflict with jQuery/bootstrap methods on specific elements
 */

var mHide = Element.prototype.hide;
var mShow = Element.prototype.show;
var mSlide = Element.prototype.slide;

Element.implement({

    /*
     * These are needed to get some of the JQuery bootstrap built in effects working,
     * like the carousel, and require you to add the 'mootools-noconflict' class to
     * containers you want to use those effect with, like ...
     * <div class="carousel slide mootools-noconflict">
     */

     /* using bootstrap classes to find target elements for simplicity and maintainability :) PRC*/
    hide: function () {
        if (this.hasClass("collapse")) {
            return this;
        }
        mHide.apply(this, arguments);
    },

    show: function (v) {
        if (this.hasClass("collapse")) {
            return this;
        }
        mShow.apply(this, v);
    },

    slide: function (v) {
        if (this.hasClass("collapse")) {
            return this;
        }
        mSlide.apply(this, v);
    }
});