@if(count($errors)>0)
<div class="row  justify-content-center">
    <div class="col-md-4 col-md-offset-4 error ">
        <ul>
            @foreach ($errors->all() as $error)
                 <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
