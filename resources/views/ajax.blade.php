
@section('scripts')
<script type="text/javascript">

	$(document).on('click', '.insert-modal', function(){
     $('#myModal').modal('show');
      $('.form-horizontal').show();
     $('.modal-title').text('Add New Contact ');
			  
		});
	$('#addContact').click(function(){

		$.ajax({
			type:'post',
			url:'addContact',
			data:{
				'_token':$('input[name=_token]').val(),
				'name':$('input[name=name]').val(),
				'gender':$('select[name=gender]').val(),
				'phone':$('input[name=phone]').val(),
				
			},success:function(data){


				if((data.errors)){
					$('.error').removeClass('hidden');
					$('.error').text('data.errors.name');
					$('.error').text('data.errors.gender');
					$('.error').text('data.errors.phone');
                 }else{


                 	$('error').remove();
					$('#table').append("<tr class='contact"+ data.id + "'>" +
						"<td  class='text-center'>" + data.id + "</td>"+
					"<td  class='text-center'>" + data.name + "</td>"+
                	"<td  class='text-center'>" + data.gender + "</td>"+
                    "<td  class='text-center'>" + data.phone + "</td>"+
                    "<td  class='text-center'>" + data.created_at +"</td>"+ "<td><button class='show-modal btn btn-warning btn-sm' data-id='"+data.id+"'  data-name='"+data.name+"'  data-gender='"+data.gender+"'  data-phone='"+data.phone+"'><span class='glyphicon glyphicon-zoom-in'></span></buton><button class='edit-modal btn btn-info btn-sm' data-id='"+data.id+"'  data-name='"+data.name+"'  data-gender='"+data.gender+"'  data-phone='"+data.phone+"'><span class='glyphicon glyphicon-pencil'></span></buton><button class='delete-modal btn btn-danger btn-sm' data-id='"+data.id+"'  data-name='"+data.name+"'  data-gender='"+data.gender+"'  data-phone='"+data.phone+"'><span class='glyphicon glyphicon-trash'></span></buton> </td>"+
      "</tr>");
                 }

			},

      });
		$('#name').val('');
		$('#gender').val('');
		$('#phone').val('');
		alert('Contact Create successfully')
		 $('#myModal').modal('hide');
	});




</script>

@endsection