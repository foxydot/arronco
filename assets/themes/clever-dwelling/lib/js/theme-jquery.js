jQuery(document).ready(function($) {	
    $('*:first-child').addClass('first-child');
    $('*:last-child').addClass('last-child');
    $('*:nth-child(even)').addClass('even');
    $('*:nth-child(odd)').addClass('odd');
	
	var numwidgets = $('#footer-widgets div.widget').length;
	$('#footer-widgets').addClass('cols-'+numwidgets);
	$.each(['show', 'hide'], function (i, ev) {
        var el = $.fn[ev];
        $.fn[ev] = function () {
          this.trigger(ev);
          return el.apply(this, arguments);
        };
      });

	$('.nav-footer ul.menu>li').after(function(){
		if(!$(this).hasClass('last-child') && $(this).hasClass('menu-item') && $(this).css('display')!='none'){
			return '<li class="separator">|</li>';
		}
	});
	//$('.mega-stack').removeClass('mega-menu-columns-2-of-8').addClass('mega-menu-columns-1-of-8');//wrapAll('<div class="stacked"></div>');
	$('.mega-menu-item-type-widget').height(function(){
	    return $(this).parent().height();
	}).removeClass('mega-menu-clear');
	
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

var countrycodes = "1"
var delimiters = "-|\\.|—|–|&nbsp;"
var phonedef = "\\+?(?:(?:(?:" + countrycodes + ")(?:\\s|" + delimiters + ")?)?\\(?[2-9]\\d{2}\\)?(?:\\s|" + delimiters + ")?[2-9]\\d{2}(?:" + delimiters + ")?[0-9a-z]{4})"
var spechars = new RegExp("([- \(\)\.:]|\\s|" + delimiters + ")","gi") //Special characters to be removed from the link
var phonereg = new RegExp("((^|[^0-9])(href=[\"']tel:)?((?:" + phonedef + ")[\"'][^>]*?>)?(" + phonedef + ")($|[^0-9]))","gi")

function ReplacePhoneNumbers(oldhtml) {
//Created by Jon Meck at LunaMetrics.com - Version 1.0
var newhtml = oldhtml.replace(/href=['"]callto:/gi,'href="tel:')
newhtml = newhtml.replace(phonereg, function ($0, $1, $2, $3, $4, $5, $6) {
    if ($3) return $1;
    else if ($4) return $2+$4+$5+$6;
    else return $2+"<a href='tel:"+$5.replace(spechars,"")+"'>"+$5+"</a>"+$6; }); 
return newhtml;
}

$("#address").html(ReplacePhoneNumbers($("#address").html()))

$("a[href^='tel:']").click(function(event){
     event.preventDefault(); 

     link  = $(this).attr('href');
     tracklink = link.replace("tel:","")
     tracklink = tracklink.replace(spechars,"")
     if(tracklink.length == 10) {tracklink = "1" + tracklink}

     ga('send', 'event', 'Contact', 'Phone', tracklink);
     //_gaq.push(['_trackEvent', 'Contact', 'Phone', tracklink]);

     setTimeout(function() {
        window.location = link;
     },300);
});
}
})