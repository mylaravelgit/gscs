/*
	clockTime：锁定提交时间，如无申明，默认1分钟
	返回值
	400：手机号没填写
	401：网站号无效
	402：30天内数据重复
	1：正常
*/
document.write(unescape("%3Cscript src='http://apps.bdimg.com/libs/jquery.cookie/1.4.1/jquery.cookie.min.js' type='text/javascript'%3E%3C/script%3E"));
var reg={
	name:/^[\u4E00-\u9FFF]+$/,
	phone:/^1[3|4|5|7|8]\d{9}$/
}
$.extend({
	msgSubmit:function(id){
		var msg_webID     = $('#'+id+' input[name="msg_webID"]');
		var msg_username  = $('#'+id+' input[name="msg_username"]');
		var msg_userphone = $('#'+id+' input[name="msg_userphone"]');
		var msg_remarks   = $('#'+id+' input[name="msg_remarks"]');
		var msg_other     = $("#"+id+" .msg_other");
		var msg_text      = $("#"+id+" .msg_text");
		if(!reg.name.test(msg_username.val())){
			alert("请填写您的完整有效信息，以便我们为您测评。");
			msg_username.focus();
			return false;
		}
		if(!reg.phone.test(msg_userphone.val())){
			alert("请正确填写您的手机号，以便我们及时联系您。");
			msg_userphone.focus();
			return false;
		}
		alert("恭喜您，您已提交成功！您的受理编号为JMCS2019SZ068，我们将于5分钟内为您通知审核结果，祝您生活愉快!");
		return false;
	}//end msgSubmit()
});//end $.fn.extend()
var LeaveWord_Js_Url="http://crm.wenyifuxing.com/Renaissance/customer2/insertLeaveWord.action";

var LeaveWord_param={};
function LeaveWord_Js(a,s,c,g,h,j,k){
	//默认留言
	LeaveWord_param={a:a,s:s,c:c,d:window.location.href,sourceProject:1,littleProject:g,brand:h,city:j,bigProject:k,sourceLink:window.location.href}
	LeaveWord_submit();
}
//积分
function LeaveWord_two_Js(a,s,c,d,g,h,j,k){
	LeaveWord_param={a:a,s:s,c:c,d:d,sourceProject:1,littleProject:g,brand:h,city:j,bigProject:k,sourceLink:window.location.href}
	LeaveWord_submit();
}
function LeaveWord_submit(){
	var leg={
		name:/^[\u4E00-\u9FFF]+$/,
		phone:/^1[3|4|5|7|8]\d{9}$/
	}	
	if(!leg.name.test(LeaveWord_param["a"])){
		return false;
	}
	if(!leg.phone.test(LeaveWord_param["s"])){
		return false;
	}
	$.ajax({  
        type : "get",  
        async:false,  
        url : LeaveWord_Js_Url,  
        data:LeaveWord_param,
        dataType : "jsonp",//数据类型为jsonp  
        jsonp: "jsonpCallback",//服务端用于接收callback调用的function名的参数  
        success : function(data){  
        },  
        error:function(){  
        }  
    });   
}