@extends('layouts.app')

@section('title')
    商品出品
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-8 offset-2 bg-white">

                <div class="font-weight-bold text-center border-bottom pb-3 pt-3" style="font-size: 24px;">商品を出品する</div>

                <form action="{{ route('sell') }}" class="p-5" enctype="multipart/form-data" method="post">
                    @csrf

                    <div>商品画像</div>
                    <span class="item-image-form image-picker">
                        <input type="file" name="item-image" class="d-none" accept="image/png,image/jpeg,image/gif" id="item-image">
                        <label for="item-image" class="d-inline-block" role="button">
                            <img src="/images/item-image-default.png" style="object-fit: cover; width: 300px; height: 300px;">
                        </label>
                    </span>
                    @error('item-image')
                        <div style="color: #4342E;" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror

                    <div class="form-group mt-3">
                        <label for="name">商品名</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="description">商品の説明</label>
                        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" required autocomplete="description" autofocus>{{ old('description') }}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="category">カテゴリー</label>
                        <select name="category" class="custom-select form-control @error('category') is-invalid @enderror">
                            @foreach ($categories as $category)
                                <optgroup label="{{ $category->name }}">
                                    @foreach ($category->secondaryCategories as $secondary)
                                        <option value="{{ $secondary->id }}" {{ old('category') == $secondary->id ? 'selected' : '' }}>
                                            {{ $secondary->name }}
                                        </option>
                                    @endforeach
                                </optgroup>
                            @endforeach
                        </select>
                        @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="condition">商品の状態</label>
                        <select name="condition" class="custom-select form-control @error('condition') is-invalid @enderror">
                            @foreach ($conditions as $condition)
                                <option value="{{ $condition->id }}" {{ old('condition') == $condition->id ? 'selected' : '' }}>
                                    {{ $condition->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('condition')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="price">販売価格</label>
                        <input type="number" name="price" id="price" class="form-control @error('price') is-invaled @enderror" value="{{ old('price') }}" required autocomplete="price" autofocus>
                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-0 mt3">
                        <button type="submit" class="btn btn-block btn-secondary">
                            出品する
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
