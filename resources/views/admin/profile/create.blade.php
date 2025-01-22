@extends('layouts.admin')

@section('title',"MyProfile")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>My プロフィール</h2>
                {{-- admin.profile.createにPOSTでデータを送信 --}}
                <form action="{{ route('admin.profile.create') }}" method="post" enctype="multipart/form-data">
                {{-- エラーをリスト表示 --}}
                @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="form-group row">
                        <label class="col-md-2" style="font-size: 18px;">氏名</label>
                        <div class="col-md-5">
                        <textarea class="form-control custom-textarea" name="name" rows="1">{{ old('name') }}</textarea>
                        </div>
                    </div>


                    {{-- 性別のラジオボタン--}}

                    <div class="form-group" style="font-size: 18px;" >
    <label>性別</label>
    <div class="form-check form-check-inline" style="margin-left: 100px;" >
        <input class="form-check-input" type="radio" name="gender" value="male" id="male" {{ old('gender') == 'male' ? 'checked' : '' }}>
        <label class="form-check-label" for="male" style="font-size: 15px;">
            男性
        </label>
    </div>
    <div class="form-check form-check-inline" style="margin-left: 15px;">
        <input class="form-check-input" type="radio" name="gender" value="female" id="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
        <label class="form-check-label" for="female" style="font-size: 15px;" >
            女性
        </label>
    </div>
</div>



                    <div class="form-group row">
                        <label class="col-md-2" style="font-size: 18px;">趣味</label>
                        <div class="col-md-10">
                        <textarea class="form-control custom-textarea" name="hobby" rows="1">{{ old('hobby') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" style="font-size: 18px;" >自己紹介欄</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="20">{{ old('introduction') }}</textarea>
                        </div>
                    </div>



                   @csrf
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
             </div>   
        </div>
    </div>  
@endsection