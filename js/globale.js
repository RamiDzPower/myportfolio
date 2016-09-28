/*--------------------------------------
		Timeline
-----------------------------------------*/

jQuery(document).ready(function($){
	var $timeline_block = $('.cd-timeline-block');

	//hide timeline blocks which are outside the viewport
	$timeline_block.each(function(){
		if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
			$(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
		}
	});

	//on scolling, show/animate timeline blocks when enter the viewport
	$(window).on('scroll', function(){
		$timeline_block.each(function(){
			if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
				$(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
			}
		});
	});
});


/*--------------------------------------
		Textarea
-----------------------------------------*/

(function() {
	// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
	if (!String.prototype.trim) {
		(function() {
			// Make sure we trim BOM and NBSP
			var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
			String.prototype.trim = function() {
				return this.replace(rtrim, '');
			};
		})();
	}

	[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
		// in case the input is already filled..
		if( inputEl.value.trim() !== '' ) {
			classie.add( inputEl.parentNode, 'input--filled' );
		}

		// events:
		inputEl.addEventListener( 'focus', onInputFocus );
		inputEl.addEventListener( 'blur', onInputBlur );
	} );

	function onInputFocus( ev ) {
		classie.add( ev.target.parentNode, 'input--filled' );
	}

	function onInputBlur( ev ) {
		if( ev.target.value.trim() === '' ) {
			classie.remove( ev.target.parentNode, 'input--filled' );
		}
	}
})();



/*--------------------------------------
		Testimonial
-----------------------------------------*/

jQuery(document).ready(function($){
	//create the slider
	$('.cd-testimonials-wrapper').flexslider({
		selector: ".cd-testimonials > li",
		animation: "slide",
		controlNav: false,
		directionNav: true,
		slideshow: true,
		slideshowSpeed: 4000, 
		smoothHeight: true,
		start: function(){
			$('.cd-testimonials').children('li').css({
				'opacity': 1,
				'position': 'relative'
			});
		}
	});

	//open the testimonials modal page
	$('.cd-see-all').on('click', function(){
		$('.cd-testimonials-all').addClass('is-visible');
	});

	//close the testimonials modal page
	$('.cd-testimonials-all .close-btn').on('click', function(){
		$('.cd-testimonials-all').removeClass('is-visible');
	});
	$(document).keyup(function(event){
		//check if user has pressed 'Esc'
    	if(event.which=='27'){
    		$('.cd-testimonials-all').removeClass('is-visible');	
	    }
    });
    
	//build the grid for the testimonials modal page
	$('.cd-testimonials-all-wrapper').children('ul').masonry({
  		itemSelector: '.cd-testimonials-item'
	});
});


/*--------------------------------------
		Skills
-----------------------------------------*/


jQuery(document).ready(function($){
	/* open folding content */
	$('.cd-gallery a').on('click', function(event){
		event.preventDefault();
		openItemInfo($(this).attr('href'));
	});

	/* close folding content */
	$('.cd-folding-panel .cd-close').on('click', function(event){
		event.preventDefault();
		toggleContent('', false);
	});
	$('.cd-gallery').on('click', function(event){
		/* detect click on .cd-gallery::before when the .cd-folding-panel is open */
		if($(event.target).is('.cd-gallery') && $('.fold-is-open').length > 0 ) toggleContent('', false);
	})

	function openItemInfo(url) {
		var mq = viewportSize();
		if( $('.cd-gallery').offset().top > $(window).scrollTop() && mq != 'mobile') {
			/* if content is visible above the .cd-gallery - scroll before opening the folding panel */
			$('body,html').animate({
				'scrollTop': $('.cd-gallery').offset().top
			}, 100, function(){ 
	           	toggleContent(url, true);
	        }); 

		} else {
			toggleContent(url, true);
		}
	}

	function toggleContent(url, bool) {
		if( bool ) {
			/* load and show new content */
			var foldingContent = $('.cd-fold-content');
			foldingContent.load(url+' .cd-fold-content > *', function(event){
				setTimeout(function(){
					$('body').addClass('overflow-hidden');
					$('.cd-folding-panel').addClass('is-open');
					$('.cd-main').addClass('fold-is-open');
				}, 100);
				
			});
		} else {
			/* close the folding panel */
			var mq = viewportSize();
			$('.cd-folding-panel').removeClass('is-open');
			$('.cd-main').removeClass('fold-is-open');
			
			(mq == 'mobile' || $('.no-csstransitions').length > 0 ) 
				/* according to the mq, immediately remove the .overflow-hidden or wait for the end of the animation */
				? $('body').removeClass('overflow-hidden')
				
				: $('.cd-main').find('.cd-item').eq(0).one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
					$('body').removeClass('overflow-hidden');
					$('.cd-main').find('.cd-item').eq(0).off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend');
				});
		}
		
	}

	function viewportSize() {
		/* retrieve the content value of .cd-main::before to check the actua mq */
		return window.getComputedStyle(document.querySelector('.cd-main'), '::before').getPropertyValue('content');
	}
});




