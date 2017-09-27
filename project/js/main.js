$(document).ready(function(){ 

	// username 

   $('#username').blur(function(){
   	  var username = $(this).val();
   	  $.ajax({
   	  	url:"check/checkuser.php",
   	  	method: "POST",
   	  	data:{username:username},
   	  	datatype:"text",
   	  	success:function(data){
   	  		$('#userstatus').html(data);

   	  	}

   	  });
   });

//skill

$('#skill').keyup(function(){
   	  var skill = $(this).val();

   	  if (skill != "") {

   	  	$.ajax({
   	  	url:"check/checkskill.php",
   	  	method: "POST",
   	  	data:{skill:skill},
   	  	datatype:"text",
   	  	success:function(data){
   	  		$('#statusskill').fadeIn(data);
   	  		$('#statusskill').html(data);

   	  	}

   	  });

   	  }




   });

	$(document).on('click', 'li', function(){
		$('#skill').val($(this).text());
		$('#statusskill').fadeOut();


	});

	//showpassword

	$("#showpassword").on('click',  function(){
		var pass = $("#password");
		var fieldtype = pass.attr('type');
		if (fieldtype == 'password') {
			pass.attr('type', 'text');
			$(this).text("Hide password");
		}else{
			pass.attr('type', 'password');
			$(this).text("show password");
		}


	});


//auto refresh
$('#autosubmit').click(function(){
        var content = $("#body").val();



        if ($.trim(content) != "") {

         $.ajax({
            url:"check/checkrefresh.php",
            method: "POST",
            data:{body:content},
            datatype:"text",
            success:function(data){
               $("#body").val('');

         }

        });
         return false;
        
         }

        });

     setInterval(function(){
      $("#autostatus").load("check/getrefresh.php").fadeIn("slow");

     }, 1000);

//livesearch

$("#livesearch").keyup(function(){
var live = $(this).val();

        if (live != "") {

         $.ajax({
            url:"check/livesearch.php",
            method: "POST",
            data:{search:live},
            datatype:"text",
            success:function(data){
          
               $('#statuslive').html(data);

         }

        });

        }else{
         $('#statuslive').html("");

        }


});

 });  