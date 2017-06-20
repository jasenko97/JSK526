
	//jQuery Plugin to change checkbox and radio
	(function($) {

		$.fn.makeNiceCheckbox = function( options ) {
			var settings = $.extend({className:'inputwrapper'},options);

			this.each( function() {
				$( this ).css({position:'absolute','z-index':-1});
				var wrapper = $(this).wrap('<div>').parent();
				wrapper
					.addClass(settings.className)
					.css({display:'inline-block', position:'relative'})
					.append(
						$( '<canvas width="45" height="45">')
					)
				var isChecked = $(this).is(':checked');

				drawCheckbox( $('canvas', wrapper).get(0), isChecked );
				$('canvas', wrapper).on( 'click', function() {
					isChecked = !isChecked;
					drawCheckbox( $('canvas', wrapper).get(0), isChecked );
					$('input', wrapper ).prop( 'checked', isChecked );
				});

				$(this).on( 'change', function() {
					isChecked = $(this).is(':checked');
					drawCheckbox( $('canvas', wrapper ).get(0), isChecked );
				})
			});




			return this;
		}

		//draw checkbox
		var drawCheckbox = function( oCanvas, checked ) {
			var ctx = oCanvas.getContext('2d');
			ctx.fillStyle = 'black';
			ctx.fillRect(0,0,45,45);
			ctx.strokeStyle='#fff';
			ctx.lineWidth=2;
			ctx.beginPath();
			ctx.moveTo(3,3);
			ctx.lineTo(3,42);
			ctx.lineTo(42,42);
			ctx.lineTo(42,3);
			ctx.closePath();
			ctx.stroke();

			var grd = ctx.createLinearGradient(0,0,45,0);
			grd.addColorStop( 0,'#000');
			grd.addColorStop( 0.11, 'rgba(0,0,0,0)');
			ctx.fillStyle=grd;
			ctx.fill();

			var grd = ctx.createLinearGradient(0,0,0,45);
			grd.addColorStop( 0,'#000');
			grd.addColorStop( 0.11, 'rgba(0,0,0,0)');
			ctx.fillStyle=grd;
			ctx.fill();

			if ( checked ) {
				ctx.strokeStyle="#333";
				ctx.lineWidth=7;
				ctx.beginPath();
				ctx.moveTo( 9,25);
				ctx.lineTo( 23,34);
				ctx.lineTo( 34,10);
				ctx.stroke();

				ctx.strokeStyle="#a0bf46";
				ctx.lineWidth=7;
				ctx.beginPath();
				ctx.moveTo( 7,22);
				ctx.lineTo( 22,31);
				ctx.lineTo( 34,7);
				ctx.stroke();
			}
		}




	}(jQuery));
