<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>App</title>
    <link rel="stylesheet" href="form.css">
    <script src="form.js"></script>
</head>
<body>
<form action="" method="post" class="add-user-form">
    <div class="input-field">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="input-field">
        <label for="name">Your first and last name</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div class="input-field">
        <label for="gender">Gender</label>
        <select id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>
    <div class="input-field">
        <label for="status">Status</label>
        <select id="status" name="status">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
    </div>
    <button type="submit">Send</button>
</form>
</body>
</html>

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    print_r($_POST);
}
?>