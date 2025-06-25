<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>@lang('welcome.title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container text-center mt-5">
        <h1 class="mb-4">@lang('welcome.title')</h1>
        <a href="{{ route('categories.index') }}" class="btn btn-primary m-2">@lang('welcome.manage_categories')</a>
        <a href="{{ route('products.index') }}" class="btn btn-secondary m-2">@lang('welcome.manage_products')</a>
    </div>
</body>
</html>