/*--------------------------------------
		Menu
-----------------------------------------*/


$(document).ready(function(){
	var menuItemNum=$(".menu-item").length;
	var angle=560;
	var distance=120;
	var startingAngle=180+(-angle/2);
	var slice=angle/(menuItemNum-1);
	TweenMax.globalTimeScale(0.8);
	$(".menu-item").each(function(i){
		var angle=startingAngle+(slice*i);
		$(this).css({
			transform:"rotate("+(angle)+"deg)"
		})
		$(this).find(".menu-item-icon").css({
			transform:"rotate("+(-angle)+"deg)"
		})
	})
	var on=false;

	$(".menu-toggle-button").mousedown(function(){
		TweenMax.to($(".menu-toggle-icon"),0.1,{
			scale:0.65
		})
	})
	$(document).mouseup(function(){
		TweenMax.to($(".menu-toggle-icon"),0.1,{
			scale:1
		})
	});
	$(document).on("touchend",function(){
		$(document).trigger("mouseup")
	})
	$(".menu-toggle-button").on("mousedown",pressHandler);
	$(".menu-toggle-button").on("touchstart",function(event){
		$(this).trigger("mousedown");
		event.preventDefault();
		event.stopPropagation();
	});

	function pressHandler(event){
		on=!on;

		TweenMax.to($(this).children('.menu-toggle-icon'),0.4,{
			rotation:on?45:0,
			ease:Quint.easeInOut,
			force3D:true
		});

		on?openMenu():closeMenu();
		
	}
	function openMenu(){
		$(".menu-item").each(function(i){
			var delay=i*0.08;

			var $bounce=$(this).children(".menu-item-bounce");

			TweenMax.fromTo($bounce,0.2,{
				transformOrigin:"50% 50%"
			},{
				delay:delay,
				scaleX:0.8,
				scaleY:1.8,
				force3D:true,
				ease:Quad.easeInOut,
				onComplete:function(){
					TweenMax.to($bounce,0.15,{
						// scaleX:1.2,
						scaleY:0.7,
						force3D:true,
						ease:Quad.easeInOut,
						onComplete:function(){
							TweenMax.to($bounce,3,{
								// scaleX:1,
								scaleY:0.8,
								force3D:true,
								ease:Elastic.easeOut,
								easeParams:[1.1,0.12]
							})
						}
					})
				}
			});

			TweenMax.to($(this).children(".menu-item-button"),0.5,{
				delay:delay,
				y:distance,
				force3D:true,
				ease:Quint.easeInOut
			});
		})
	}
	function closeMenu(){
		$(".menu-item").each(function(i){
			var delay=i*0.08;

			var $bounce=$(this).children(".menu-item-bounce");

			TweenMax.fromTo($bounce,0.2,{
				transformOrigin:"50% 50%"
			},{
				delay:delay,
				scaleX:1,
				scaleY:0.8,
				force3D:true,
				ease:Quad.easeInOut,
				onComplete:function(){
					TweenMax.to($bounce,0.15,{
						// scaleX:1.2,
						scaleY:1.2,
						force3D:true,
						ease:Quad.easeInOut,
						onComplete:function(){
							TweenMax.to($bounce,3,{
								// scaleX:1,
								scaleY:1,
								force3D:true,
								ease:Elastic.easeOut,
								easeParams:[1.1,0.12]
							})
						}
					})
				}
			});
			

			TweenMax.to($(this).children(".menu-item-button"),0.3,{
				delay:delay,
				y:0,
				force3D:true,
				ease:Quint.easeIn
			});
		})
	}
})




/*--------------------------------------
		Maps
-----------------------------------------*/


