<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supervisor Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            color: #333;
        }

        /* Header Styling */
        .header {
            background-color: #003366;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .header h2 {
            margin: 0;
            font-size: 2rem;
        }

        /* Sidebar Styling */
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #003366;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            padding: 15px;
            text-align: center;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: block;
            font-size: 1.2rem;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .sidebar ul li a:hover {
            background-color: #0055a5;
        }

        /* Main Content */
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        /* Dashboard Cards */
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .dashboard-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s ease-in-out;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .dashboard-card h3 {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: #003366;
        }

        .dashboard-card a {
            text-decoration: none;
            background-color: #003366;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            margin-top: 10px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .dashboard-card a:hover {
            background-color: #002244;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .main-content {
                margin-left: 200px;
            }

            .dashboard-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .sidebar {
                width: 150px;
            }

            .main-content {
                margin-left: 150px;
            }

            .dashboard-grid {
                grid-template-columns: 1fr;
            }
        }

    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <h2>Supervisor Dashboard</h2>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Assigned Projects</a></li>
            <li><a href="#">Project Approvals</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="/">Logout</a></li>
        </ul>
    </div>

    <!-- Main Content Area -->
    <div class="main-content">
        <h1>Welcome, Supervisor!</h1>
        <p>Manage your assigned students and projects efficiently.</p>

        <!-- Dashboard Grid -->
        <div class="dashboard-grid">
            <!-- Assigned Projects Card -->
            <div class="dashboard-card">
                <i class="fas fa-project-diagram"></i>
                <h3>Assigned Projects</h3>
                <a href="#">View Assigned Projects</a>
            </div>

            <!-- Project Approvals Card -->
            <div class="dashboard-card">
                <i class="fas fa-check-circle"></i>
                <h3>Project Approvals</h3>
                <a href="#">Approve Projects</a>
            </div>

            <!-- Profile Card -->
            <div class="dashboard-card">
                <i class="fas fa-user"></i>
                <h3>Profile</h3>
                <a href="#">Edit Profile</a>
            </div>
        </div>
    </div>

</body>
</html>
