<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test-form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize/css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__title">FashionablyLate</h1>
            <nav>
                <ul class="header-nav">
                    <li class="header-nav__item">
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="header-nav__link">logout</button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <form action="/admin" method="get">
            @csrf

        </form>
    </main>
</body>

</html>