jQuery(document).ready(function($){
	//set your google maps parameters
	var latitude = 13.7643684,
		longitude = 100.5392119,
		map_zoom = 13;

	//google map custom marker icon - .png fallback for IE11
	var is_internetExplorer11= navigator.userAgent.toLowerCase().indexOf('trident') > -1;
	var marker_url = ( is_internetExplorer11 ) ? 'img/cd-icon-location-maps.png' : 'img/cd-icon-location-maps.svg';
		
	//define the basic color of your map, plus a value for saturation and brightness
	var	main_color = '#0d313f',
		saturation_value= -20,
		brightness_value= 5;

	//we define here the style of the map
	var style= [ 
		{
			//set saturation for the labels on the map
			elementType: "labels",
			stylers: [
				{saturation: saturation_value}
			]
		},  
	    {	//poi stands for point of interest - don't show these lables on the map 
			featureType: "poi",
			elementType: "labels",
			stylers: [
				{visibility: "off"}
			]
		},
		{
			//don't show highways lables on the map
	        featureType: 'road.highway',
	        elementType: 'labels',
	        stylers: [
	            {visibility: "off"}
	        ]
	    }, 
		{ 	
			//don't show local road lables on the map
			featureType: "road.local", 
			elementType: "labels.icon", 
			stylers: [
				{visibility: "off"} 
			] 
		},
		{ 
			//don't show arterial road lables on the map
			featureType: "road.arterial", 
			elementType: "labels.icon", 
			stylers: [
				{visibility: "off"}
			] 
		},
		{
			//don't show road lables on the map
			featureType: "road",
			elementType: "geometry.stroke",
			stylers: [
				{visibility: "off"}
			]
		}, 
		//style different elements on the map
		{ 
			featureType: "transit", 
			elementType: "geometry.fill", 
			stylers: [
				{ hue: main_color },
				{ visibility: "on" }, 
				{ lightness: brightness_value }, 
				{ saturation: saturation_value }
			]
		}, 
		{
			featureType: "poi",
			elementType: "geometry.fill",
			stylers: [
				{ hue: main_color },
				{ visibility: "on" }, 
				{ lightness: brightness_value }, 
				{ saturation: saturation_value }
			]
		},
		{
			featureType: "poi.government",
			elementType: "geometry.fill",
			stylers: [
				{ hue: main_color },
				{ visibility: "on" }, 
				{ lightness: brightness_value }, 
				{ saturation: saturation_value }
			]
		},
		{
			featureType: "poi.sport_complex",
			elementType: "geometry.fill",
			stylers: [
				{ hue: main_color },
				{ visibility: "on" }, 
				{ lightness: brightness_value }, 
				{ saturation: saturation_value }
			]
		},
		{
			featureType: "poi.attraction",
			elementType: "geometry.fill",
			stylers: [
				{ hue: main_color },
				{ visibility: "on" }, 
				{ lightness: brightness_value }, 
				{ saturation: saturation_value }
			]
		},
		{
			featureType: "poi.business",
			elementType: "geometry.fill",
			stylers: [
				{ hue: main_color },
				{ visibility: "on" }, 
				{ lightness: brightness_value }, 
				{ saturation: saturation_value }
			]
		},
		{
			featureType: "transit",
			elementType: "geometry.fill",
			stylers: [
				{ hue: main_color },
				{ visibility: "on" }, 
				{ lightness: brightness_value }, 
				{ saturation: saturation_value }
			]
		},
		{
			featureType: "transit.station",
			elementType: "geometry.fill",
			stylers: [
				{ hue: main_color },
				{ visibility: "on" }, 
				{ lightness: brightness_value }, 
				{ saturation: saturation_value }
			]
		},
		{
			featureType: "landscape",
			stylers: [
				{ hue: main_color },
				{ visibility: "on" }, 
				{ lightness: brightness_value }, 
				{ saturation: saturation_value }
			]
			
		},
		{
			featureType: "road",
			elementType: "geometry.fill",
			stylers: [
				{ hue: main_color },
				{ visibility: "on" }, 
				{ lightness: brightness_value }, 
				{ saturation: saturation_value }
			]
		},
		{
			featureType: "road.highway",
			elementType: "geometry.fill",
			stylers: [
				{ hue: main_color },
				{ visibility: "on" }, 
				{ lightness: brightness_value }, 
				{ saturation: saturation_value }
			]
		}, 
		{
			featureType: "water",
			elementType: "geometry",
			stylers: [
				{ hue: main_color },
				{ visibility: "on" }, 
				{ lightness: brightness_value }, 
				{ saturation: saturation_value }
			]
		}
	];
		
	//set google map options
	var map_options = {
      	center: new google.maps.LatLng(latitude, longitude),
      	zoom: map_zoom,
      	panControl: false,
      	zoomControl: false,
      	mapTypeControl: false,
      	streetViewControl: false,
      	mapTypeId: google.maps.MapTypeId.ROADMAP,
      	scrollwheel: false,
      	styles: style,
    }
    //inizialize the map
	var map = new google.maps.Map(document.getElementById('google-container'), map_options);
	//add a custom marker to the map				
	var marker = new google.maps.Marker({
	  	position: new google.maps.LatLng(latitude, longitude),
	    map: map,
	    visible: true,
	 	icon: marker_url,
	});
	var center;
	function calculateCenter() {
	  center = map.getCenter();
	}
	google.maps.event.addDomListener(map, 'idle', function() {
	  calculateCenter();
	});
	google.maps.event.addDomListener(window, 'resize', function() {
	  map.setCenter(center);
	});
	//add custom buttons for the zoom-in/zoom-out on the map
	function CustomZoomControl(controlDiv, map) {
		//grap the zoom elements from the DOM and insert them in the map 
	  	var controlUIzoomIn= document.getElementById('cd-zoom-in'),
	  		controlUIzoomOut= document.getElementById('cd-zoom-out');
	  	controlDiv.appendChild(controlUIzoomIn);
	  	controlDiv.appendChild(controlUIzoomOut);

		// Setup the click event listeners and zoom-in or out according to the clicked element
		google.maps.event.addDomListener(controlUIzoomIn, 'click', function() {
		    map.setZoom(map.getZoom()+1)
		});
		google.maps.event.addDomListener(controlUIzoomOut, 'click', function() {
		    map.setZoom(map.getZoom()-1)
		});
	}

	var zoomControlDiv = document.createElement('div');
 	var zoomControl = new CustomZoomControl(zoomControlDiv, map);

  	//insert the zoom div on the top left of the map
  	map.controls[google.maps.ControlPosition.LEFT_TOP].push(zoomControlDiv);
});

  
  
  
  

