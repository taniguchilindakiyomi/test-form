@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection


@section('content')

        <div class="thanks__content">
            <div class="thanks__back-logo">
                Thank you
            </div>
            <div class="thanks__heading">
                <h2>お問い合わせありがとうございました</h2>
            </div>
      <form class="form" action="/" method="get">
            <div class="form__button">
                <button class="form__button-submit">HOME</button>
            </div>
        </div>
      </form>
@endsection