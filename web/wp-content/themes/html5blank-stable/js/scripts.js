(function ($, root, undefined) {
	
	jQuery(function () {
		
		'use strict';
		
		// DOM ready, take it away


    // Navigation Sliding Bar
        var main_navigation = jQuery('.navbar-wrapper');
        var sliding_bar = jQuery('.st-current-menu');
        var sf_menu = main_navigation.children('ul.navbar-nav');
        var current_bar = sf_menu.children('.current-menu-item');
        if( !current_bar.length ){ current_bar = sf_menu.children().filter(':first'); }
        function init_navigation_sliding_bar(){
          // sliding bar width
          var left_pos = current_bar.position().left + parseInt(current_bar.css('padding-left'));
          //console.log(left_pos);

          sliding_bar.css({ 'width':current_bar.width(), 'left': left_pos });
          //console.log(sliding_bar);
          //console.log('Navigation actived');
        }
        
        init_navigation_sliding_bar();

        sf_menu.children().hover(function(){
          //console.log('paso el menu en hover');
          jQuery('.current_page_item').removeClass('current-menu-item');
          var left_pos = jQuery(this).position().left + parseInt(jQuery(this).css('padding-left'));
          //console.log(left_pos);

          sliding_bar.animate({ 'width':jQuery(this).width(), 'left': left_pos}, 
                              { queue: false, easing: 'easeOutQuad', duration: 250 });
        },function(){
          jQuery('.current_page_item').addClass('current-menu-item');
          var left_pos = current_bar.position().left + parseInt(current_bar.css('padding-left'));

          sliding_bar.animate({ 'width':current_bar.width(), 'left': left_pos }, 
                              { queue: false, easing: 'easeOutQuad', duration: 250 });
        });

        // When window resize, set all function again
        jQuery(window).resize(function(){
          init_navigation_sliding_bar();
        }); 

        var scrollObject = {};
        window.onscroll = getScrollPosition;

        function getScrollPosition(){
          scrollObject = {
           x: window.pageXOffset,
           y: window.pageYOffset
          }
		    };
	});
	
})(jQuery, this);
