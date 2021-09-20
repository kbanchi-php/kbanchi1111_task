<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>タスク詳細</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>タスク詳細</h1>
    @if ($task !== null)
        <p>
            <label>【タイトル】</label>
            {{ $task->title }}
        </p>
        <p>
            <label>【内容】</label>
            {{ $task->body }}
        </p>
        <div class="button-group">
            <button type="button" onclick="location.href='/tasks'">一覧へ戻る</button>
            <button type="button" onclick="location.href='/tasks/{{ $task->id }}/edit'">編集する</button>
            <form action="/tasks/{{ $task->id }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
            </form>
        </div>
    @else
        <p>id = {{ $id }} のタスク情報は存在しません。</p>
    @endif
</body>

</html>
