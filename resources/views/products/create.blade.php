@extends('layouts.app')

@section('content')
<div class="container">
    <h1>@lang('products.create')</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('products.store') }}">
        @csrf

        <div class="mb-3">
            <label>@lang('products.name')</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label>@lang('products.price')</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price') }}" min="0.01" required>
        </div>

        <div class="mb-3">
            <label>@lang('products.category')</label>
            <select name="category_id" class="form-select" required>
                <option value="">-- @lang('products.category') --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>@lang('products.description')</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        </div>

        <button class="btn btn-success">@lang('products.save')</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">@lang('products.cancel')</a>
    </form>
</div>
@endsection
