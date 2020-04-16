@extends('layouts.app')

@section('content')

@error('coun_w')
<div class="alert alert-danger" role="alert"> {{ $message }}
</div>
@enderror

<!-- @error('success_add')
<div class="alert alert-success" role="alert"> {{ $message }}
</div>
@enderror -->

@if (session('success_added'))
<div class="alert alert-success">
    {{ session('success_added') }}
</div>
@endif


@if (session('field__empty'))
<div class="alert alert-danger">
    {{ session('field__empty') }}
</div>
@endif

<!-- @error('success_deleted')
<div class="alert alert-success" role="alert"> {{ $message }}
</div>
@enderror -->



<form action="{{ url('task') }}" class="form-inline" method="post">
    <div class="form-group mr-3">
        <input type="text" name="name" class="form-control" placeholder="Add item" autocomplete='off'>
    </div>

    @csrf

    <button type="submit" class="btn btn-primary">Add</button>


    <div>

</form>


@endsection
