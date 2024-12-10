<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test-form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__title">FashionablyLate</h1>
            <nav>
                <ul class="header-nav">
                    <li class="header-nav__item">
                        <a class="header-nav__link" href="/register">register</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2 class="contact-form__logo">Login</h2>
            </div>

            <form class="form" action="/login" method="post">
                @csrf
              <div class="form__group">
               <div class="form__group-title">
                 <span class="form__label--item">メールアドレス</span>
               </div>
               <div class="form__group-content">
                <div class="form__input--text">
                  <input type="email" name="email"  placeholder="例:test@example.com" value="{{ old('email') }}" />
                </div>
               </div>
               <div class="form__error">
                   @error('email')
                   {{ $message }}
                   @enderror
               </div>
              </div>
              <div class="form__group">
                <div class="form__group-title">
                  <span class="form__label--item">パスワード</span>
              </div>
              <div class="form__group-content">
                <div class="form__input--text">
                  <input type="password" name="password" placeholder="例:coachtech1106"/>
                </div>
                <div class="form__error">
                   @error('password')
                   {{ $message }}
                   @enderror
                </div>
              </div>
            </form>
    </main>
    
</body>
</html>