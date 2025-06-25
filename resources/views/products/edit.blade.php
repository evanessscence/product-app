@extends('layouts.app')

@section('content')
<div class="container">
    <h1>@lang('products.edit')</h1>

    <form method="POST" action="{{ route('products.update', $product) }}">
        @csrf @method('PUT')

      <div class="mb-3">
    <label>@lang('products.name')</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $product->name) }}" required>
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>@lang('products.price')</label>
    <input type="number" step="0.01" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $product->price) }}" required>
    @error('price')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

        <div class="mb-3">
            <label>@lang('products.category')</label>
            <select name="category_id" class="form-select" required>
                <option value="">-- @lang('products.category') --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if ($category->id == $product->category_id) selected @endif>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>@lang('products.description')</label>
            <textarea name="description" class="form-control">{{ $product->description }}</textarea>
        </div>

        <button class="btn btn-primary">@lang('products.update')</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">@lang('products.cancel')</a>
    </form>
</div>
@endsection
