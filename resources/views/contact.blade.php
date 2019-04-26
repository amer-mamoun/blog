@extends('layouts.master')

@section('content')
    <form action="{{ route('contactPost') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input class="form-control" name="name" type="text" placeholder="Name">
        </div>
        
        <div class="form-group">
            <input class="form-control" name="email[]" type="email" placeholder="Work email">
        </div>

        <div class="form-group">
            <input class="form-control" name="email[]" type="email" placeholder="Personal email">
        </div>

        <div class="form-group">
            <textarea class="form-control" name="message" id="" cols="30" rows="10" placeholder="Message..."></textarea>
        </div>

        <div class="form-group">
            <input class="form-control" name="attachment" type="file">
        </div>

        <div class="form-group">
            <button class="form-control" type="submit">Send message</button>
        </div>
    </form>
@endsection