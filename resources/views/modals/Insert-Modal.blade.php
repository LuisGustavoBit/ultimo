
  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header-store">
        <h5 class="modal-title" id="exampleModalLabel"> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
          
   <form  class="form-horizontal" id="form-add">
    <div class="form-group row addContact">
      <div class="col-md-12">
        
    <div class="input-group">
    <input type="text" class="fom-control" name="name" id="name" placeholder="enter your name here">
   <span class="input-group-addon">fuul name</span>
    <span class="error text-enter alert alert-danger hidden">fuul name</span>
    </div>
   </div>
   </div>
     
    <div class="form-group ">
    <div class="col-md-12">
    <div class="input-group">
    <select  name="gender" id="gender">
     <option value=""selected="true" disabled="true"> select Gender</option>
     <option value="Male" >Male</option>
      <option value="Female" >Female</option>
   </select>
   <span class="input-group-addon">Gender</span>
    <span class="error text-enter alert alert-danger hidden">fuul name</span>
      </div>
      </div>
      </div>

     <div class="form-group ">
     <div class="col-md-12">
     <div class="input-group">
     <input type="tel" class="fom-control" name="phone" id="phone" placeholder="enter your Number here">
     <span class="input-group-addon">mobile</span>
    <span class="error text-enter alert alert-danger hidden">Mobile</span>
     </div>
      </div>

    </div>





   </form>
        
      
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span>
         Close</button>
 
        <button type="button" class="btn btn-primary"

        id="addContact"><span class="glyphicon glyphicon-plus"></span>
      Save changes</button>
      </div>
    </div>
  </div>
</div>