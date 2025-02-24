<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - FYP Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            color: #333;
        }

        .header {
            background-color:rgb(8, 156, 104);
            color: white;
            padding: 20px;
            text-align: center;
        }

        .header h2 {
            margin: 0;
            font-size: 2rem;
        }

        /* Navigation Bar */
        .top-right-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #fff;
        }

        .logo-container img {
            height: 50px;
            width: auto;
        }

        .logout-container a {
            text-decoration: none;
            color: #003366;
            margin-left: 20px;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .logout-container a:hover {
            color: #cc2936;
        }

        /* Dashboard Title */
        h1 {
            text-align: center;
            color: #003366;
            margin: 30px 0;
            font-size: 2rem;
        }

        /* Student Profile */
        .student-profile {
            text-align: center;
            margin-bottom: 40px;
        }

        .student-profile p {
            font-size: 1.2rem;
            margin: 10px 0;
        }

        /* Project List Section */
        .project-list {
            margin: 0 20px;
        }

        .project-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
            transition: transform 0.3s, box-shadow 0.3s ease-in-out;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .project-card h3 {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: #003366;
        }

        .project-card a {
            text-decoration: none;
            background-color: #003366;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            margin-top: 10px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .project-card a:hover {
            background-color: #002244;
        }

        /* Footer Styling */
        footer {
            background-color:rgb(8, 156, 104);
            color: white;
            text-align: center;
            padding: 0px 0;
            margin-top: 125px;
        }

        footer p {
            margin: 5px 0;
            font-size: 0.9rem;
        }

        footer a {
            color: #ffcc00;
            text-decoration: none;
            font-weight: bold;
            margin: 0 5px;
        }

        footer a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
<div style="80vh">

    <!-- Header Section -->
    <div class="header">
        <h2>Welcome to FYP Portal</h2>
    </div>

    <!-- Navigation Bar Section -->
    <div class="top-right-container">
        <div class="logo-container">
            <img src="22RP08068/logo.jpg" alt="Logo">
        </div>
        <div class="logout-container">
            <a href="logout">Logout</a>
        </div>
    </div>
    @include("sidebar")

    <!-- Student Profile Section -->
    <div class="student-profile">
        <h1>Student Dashboard</h1>
        <p>Student Name: John Doe</p>
        <p>Registration Number: 22RP08068</p>
        <p>Email: johndoe@example.com</p>
    </div>

    <!-- Project List Section -->
    <div class="project-list">
        <div class="project-card">
            <h3>Project 1: Smart Water Management System</h3>
            <p>This project aims to create a system that monitors and manages water usage in real-time.</p>
            <a href="project_view">View Project</a>
        </div>

        

    </div>
    </div>
    </div>
    

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 RP FYP | All rights reserved</p>
        <p>
            <strong>Contact Us:</strong><br>
            Email: <a href="mailto:rp@gmail.com">rp@gmail.com</a><br>
            Website: <a href="https://www.rp.ac.rw" target="_blank">www.rp.ac.rw</a><br>
            Address: Kicukiro, Rwanda
        </p>
    </footer>

</body>
</html>
