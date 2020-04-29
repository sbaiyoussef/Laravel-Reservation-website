@if(Session::has('message'))
<div class="text mb-5 pb-5">
  <h1 class="mb-3">{{Session::get('message')}}</h1>
</div>
      
    
@endif