

























if(typeof doyoo=='undefined' || !doyoo){
var d_genId=function(){
var id ='',ids='0123456789abcdef';
for(var i=0;i<32;i++){ id+=ids.charAt(Math.floor(Math.random()*16)); } return id;
};

var schema='http';
if(location.href.indexOf('https:') == 0){
schema = 'https';
}
var doyoo={
env:{
secure:schema=='https',
mon:schema+'://m9100.talk99.cn/monitor',
chat:schema+'://chat7123b.talk99.cn/chat',
file:schema+'://yun-static.soperson.com/131221',
compId:20000773,
confId:10099093,
workDomain:'',
vId:d_genId(),
lang:'',
fixFlash:0,
fixMobileScale:0,
subComp:30510,
_mark:'f1c744ffdc95edd9e2b313d04c621afa677e44b6979284dfffcd9e6e05bf4a90e101b0e63c65bcb3'
},
chat:{
mobileColor:'',
mobileHeight:80,
mobileChatHintBottom:0,
mobileChatHintMode:0,
mobileChatHintColor:'',
mobileChatHintSize:0,
priorMiniChat:0
}




};

if(typeof talk99Init == 'function'){
talk99Init(doyoo);
}
if(!document.getElementById('doyoo_panel')){
var supportJquery=typeof jQuery!='undefined';
var doyooWrite=function(html){
document.writeln(html);
}

doyooWrite('<div id="doyoo_panel"></div>');


doyooWrite('<div id="doyoo_monitor"></div>');


doyooWrite('<div id="talk99_message"></div>')

doyooWrite('<div id="doyoo_share" style="display:none;"></div>');
doyooWrite('<lin'+'k rel="stylesheet" type="text/css" href="'+schema+'://yun-static.soperson.com/131221/oms.css?181204"></li'+'nk>');
doyooWrite('<scr'+'ipt type="text/javascript" src="'+schema+'://yun-static.soperson.com/131221/oms.js?181208" charset="utf-8"></scr'+'ipt>');
}
}
