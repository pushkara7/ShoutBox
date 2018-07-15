$("#myForm").submit(function(){
	return false;
});

$("#submit").click(function(){
   console.log('hey');
    var name = $("#name").val();
    var message = $("#message").val();
  
    $.ajax({
    type: 'POST',
    data:({
        name: name,
        message: message
    }),
    dataType: 'JSON',
    url: 'action.php',
    success:function(data) {
    	alert(data);
        $("#shout").html(data);
    },
    error:function(err){
    	alert(err);
    }
});

});