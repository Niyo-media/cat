<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Submission</title>
    <style>
        /* Basic styles for form */
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .container { width: 60%; margin: 50px auto; padding: 20px; background-color: white; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
        h2 { text-align: center; margin-bottom: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; font-weight: bold; margin-bottom: 5px; }
        input, textarea { width: 100%; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
        button:hover { background-color: #45a049; }
        .form-group input:focus, .form-group textarea:focus { border-color: #4CAF50; outline: none; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Submit Your Project Proposal</h2>
        <form action="" method="" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="ProjectName">Project Name</label>
                <input type="text" id="ProjectName" name="ProjectName" required>
            </div>
            <div class="form-group">
                <label for="ProjectProblem">Project Problem</label>
                <textarea id="ProjectProblem" name="ProjectProblem" required></textarea>
            </div>
            <div class="form-group">
                <label for="ProjectSolution">Project Solution</label>
                <textarea id="ProjectSolution" name="ProjectSolution" required></textarea>
            </div>
            <div class="form-group">
                <label for="ProjectAbstract">Project Abstract</label>
                <textarea id="ProjectAbstract" name="ProjectAbstract" required></textarea>
            </div>
            <div class="form-group">
                <label for="ProjectDissertation"> Dissertation</label>
                <input type="file" id="ProjectDissertation" name="ProjectDissertation" required>
            </div>
            <div class="form-group">
                <label for="ProjectSourceCodes"> Source Code</label>
                <input type="file" id="ProjectSourceCodes" name="ProjectSourceCodes" required>
            </div>
            <div class="form-group">
                <label for="DepartmentName">Department Name</label>
               <select>
                <option value="ICT">ICT</option>
                <option value="EEE">EEE</option>
                <option value="HM">HM</option>
                <option value="AG">AG</option>
                <option value="CIVIL">CIVIL</option>
               </select>
            </div>
            <button type="submit" onclick="window.location.href='/dashboard';">Submit Proposal</button>
        </form>
    </div>
</body>
</html>
