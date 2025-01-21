@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection


@section('content')

        <div class="confirm_content">
            <div class="confirm__heading">
                <h2 class="contact-form__logo">Confirm</h2>
            </div>
            <form class="form" action="/thanks" method="post">
                @csrf
                <div class="confirm-table">
                    <table class="confirm-table__inner">
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お名前</th>
                            <td class="confirm-table__text">
                                <input type="text" name="name" id="name" value="{{ $contact['name'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">性別</th>
                            <td class="confirm-table__text">
                                <input type="text" name="gender" id="gender" value="{{ $contact['gender'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">メールアドレス
                            </th>
                            <td class="confirm-table__text">
                                <input type="email" name="email" id="email" value="{{ $contact['email'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">電話番号
                            </th>
                            <td class="confirm-table__text">
                                <input type="text" name="tel" id="tel" value="{{ $contact['tel'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">住所
                            </th>
                            <td class="confirm-table__text">
                                <input type="text" name="address" id="address" value="{{ $contact['address'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">建物名
                            </th>
                            <td class="confirm-table__text">
                                <input type="text" name="building" id="building" value="{{ $contact['building'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合せの種類
                            </th>
                            <td class="confirm-table__text">
                                <input type="text" name="category" id="category" value="{{ $contact['category'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合せ内容
                            </th>
                            <td class="confirm-table__text">
                                <input type="text" name="detail" id="detail" value="{{ $contact['detail'] }}" readonly />
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="form__actions">
                    <div class="send-from">
                        <button class="send-form__button" type="submit" name="send">送る</button>
                    </div>
                    <div class="correct-form">
                        <button class="back-form__button" type="submit" name="back">修正</button>
                    </div>
                </div>
            </form>
        </div>
@endsection