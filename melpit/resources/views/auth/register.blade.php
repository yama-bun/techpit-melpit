@extends('layouts.app_only_content')

@section('title')
    会員登録
@endsection

@section('content')
<div class="container">
    <div class="card" style="width:500px;">
        <div class="card-body">
            <div class="font-weight-bold text-center border-bottom -b-3" style="font-size: 24px;">会員登録</div>

            <form action="{{ route('register') }}" method="post" class="p-5">
                @csrf

                <div class="form-group">
                    <label for="name">ニックネーム</label>
                    <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="メルピット太郎">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" required autocomplete="email" value="{{ old('email') }}" placeholder="melpit@example.com">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required autocomplete="new-password" placeholder="password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-secondary">
                        会員登録
                    </button>
                </div>

                <div>
                    アカウントをお持ちの方は<a href="{{ route('login') }}">こちら</a>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
