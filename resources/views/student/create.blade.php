
<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
</head>
<body>

    <h1>Create Student</h1>

    <form action="/students" method="POST">
        @csrf

        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <p>{{ $message }}</p>
        @enderror
        <br><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email')
            <p>{{ $message }}</p>
        @enderror
        <br><br>

        <label>Phone:</label>
        <input type="text" name="phone" value="{{ old('phone') }}">
        @error('phone')
            <p>{{ $message }}</p>
        @enderror
        <br><br>

        <label>Address:</label>
        <textarea name="address">{{ old('address') }}</textarea>
        @error('address')
            <p>{{ $message }}</p>
        @enderror
        <br><br>

        <label>Date of Birth:</label>
        <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}">
        @error('date_of_birth')
            <p>{{ $message }}</p>
        @enderror
        <br><br>

        <button type="submit">Save Student</button>
    </form>

    <br>
    <a href="/students">Back to Students</a>

</body>
</html>
