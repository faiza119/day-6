<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Us</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/submit-form">
        @csrf
        Name: <input type="text" name="name" value="{{ old('name') }}"><br><br>
        Email: <input type="email" name="email" value="{{ old('email') }}"><br><br>
        Message:<br>
        <textarea name="message">{{ old('message') }}</textarea><br><br>
        <button type="submit">Send</button>
    </form>
</body>
</html>
@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/submit-form">
    @csrf

    Name: <input type="text" name="name" value="{{ old('name') }}"><br><br>
    Email: <input type="email" name="email" value="{{ old('email') }}"><br><br>
    Message:<br>
    <textarea name="message">{{ old('message') }}"></textarea><br><br>

    <button type="submit">Send</button>
</form>
