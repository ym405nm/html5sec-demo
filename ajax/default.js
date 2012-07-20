
$("#sample1button").on("click",function(){
    $.get("sample1.php",{query: $("#sample1text").val()},function(data){
	$("#sample1").html(data);
   });
});

$("#sample2button").on("click",function(){
    $.get("sample1.php",{query: $("#sample2text").val()},function(data){
	$("#sample2").text(data);
    });
});

$("#sample3button").on("click",function(){
    $.get("sample3.php",{query: $("#sample3text").val()},function(data){
	e = eval("("+data+")");
	$("#sample3").text(e["res"]);
    });
});

$("#sample4button").on("click",function(){
    $.getJSON("sample4.php",{query: $("#sample4text").val()},function(data){
	$("#sample4").text(data["res"]);
    });
});

