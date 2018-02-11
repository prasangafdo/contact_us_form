@extends('layouts\app')
@section ('content')
<h1 class="text-center text-primary"> Laravel Contact us form </h1>
<div class="container">
    <form action="contact" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label>Message</label>
            <textarea class="form-control" name="message"> </textarea>
        </div>

        <button class="btn btn-primary text-center">Submit</button>
    </div>
</div>

@endsection