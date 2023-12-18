<?php
require_once "core/init.php";

if (!loggedIn()) {
    Redirect::to('login.php');
}

$profileId = null;
if (Input::exists('GET') && isset($_GET['username'])) {
    $username = escape($_GET['username']);
    $profileId = $LoadFromUser->userIdByUsername($username);
} else {
    $profileId = $_SESSION['user_id'] ?? null; // Use the null coalescing operator as a fallback
}

if (!$profileId) {
    Redirect::to(url_for('404'));
    exit(); // Make sure to stop script execution after a redirect
}

$user = $LoadFromUser->getUserDataFromSession();
$profileData = $LoadFromUser->getUserDataFromURL($profileId);

// Verify that $profileData is not false before attempting to access its properties
if ($profileData !== false) {
    $title = $profileData->fullName . ' (@' . $profileData->username . ') / Instagram';
    $keywords = "{$profileData->username},{$profileData->fullName},Seek, Share and capture world's moments";
    require "shared/header.php";
    ?>
    <div class="profile-user-id" data-userid="<?php echo $user->user_id ?>" data-profileid="<?php echo $profileId; ?>"></div>
    <?php require_once "shared/global.header.php"; ?>
    <main class="profileContainer">
        <div class="profile__header">
            <img class="profile__thumbnail" src="<?php echo url_for($profileData->profileImage); ?>" alt="Photo of <?php echo $profileData->fullName; ?>">
            <div class="profile__stats">
                <div class="profile__headline">
                    <?php echo $profileData->fullName; ?>
                </div>
                <div class="profile__details">
                    <p><span id="user__post" class="bold"><?php echo $LoadFromPost->postCount($profileData->user_id); ?></span> posts</p>
                    <p><span id="user__followers" class="bold"><?php echo $LoadFromFollow->getFollowers($profileData->user_id); ?></span> followers</p>
                    <p><span id="user__following" class="bold"><?php echo $LoadFromFollow->getFollowings($profileData->user_id); ?></span> following</p>
                </div>
            </div>
        </div>
        <div class="profile__posts">
            <?= $LoadFromPost->profilePosts($profileData->user_id); ?>
        </div>
    </main>
    <?php
} else {
    // Handle the case when $profileData is false
    // For example, redirect to an error page or display a message
    Redirect::to(url_for('errorPage.php')); // Replace 'errorPage.php' with your actual error page URL
    exit(); // Stop script execution after a redirect
}
?>
