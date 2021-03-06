@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ route('property_statuses.update', @$data->id) }}" method="post">
    @csrf
    @method('PATCH') 
    <div class="form-group">
        <label>{{ __('messages.name') }}</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="" value="{{ $data->name }}">
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i></button>
</form>
</div>
@endsection
