<?php 
    include_once 'header.php';
    include_once './helpers/session_helper.php';
?>

<div class="content events-container">
    <h1 class="header events-header">Events</h1>

    <!-- flash messages -->
    <?php flash('success'); ?>
    <?php flash('error'); ?>

    <!-- display the form to create a new event only for admin users -->
    <?php if (isset($_SESSION['usersId']) && $_SESSION['usersId'] === '3') : ?>
        <div class="admin-event-form">
            <h2 class="admin-event-title">Create New Event</h2>
            <form method="post" action="./controllers/EventsController.php">
                <input type="hidden" name="type" value="create">
                
                <label for="event_name">Event Name:</label>
                <input type="text" id="event_name" name="event_name"  required>
               
                <label for="event_date">Event Date:</label>
                <input type="date" id="event_date" name="event_date" required>
                
                <label for="event_venue">Event Venue:</label>
                <input type="text" id="event_venue" name="event_venue" required>
                
                <button type="submit" name="submit">Create Event</button>
            </form>
        </div>
    <?php endif; ?>

    <!-- display existing events -->

    <!--$events is an array of event objects retrieved from the controller-->
    <?php if (!empty($events)) : ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Event Name</th>
                    <th>Event Date</th>
                    <th>Event Venue</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($events as $event) : ?>
                    <tr>
                        <td><?php echo $event->event_name; ?></td>
                        <td><?php echo $event->event_date; ?></td>
                        <td><?php echo $event->event_venue; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>No events found.</p>
    <?php endif; ?>
    
</div>

<?php 
    include_once 'footer.php'
?>
