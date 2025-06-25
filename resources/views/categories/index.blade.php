@extends('layouts.app')

@section('content')
<div class="container">
    <h1>@lang('categories.title')</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">@lang('categories.create')</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>@lang('categories.name')</th>
                <th>@lang('categories.description')</th>
                <th>@lang('categories.actions')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning btn-sm">@lang('categories.edit')</a>
                    <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('@lang('categories.confirm_delete')')">@lang('categories.delete')</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
