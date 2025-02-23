



<style>/* Sidebar Styling */
.sidebar {
    width: 250px;
    height: 100vh;
    background-color:rgb(192, 184, 94);
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

/* Add spacing for the main content */
body {
    margin-left: 250px; /* Make room for the sidebar */
    font-family: 'Arial', sans-serif;
}

/* Responsive Design for Mobile */
@media (max-width: 768px) {
    .sidebar {
        width: 200px;
    }

    body {
        margin-left: 200px;
    }
}

@media (max-width: 480px) {
    .sidebar {
        width: 150px;
    }

    body {
        margin-left: 150px;
    }
}
</style>
    
        <div class="sidebar">
        <ul>
            <li><a href="student_dashboard">Dashboard</a></li>
            <li><a href="project_view">Projects</a></li>
            <li><a href="product_form">Proposals</a></li>
            <li><a href="supervisor">supervisor</a></li>
          
            
        </ul>
    </div>
        