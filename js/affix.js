(function($){
	$(document).ready(function(){
		var o = {};
			o = $('.fix');
		o.wrap( '<div class="fix-wrap"></div>' );
		function affix( o ) {
				o.each(function(){
					$(this).removeAttr('style');
					$(this).parent().removeAttr('style');
				});
			if ($(window).width() >= 768) {
				o.each(function(){
					var origOffset = {};
					var css = {};
					origOffset = $(this).offset();
					origOffset.width = $(this).width();
					
					//$(this).parent().height($(this).height());
					
					css.position = 'fixed';
					css.top = origOffset.top;
					css.left = origOffset.left;
					css.width = origOffset.width;
			
					$(this).css(css);
				});
			}
			
		}
		$(window).resize(function(){
			affix( o );
		});
		affix( o );
	});
})(jQuery);