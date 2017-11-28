@if(Session::has('message'))
  <div class="alert alert-info">
      <button class="close" data-dismiss='alert' aria-hidden="true" type="button" name="button">x</button>
      {{Session::get('message')}}
  </div>
 @endif
 @if(Session::has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" aria-hidden="true" data-dismiss="alert" name="button">x</button>
        {{ Session::get('success')}}
    </div>
@endif

@if(Session::has('danger'))
   <div class="alert alert-danger">
       <button type="button" class="close" aria-hidden="true" data-dismiss="alert" name="button">x</button>
       {{Session::get('danger')}}
   </div>
@endif