/*--------------------------------------
		Helper
-----------------------------------------*/
  
  
  
  var docElem = window.document.documentElement,
	transEndEventNames = {
		'WebkitTransition': 'webkitTransitionEnd',
		'MozTransition': 'transitionend',
		'OTransition': 'oTransitionEnd',
		'msTransition': 'MSTransitionEnd',
		'transition': 'transitionend'
	},
	transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
	support = {
		pointerevents : Modernizr.pointerevents,
		csstransitions : Modernizr.csstransitions,
		csstransforms3d : Modernizr.csstransforms3d
	};

function scrollX() {
	return window.pageXOffset || docElem.scrollLeft; 
}

function scrollY() {
	return window.pageYOffset || docElem.scrollTop;
}

// from http://responsejs.com/labs/dimensions/
function getViewportW() {
	var client = docElem['clientWidth'],
		inner = window['innerWidth'];
	
	if( client < inner )
		return inner;
	else
		return client;
}

function getViewportH() {
	var client = docElem['clientHeight'],
		inner = window['innerHeight'];
	
	if( client < inner )
		return inner;
	else
		return client;
}

function extend( a, b ) {
	for( var key in b ) { 
		if( b.hasOwnProperty( key ) ) {
			a[key] = b[key];
		}
	}
	return a;
}



  

/*--------------------------------------
		Nav Bar Anim
-----------------------------------------*/



var cbpAnimatedHeader = (function() {

	var docElem = document.documentElement,
		header = document.querySelector( '.navbar-fixed-top' ),
		didScroll = false,
		changeHeaderOn = 300;

	function init() {
		window.addEventListener( 'scroll', function( event ) {
			if( !didScroll ) {
				didScroll = true;
				setTimeout( scrollPage, 250 );
			}
		}, false );
	}

	function scrollPage() {
		var sy = scrollY();
		if ( sy >= changeHeaderOn ) {
			classie.add( header, 'navbar-shrink' );
		}
		else {
			classie.remove( header, 'navbar-shrink' );
		}
		didScroll = false;
	}

	function scrollY() {
		return window.pageYOffset || docElem.scrollTop;
	}

	init();

})();



//-----------------Certification---------------------//

	var stylesheet = "http://www.testdome.com/Content/source/stylesheets/embed.css",
	link = document.createElement("link");
	link.href = stylesheet, link.type = "text/css", 
	link.rel = "stylesheet", 
	link.media = "screen,print", 
	document.getElementsByTagName("head")[0].appendChild(link);

  

