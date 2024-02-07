<form action="{{route('comments.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label>
        Название
        <input type='text' name="name" placeholder="название поста" required>
    </label>

    <label>
        Содержание
        <textarea name="content" id="content" cols="30" rows="10" required></textarea>
    </label>

    <label>
        Постер
        <input type="file" name="poster" id="poster" required>
    </label>

{{--    <label>--}}
{{--        Категория--}}
{{--        <select name="comment_ids" id="comment_ids" multiple>--}}
{{--            @foreach($comments as $comment)--}}
{{--                <option value="{{ $comment->id }}"> {{ $comment->name }}</option>--}}
{{--            @endforeach--}}

{{--        </select>--}}
{{--    </label>--}}

    <button type="submit">
        <span>Сохранить</span>
    </button>
</form>
