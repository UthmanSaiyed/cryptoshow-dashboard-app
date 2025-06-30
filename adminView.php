<!-- HTML code for admin view -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <h1>Admin Panel - CryptoShow Events</h1>
    <form action="admin.php" method="post">
        <input type="text" name="name" placeholder="Event Name" required>
        <input type="date" name="date" required>
        <input type="text" name="venue" placeholder="Event Venue" required>
        <button type="submit" name="addEvent">Add Event</button>
    </form>
    <h2>All Events</h2>
    <ul>
        <?php foreach ($events as $event): ?>
            <li><?= $event->event_name ?> (<?= $event->event_date ?>) - <?= $event->event_venue ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

