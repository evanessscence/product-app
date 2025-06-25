@extends('layouts.app')

@section('content')
<div class="container">
    <h1>@lang('categories.create')</h1>

    <form method="POST" action="{{ route('categories.store') }}">
        @csrf

        <div class="mb-3">
            <label>@lang('categories.name')</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>@lang('categories.description')</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <button class="btn btn-success">@lang('categories.save')</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">@lang('categories.cancel')</a>
    </form>
</div>
@endsection
