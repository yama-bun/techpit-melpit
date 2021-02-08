@extends('layouts.app_only_content')

@section('title')
    パスワードリセットリグエスト
@endsection

@section('content')
    <div class="container">
        <div class="card" style="width: 500px;">
            <div class="card-body">
                <div class="font-weight-bold text-center border-bottom pb-3" style="font-size: 24px;">パスワードをお忘れの方</div>

                <form action="{{ route('password.email') }}" class="p-5" method="post">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        @csrf


                        <div class="form-group">
                            <label for="email">メールアドレス</label>
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="melpit@example.com">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-block btn-secondary">
                                送信
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
