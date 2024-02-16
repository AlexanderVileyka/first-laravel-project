<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
<div class="container">
    <header>
        <h1>
            <a href="#">
                <img src="https://tfgms.com/sandbox/dailyui/logo-1.png" alt="Authentic Collection">
            </a>
        </h1>
    </header>
    <h1 class="text-center">Категории постов</h1>

    <form class="registration-form" action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label class="col-one-half">
            <span class="label-text">Название</span>
            <input type='text' name="name" placeholder="Название поста" required>
        </label>

        <label class="col-one-half">
            <span class="label-text">Описание</span>
            <input type='text' name="description" placeholder="Описание поста">
        </label>

        <label class="col-one-half">
            <span class="label-text">Содержание</span>
            <textarea name="content" id="content" cols="30" rows="10" required></textarea>
        </label>

        <label class="col-one-half">
            <span class="label-text">Постер</span>
            <input type="file" name="poster" id="poster" required>
        </label>

        <label class="col-one-half">
            <span class="label-text">Категория</span>
            <select name="category_ids[]" id="category_ids" multiple>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"> {{ $category->name }}</option>
                @endforeach

            </select>
        </label>

        <button class="submit" type="submit">
            <span>Сохранить</span>
        </button>
    </form>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="{{ asset("assets/js/create.js") }}"></script>
</div>
</body>
</html>
