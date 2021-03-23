<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">TaskList</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                {{-- 新規タスク作成ページへのリンク/左側の青い窓枠 --}}
                <li class="nav-item">{!! link_to_route('tasks.create', '新規タスクの投稿', [], ['class' => 'nav-link']) !!}</li>
                {{-- ユーザ登録ページへのリンク/右上のSignupの文字 --}}
                <li class="nav-item"><a href="#" class="nav-link">Signup</a></li>
                {{-- ログインページへのリンク/右上のloginの文字--}}
                <li class="nav-item"><a href="#" class="nav-link">Login</a></li>
            </ul>
        </div>
    </nav>
</header>