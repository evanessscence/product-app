@extends('layouts.app')

@section('content')
<div class="container">
    <h1>@lang('products.title')</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">@lang('products.create')</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>@lang('products.name')</th>
                <th>@lang('products.category')</th>
                <th>@lang('products.price')</th>
                <th>@lang('products.description')</th>
                <th>@lang('products.actions')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category->name ?? 'N/A' }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ Str::limit($product->description, 50) }}</td>
                <td>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-warning btn-sm">@lang('products.edit')</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('@lang('products.confirm_delete')')">@lang('products.delete')</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
