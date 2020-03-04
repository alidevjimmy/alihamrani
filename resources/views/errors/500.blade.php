@extends('errors.main')
@section('content')
    <div class="container">
        <h1 align="center">می دونید اررور <span class="red-color">500</span> چیه؟</h1>
        <h3 align="center">نه؟!</h3>
        <h6 align="center">پس بزارید توضیح بدم.</h6>
        <p style="text-align: center"><b>این اررور زمانی نمایش داده میشه که وبسایت مشکل فنی داشته باشه!</b></p>
        <p style="text-align: center"><b>اگر با این صفحه مواجه شدید حتما به <a href="tel:09384720059" class="alicopy">من</a> خبر بدید!!!</b></p>
        <div class="row">
            <div style="margin: auto">
                <a href="{{ route('index') }}" class="btn my-skills float-right" type="submit">بریم صفحه اصلی!</a>
            </div>
        </div>
    </div>
@endsection