/*--------------------------------------
		GRID 3D
-----------------------------------------*/


//------------Theme Javascript ----------------------------//

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Floating label headings for the contact form
$(function() {
    $("body").on("input propertychange", ".floating-label-form-group", function(e) {
        $(this).toggleClass("floating-label-form-group-with-value", !! $(e.target).val());
    }).on("focus", ".floating-label-form-group", function() {
        $(this).addClass("floating-label-form-group-with-focus");
    }).on("blur", ".floating-label-form-group", function() {
        $(this).removeClass("floating-label-form-group-with-focus");
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});


//-----------------Grid Javascript---------------------//
;( function( window ) {
	
	'use strict';

	function grid3D( el, options ) {
		this.el = el;
		this.options = extend( {}, this.options );
  		extend( this.options, options );
  		this._init();
	}

	// any options you might want to configure
	grid3D.prototype.options = {};

	grid3D.prototype._init = function() {
		// grid wrapper
		this.gridWrap = this.el.querySelector( 'div.grid-wrap' );
		// grid element
		this.grid = this.gridWrap.querySelector( 'div.grid' );
		// main grid items
		this.gridItems = [].slice.call( this.grid.children );
		// default sizes for grid items
		this.itemSize = { width : this.gridItems[0].offsetWidth, height : this.gridItems[0].offsetHeight };
		// content
		this.contentEl = this.el.querySelector( 'div.content' );
		// content items
		this.contentItems = [].slice.call( this.contentEl.children );
		// close content cross
		this.close = this.contentEl.querySelector( 'span.close-content' );
		// loading indicator
		this.loader = this.contentEl.querySelector( 'span.loading' );
		// support: support for pointer events, transitions and 3d transforms
		this.support = support.pointerevents && support.csstransitions && support.csstransforms3d;
		// init events
		this._initEvents();
	};

	grid3D.prototype._initEvents = function() {
		var self = this;
		
		// open the content element when clicking on the main grid items
		this.gridItems.forEach( function( item, idx ) {
			item.addEventListener( 'click', function() {
				self._showContent( idx );
			} );
		} );

		// close the content element
		this.close.addEventListener( 'click', function() {
			self._hideContent();
		} );

		if( this.support ) {
			// window resize
			window.addEventListener( 'resize', function() { self._resizeHandler(); } );

			// trick to prevent scrolling when animation is running (opening only)
			// this prevents that the back of the placeholder does not stay positioned in a wrong way
			window.addEventListener( 'scroll', function() {
				if ( self.isAnimating ) {
					window.scrollTo( self.scrollPosition ? self.scrollPosition.x : 0, self.scrollPosition ? self.scrollPosition.y : 0 );
				}
				else {
					self.scrollPosition = { x : window.pageXOffset || docElem.scrollLeft, y : window.pageYOffset || docElem.scrollTop };
					// change the grid perspective origin as we scroll the page
					self._scrollHandler();
				}
			});
		}
	};

	// creates placeholder and animates it to fullscreen
	// in the end of the animation the content is shown
	// a loading indicator will appear for 1 second to simulate a loading period
	grid3D.prototype._showContent = function( pos ) {
		if( this.isAnimating ) {
			return false;
		}
		this.isAnimating = true;

		var self = this,
			loadContent = function() {
				// simulating loading...
				setTimeout( function() {
					// hide loader
					classie.removeClass( self.loader, 'show' );
					// in the end of the transition set class "show" to respective content item
					classie.addClass( self.contentItems[ pos ], 'show' );
				}, 1000 );
				// show content area
				classie.addClass( self.contentEl, 'show' );
				// show loader
				classie.addClass( self.loader, 'show' );
				classie.addClass( document.body, 'noscroll' );
				self.isAnimating = false;
			};

		// if no support just load the content (simple fallback - no animation at all)
		if( !this.support ) {
			loadContent();
			return false;
		}

		var currentItem = this.gridItems[ pos ],
			itemContent = currentItem.innerHTML;
		
		// create the placeholder
		this.placeholder = this._createPlaceholder(itemContent );
		
		// set the top and left of the placeholder to the top and left of the clicked grid item (relative to the grid)
		this.placeholder.style.left = currentItem.offsetLeft + 'px';
		this.placeholder.style.top = currentItem.offsetTop + 'px';
		
		// append placeholder to the grid
		this.grid.appendChild( this.placeholder );

		// and animate it
		var animFn = function() {
			// give class "active" to current grid item (hides it)
			classie.addClass( currentItem, 'active' );
			// add class "view-full" to the grid-wrap
			classie.addClass( self.gridWrap, 'view-full' );
			// set width/height/left/top of placeholder
			self._resizePlaceholder();
			var onEndTransitionFn = function( ev ) {
				if( ev.propertyName.indexOf( 'transform' ) === -1 ) return false;
				this.removeEventListener( transEndEventName, onEndTransitionFn );
				loadContent();
			};
			self.placeholder.addEventListener( transEndEventName, onEndTransitionFn );
		};

		setTimeout( animFn, 25 );
	};

	grid3D.prototype._hideContent = function() {
		var self = this,
			contentItem = this.el.querySelector( 'div.content > .show' ),
			currentItem = this.gridItems[ this.contentItems.indexOf( contentItem ) ];
		
		classie.removeClass( contentItem, 'show' );
		classie.removeClass( this.contentEl, 'show' );
		// without the timeout there seems to be some problem in firefox
		setTimeout( function() { classie.removeClass( document.body, 'noscroll' ); }, 25 );
		// that's it for no support..
		if( !this.support ) return false;

		classie.removeClass( this.gridWrap, 'view-full' );

		// reset placeholder style values
		this.placeholder.style.left = currentItem.offsetLeft + 'px';
		this.placeholder.style.top = currentItem.offsetTop + 'px';
		this.placeholder.style.width = this.itemSize.width + 'px';
		this.placeholder.style.height = this.itemSize.height + 'px';

		var onEndPlaceholderTransFn = function( ev ) {
			this.removeEventListener( transEndEventName, onEndPlaceholderTransFn );
			// remove placeholder from grid
			self.placeholder.parentNode.removeChild( self.placeholder );
			// show grid item again
			classie.removeClass( currentItem, 'active' );
		};
		this.placeholder.addEventListener( transEndEventName, onEndPlaceholderTransFn );
	}

	// function to create the placeholder
	/*
	<div class="placeholder">
		<div class="front">[content]</div>
		<div class="back"></div>
	</div>
	*/
	grid3D.prototype._createPlaceholder = function( content ) {
		var front = document.createElement( 'div' );
		front.className = 'front';
		front.innerHTML = content;
		var back = document.createElement( 'div' );
		back.className = 'back';
		back.innerHTML = '&nbsp;';
		var placeholder = document.createElement( 'div' );
		placeholder.className = 'placeholder';
		placeholder.appendChild( front );
		placeholder.appendChild( back );
		return placeholder;
	};

	grid3D.prototype._scrollHandler = function() {
		var self = this;
		if( !this.didScroll ) {
			this.didScroll = true;
			setTimeout( function() { self._scrollPage(); }, 60 );
		}
	};

	// changes the grid perspective origin as we scroll the page
	grid3D.prototype._scrollPage = function() {
		var perspY = scrollY() + getViewportH() / 2;
		this.gridWrap.style.WebkitPerspectiveOrigin = '50% ' + perspY + 'px';
		this.gridWrap.style.MozPerspectiveOrigin = '50% ' + perspY + 'px';
		this.gridWrap.style.perspectiveOrigin = '50% ' + perspY + 'px';
		this.didScroll = false;
	};

	grid3D.prototype._resizeHandler = function() {
		var self = this;
		function delayed() {
			self._resizePlaceholder();
			self._scrollPage();
			self._resizeTimeout = null;
		}
		if ( this._resizeTimeout ) {
			clearTimeout( this._resizeTimeout );
		}
		this._resizeTimeout = setTimeout( delayed, 50 );
	}

	grid3D.prototype._resizePlaceholder = function() {
		// need to recalculate all these values as the size of the window changes
		this.itemSize = { width : this.gridItems[0].offsetWidth, height : this.gridItems[0].offsetHeight };
		if( this.placeholder ) {
			// set the placeholders top to "0 - grid offsetTop" and left to "0 - grid offsetLeft"
			this.placeholder.style.left = Number( -1 * ( this.grid.offsetLeft - scrollX() ) ) + 'px';
			this.placeholder.style.top = Number( -1 * ( this.grid.offsetTop - scrollY() ) ) + 'px';
			// set the placeholders width to windows width and height to windows height
			this.placeholder.style.width = getViewportW() + 'px';
			this.placeholder.style.height = getViewportH() + 'px';
		}
	}

	// add to global namespace
	window.grid3D = grid3D;

})( window );