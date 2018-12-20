@extends('layouts/app')
    
@section('content')
<div class="container">
    <div class="col-md-6">
        <form action="{{ url('post')}}" method="POST">
            {{csrf_field()}}
            <label for="title">title</label><br>
            <input type="text" name="title"/><br>
            @if ($errors->has('title'))
                <div style="color:red;">{{ $errors->first('title') }}</div>
            @endif
            <label for="content">content</label><br>
            <textarea cols="30" rows="5" name="content"></textarea><br>
            @if ($errors->has('content'))
                <div style="color:red;">{{ $errors->first('content') }}</div>
            @endif
            <button type="submit" class="btn btn-primary">submit</button>
    </form>
    </div>
</div>
@endsection