<?php require_once 'header.php'; ?>

<?php 
require_once 'controllers/ProfileController.php';
$profileController = new ProfileController();
// call the showProfile method to fetch user details
$userDetails = $profileController->showProfile();

// get user details
$userNickname = $userDetails['userNickname'];
$userName = $userDetails['userName'];
$userEmail = $userDetails['userEmail'];
$userDeviceCount = $userDetails['userDeviceCount'];
$userDevices = $userDetails['userDevices']
?>
    
<div class="content">
    <div class="profile-card">
        <h2>User Profile</h2>
        <div class="profile-info">
            <p><strong>Nickname:</stron g> <?php echo $userNickname; ?></p>
            <p><strong>Name:</strong> <?php echo $userName; ?></p>
            <p><strong>Email:</strong> <?php echo $userEmail; ?></p>
            <p><strong>Device Count:</strong> <?php echo $userDeviceCount; ?></p>
            <!-- Add an edit profile button -->
            <a href="edit_profile.php">Edit Profile</a>
            
        </div>
    </div>
</div>

<!-- Add a form to create a new device -->
<form action="create_device.php" method="post">
    <input type="text" name="device_name" placeholder="Device Name">
    <input type="submit" value="Add Device">
</form>

<!-- Display the list of devices -->
<h3>My Devices</h3>
<ul>
    <?php foreach ($userDevices as $device) : ?>
        <li><?php echo $device->crypto_device_name; ?></li>
    <?php endforeach; ?>
</ul>

    

<?php require_once 'footer.php'; ?>


