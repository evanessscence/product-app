@extends('layouts.app')

@section('content')
<div class="container">
    <h1>@lang('categories.edit')</h1>

    <form method="POST" action="{{ route('categories.update', $category) }}">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>@lang('categories.name')</label>
            <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
        </div>

        <div class="mb-3">
            <label>@lang('categories.description')</label>
            <textarea name="description" class="form-control">{{ $category->description }}</textarea>
        </div>

        <button class="btn btn-primary">@lang('categories.update')</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">@lang('categories.cancel')</a>
    </form>
</div>
@endsection
