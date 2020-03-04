@extends('errors.main')
@section('content')
    <div class="container">
        <h1 align="center">می دونید اررور <span class="red-color">404</span> چیه؟</h1>
        <h3 align="center">نه؟!</h3>
        <h6 align="center">پس بزارید توضیح بدم.</h6>
        <p style="text-align: center"><b>این اررور زمانی نمایش داده میشه که صفحه مورد نظرتون پیدا نشه!</b></p>
        <div class="row">
            <div style="margin: auto">
                <a href="{{ route('index') }}" class="btn my-skills float-right" type="submit">بریم صفحه اصلی!</a>
            </div>
        </div>
    </div>
@endsection
