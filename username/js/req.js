	$("#email").blur(function()
	{
			let emailIs=$(this).val();

	if(emailIs!="")
	{
				$.post('req.php',{emailis:emailIs},function(data)
		{
				if(data=="A")
				{
					$(".error").removeClass('succ');//removing the green color
					$(".error").text("Email already exists");
					$("#submit").attr("disabled","true");//disabling the button
				}
				else if(data=='B')
				{
					$(".error").addClass("succ");//adding the green color
					$(".succ").text("Email is ok");
					$("#submit").removeAttr("disabled");//removing the diable option
				}

		});
	}
	else
	{
		$(".error").text("");
		// console.log("eo")
	}

	});



