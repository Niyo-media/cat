<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RP FYP Dashboard</title>

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>

    <div class="sidebar">
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="/project_view">Projects</a></li>
            <li><a href="#">Proposals</a></li>
            <li><a href="#">Supervisors</a></li>
            <li><a href="#">Students</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="/">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div class="dashboard-header">
            <h1>Welcome to the RP FYP Dashboard</h1>
        </div>

        <div class="dashboard-section">
            <h2>Recent Projects</h2>
            <ul class="project-list">
                <li><a href="#">Project 1: Smart Irrigation System</a></li>
                <li><a href="#">Project 2: Mobile App for Local Market</a></li>
                <li><a href="#">Project 3: AI-Powered Crop Disease Detection</a></li>
                <li><a href="#">Project 4: Online Learning Platform</a></li>
            </ul>
        </div>

        <div class="dashboard-section">
            <h2>Pending Proposals</h2>
            <ul class="project-list">
                <li><a href="#">Proposal 1: E-Voting System</a></li>
                <li><a href="#">Proposal 2: Waste Management App</a></li>
            </ul>
        </div>

        <div class="dashboard-section">
          <h2>Supervisor Interactions</h2>
          <p>Here you can see messages and interactions with your supervisor.</p>
        </div>
    </div>

</body>
</html>