<div class=" table table-response">
	<div class="pull-right" style="margin-bottom: 20px;">
		<button type="button" class="insert-modal btn btn-primary btn-lg active" id="myModal">
			<span class="  glyphicon glyphicon-plus"> Add Contact</span>
		</button>
		<button type="button" class="btn btn-info btn-lg"  data-target="#myModal">Abrir Modal</button>
	</div>
<table class="table table-borderd" id="table">
	<thead  style="background-color:#581845; color:#ffff">
		<tr>
			<th class="text-center">#</th>
			<th class="text-center">Full Name</th>
			<th class="text-center">Gender</th>
			<th class="text-center">Phone Number</th>
			<th class="text-center">Created At</th>
			<th class="text-center" width="150px">Operatioms</th>	
		</tr>
	</thead>
	{{csrf_field()}}
     @foreach($contacts as $key=>$contact)
	<tr>
		<td class="text-center">{{$key}}</td>
		<td class="text-center">{{$contact->name}}</td>
		<td class="text-center">{{$contact->gender}}</td>
		<td class="text-center">{{$contact->phone}}</td>
		<td class="text-center">{{$contact->created_at}}</td>
       <td>
       	<button></button>
          <button></button>
          <button></button>
       </td>
	</tr>
@endforeach
</table>	

</div>