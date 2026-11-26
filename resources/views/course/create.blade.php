
<!DOCTYPE html>
<html>
<head>
    <title>Create Course</title>
</head>
<body>

    <h1>Create Course</h1>

    <form action="/courses" method="POST">
        @csrf

        <label>Course Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <p>{{ $message }}</p>
        @enderror
        <br><br>

        <label>Description:</label>
        <textarea name="description">{{ old('description') }}</textarea>
        @error('description')
            <p>{{ $message }}</p>
        @enderror
        <br><br>

        <label>Duration (Weeks):</label>
        <input type="number" name="duration" value="{{ old('duration') }}">
        @error('duration')
            <p>{{ $message }}</p>
        @enderror
        <br><br>

        <label>Fee:</label>
        <input type="number" step="0.01" name="fee" value="{{ old('fee') }}">
        @error('fee')
            <p>{{ $message }}</p>
        @enderror
        <br><br>

        <label>Difficulty:</label>
        <select name="difficulty">
            <option value="">Select Difficulty</option>
            <option value="Easy">Easy</option>
            <option value="Medium">Medium</option>
            <option value="Hard">Hard</option>
        </select>
        @error('difficulty')
            <p>{{ $message }}</p>
        @enderror
        <br><br>

        <label>Active:</label>
        <input type="checkbox" name="is_active" value="1" checked>
        <br><br>

        <button type="submit">Save Course</button>
    </form>

    <br>
    <a href="/courses">Back to Courses</a>

</body>
</html>
