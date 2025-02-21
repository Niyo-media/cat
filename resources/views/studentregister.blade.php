<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <style>
        /* Basic styles for form */
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .container { width: 50%; margin: 50px auto; padding: 20px; background-color: white; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
        h2 { text-align: center; margin-bottom: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; font-weight: bold; margin-bottom: 5px; }
        input, select { width: 100%; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
        button:hover { background-color: #45a049; }
        .form-group input:focus, .form-group select:focus { border-color: #4CAF50; outline: none; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Registration</h2>
        <form action="" method="">
            @csrf
            <div class="form-group">
                <label for="StudentRegNumber">Registration Number</label>
                <input type="text" id="StudentRegNumber" name="StudentRegNumber" required>
            </div>
            <div class="form-group">
                <label for="StudentFirstName">First Name</label>
                <input type="text" id="StudentFirstName" name="StudentFirstName" required>
            </div>
            <div class="form-group">
                <label for="StudentLastName">Last Name</label>
                <input type="text" id="StudentLastName" name="StudentLastName" required>
            </div>
            <div class="form-group">
                <label for="StudentGender">Gender</label>
                <select id="StudentGender" name="StudentGender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="StudentEmail">Email Address</label>
                <input type="email" id="StudentEmail" name="StudentEmail" required>
            </div>
            <div class="form-group">
                <label for="StudentPhoneNumber">Phone Number</label>
                <input type="text" id="StudentPhoneNumber" name="StudentPhoneNumber" required>
            </div>
            <div class="form-group">
                <label for="StudentPassword">StudentPassword</label>
                <input type="password" id="StudentPassword" name="StudentPassword" required>
            </div>
            <button type="submit" onclick="window.location.href='/';">Register</button>
        </form>
    </div>
</body>
</html>
