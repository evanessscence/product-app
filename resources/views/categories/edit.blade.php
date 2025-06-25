@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">@lang('categories.edit')</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('categories.update', $category) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label fw-bold">@lang('categories.name')</label>
                            <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">@lang('categories.description')</label>
                            <textarea name="description" class="form-control" rows="4">{{ $category->description }}</textarea>
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <button class="btn btn-primary">@lang('categories.update')</button>
                            <a href="{{ route('categories.index') }}" class="btn btn-secondary">@lang('categories.cancel')</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
