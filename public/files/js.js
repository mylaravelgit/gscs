// JavaScript Document
function size(){ 
  var Wwidth = $(window).width();
  var bs = (Wwidth/320)*10;
  var bspx = bs+"px";
  $("html").css("font-size",bs);   
}


$(function(){ 
	 size();
});

$(window).resize(function(){ 
  size();
});
