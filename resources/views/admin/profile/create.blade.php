{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')

{{-- profile.blade.phpの@yield('title')に'プロフィール作成画面'を埋め込む --}}
@section('title','プロフィール作成画面')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
     <div class="container">
         <div class="row">
             <div class="col-md-8 mx-auto">
                 <h2>My プロフィール</h2>
                 <form action="{{ action('Admin\ProfileController@edit') }}" method="post" enctype="multipart/form-data">
                     
                    @if (count($errors) > 0)
                         <ul>
                            @foreach($errors->all() as $e) 
                                 <li>{{ $e }}</li>
                            @endforeach     
                         </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">氏名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">性別</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">趣味</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}"> 
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">自己紹介欄</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="introduction" value="{{ old('introduction') }}">
                        </div>    
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                 </form>
             </div>
         </div>
     </div>
@endsection     