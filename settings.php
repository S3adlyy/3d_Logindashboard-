<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashbourd.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <h2>Admin Panel</h2>
            <ul>
                <li><a href="file.php">Dashboard</a></li>
                <li><a href="#">Users</a></li>
                <li><a href="settings.php">Settings</a></li>
                <li><a href="#">Statistics</a></li>
                <li><a href="index.php">Logout</a></li>
            </ul>
        </aside>
        
        <main class="main-content">
            <header>
                <h1>Welcome to Lwes Dashboard!</h1>
                <p>You have successfully logged in.</p>
            </header>
            <section class="statistics">
                <h2>Statistics Overview</h2>
                <div class="card">
                    <h3>Total Users</h3>
                    <p>1,234</p>
                </div>
                <div class="card">
                    <h3>Total Revenue</h3>
                    <p>$12,345</p>
                </div>
                <div class="card">
                    <h3>New Signups</h3>
                    <p>56</p>
                </div>
            </section>

            <section class="cool-form">
                <h2>Update Your Information</h2>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">New Password:</label>
                        <input type="password" id="password" name="password">
                    </div>
                    <input type="submit" value="Save Changes" class="btn">
                </form>
            </section>
        </main>
    </div>
</body>
</html>
