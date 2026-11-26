
<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
</head>
<body>

    <h1>Edit Course</h1>

    <form action="/courses/{{ $course->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Course Name:</label>
        <input type="text" name="name" value="{{ old('name', $course->name) }}">
        @error('name')
            <p>{{ $message }}</p>
        @enderror
        <br><br>

        <label>Description:</label>
        <textarea name="description">{{ old('description', $course->description) }}</textarea>
        @error('description')
            <p>{{ $message }}</p>
        @enderror
        <br><br>

        <label>Duration (Weeks):</label>
        <input type="number" name="duration" value="{{ old('duration', $course->duration) }}">
        @error('duration')
            <p>{{ $message }}</p>
        @enderror
        <br><br>

        <label>Fee:</label>
        <input type="number" step="0.01" name="fee" value="{{ old('fee', $course->fee) }}">
        @error('fee')
            <p>{{ $message }}</p>
        @enderror
        <br><br>

        <label>Difficulty:</label>
        <select name="difficulty">
            <option value="Easy" {{ old('difficulty', $course->difficulty) == 'Easy' ? 'selected' : '' }}>Easy</option>
            <option value="Medium" {{ old('difficulty', $course->difficulty) == 'Medium' ? 'selected' : '' }}>Medium</option>
            <option value="Hard" {{ old('difficulty', $course->difficulty) == 'Hard' ? 'selected' : '' }}>Hard</option>
        </select>
        @error('difficulty')
            <p>{{ $message }}</p>
        @enderror
        <br><br>

        <label>Active:</label>
        <input type="checkbox" name="is_active" value="1"
            {{ old('is_active', $course->is_active) ? 'checked' : '' }}>
        <br><br>

        <button type="submit">Update Course</button>
    </form>

    <br>
    <a href="/courses">Back to Courses</a>

</body>
</html>
