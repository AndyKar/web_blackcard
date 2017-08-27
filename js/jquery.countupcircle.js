(function ($) {
    
    $.fn.CountUpCircle = function(options){

    	var self = this;
	
	    /**
	    * DEFAULT OPTIONS
	    *
	    * Description
	    *
	    * @param 
	    **/

		var settings = $.extend({
			duration: 5000, //ms
			opacity_anim: false,
			step_divider: 1
		}, options);

		var toCount = parseInt(this.html());

		var i 	 		 = toCount*1.5;
		var step 		 = settings.duration / (i - toCount / settings.step_divider);
		var procent_step = 1/(toCount / settings.step_divider);
		var displayNumber = function() {
			i=i-settings.step_divider;
			self.html(i);
			if (settings.opacity_anim){
				self.css({'opacity':procent_step*i});
			}
			if (i > toCount - settings.step_divider) {
				setTimeout(displayNumber, step);
			}
			else{
				setTimeout(set_endpoint, step);
			}
		};
		
		var set_endpoint = function (){
			self.html(toCount);
		}

		displayNumber();
	}
	$.fn.CountDownCircle = function(options){

    	var self = this;
	
	    /**
	    * DEFAULT OPTIONS
	    *
	    * Description
	    *
	    * @param 
	    **/

		var settings = $.extend({
			iditem: 0,
			duration: 60000, //ms
			opacity_anim: false,
			step_divider: 1
		}, options);

		var toCount = parseInt(this.html());

		var i 	 		 = 60;
		var step 		 = settings.duration / (i - toCount / settings.step_divider);
		var procent_step = 1/(toCount / settings.step_divider);
		var displayNumber = function() {
			i=i-settings.step_divider;
			self.html(i);
			if (settings.opacity_anim){
				self.css({'opacity':procent_step*i});
			}
			if (i > toCount - settings.step_divider) {
				setTimeout(displayNumber, step);
				
				if(i < 11){
					
					$('.prcount').addClass('rednumber');
				} else {
					$('.prcount').removeClass('rednumber');
				}
			}
			else{
				setTimeout(set_endpoint, step);
				if (settings.iditem == 1){$('.promo-counter1').fadeOut(400);} 
				if (settings.iditem == 2){$('.promo-counter2').fadeOut(400);}
				if (settings.iditem == 3){$('.promo-counter3').fadeOut(400);}
				
			}
		};
		
		var set_endpoint = function (){
			self.html(toCount);
		}

		displayNumber();
	}

}(jQuery));
