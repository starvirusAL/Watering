
function myFunction() {
	
	data = $('#content').val();
    $.ajax({	
	
		url: 'save.php',
		data:{content: data},
		complete: function (response) { 
			
			$('#output').html(response.responseText);
		  
		},
		error: function () {
			$('#output').html('Error!');
		}
   });
}

function myFunction1() {
	 
	data = $('#content').val();
    $.ajax({	
	
		url: 'xzxz.php',
		data:{content: data},
		complete: function (response) { 
			
			$('#output1').html(response.responseText);
		  
		},
		error: function () {
			$('#output1').html('Error!');
		}
   });
}

