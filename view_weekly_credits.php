<?php
include 'db.php';

$weeklyCredits = $user->getWeeklyCredits();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weekly Credits</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Weekly Credits Added</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Week Start Date</th>
                    <th>Week End Date</th>
                    <th>Total Credits Added</th>
                    <th>User Count</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $weeklyCredits->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['week_start_date']); ?></td>
                        <td><?php echo htmlspecialchars($row['week_end_date']); ?></td>
                        <td><?php echo htmlspecialchars($row['total_credits_added']); ?></td>
                        <td><?php echo htmlspecialchars($row['user_count']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-secondary">Back to Credit Loading</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
