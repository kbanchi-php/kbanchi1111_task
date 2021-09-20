<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>タスク編集</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>タスク編集</h1>
    @if ($errors->any())
        <div class="error">
            <p>
                <b>【エラー内容】</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($task !== null)
        <form action="/tasks/{{ $task->id }}" method="post">
            @csrf
            @method('PATCH')
            <p>
                <label>【タイトル】</label>
                <input type="text" name="title" value="{{ old('title', $task->title) }}" required>
            </p>
            <p>
                <label>【内容】</label>
                <textarea name="body" cols="30" rows="10" required>{{ old('body', $task->body) }}</textarea>
            </p>
            <div class="button-group">
                <input type="submit" value="更新">
                <button type="button" onclick="location.href='/tasks/{{ $task->id }}'">詳細へ戻る</button>
            </div>
        </form>
    @else
        <p>id = {{ $id }} のタスク情報は存在しません。</p>
    @endif
</body>

</html>
