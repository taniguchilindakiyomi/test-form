<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test-form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register') }}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
           <h1 class="header__title">FashionablyLate</h1>
           <nav>
                <ul class="header-nav">
                    <li class="header-nav__item">
                        <a class="header-nav__link" href="/login">login</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>


    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2 class="contact-form__logo">Register</h2>
                <form  class="register-form" action="/register" method="POST">
                    @csrf
                    <div>
                        <label for="name">お名前</label>
                        <input type="text" name="name" placeholder="例: 山田 太郎">
                    </div>
                    <p>
                        @error('name')
                        {{ $message }}
                        @enderror
                    </p>
                    <div>
                        <label for="email">メールアドレス</label>
                        <input type="email" name="email" placeholder="例: test@example.com">
                    </div>
                    <p>
                        @error('email')
                        {{ $message }}
                        @enderror
                    </p>
                    <div>
                        <label for="password">パスワード</label>
                        <input type="password" name="password" placeholder="例: coachtech1106">
                    </div>
                    <p>
                        @error('password')
                        {{ $message }}
                        @enderror
                    </p>

                    <button type="submit">登録</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>