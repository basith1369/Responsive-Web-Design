<?php
session_start();
if (!isset($_SESSION['user_id'])) { header("Location: login.php"); exit(); }
if (empty($_SESSION['__regen'])) { session_regenerate_id(true); $_SESSION['__regen'] = true; }
$welcome = isset($_GET['welcome']) && $_GET['welcome'] === '1';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard — ApexPlanet</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="site-header">
    <h1>Apex<span>Planet</span></h1>
    <nav class="nav-right" aria-label="Main navigation">
        <span class="user-pill">👤 <?= htmlspecialchars($_SESSION['user_name']) ?></span>
        <a href="manage_users.php" class="btn btn-outline">Manage Users</a>
        <a href="logout.php"       class="btn btn-accent">Logout</a>
    </nav>
</header>

<div class="container">

    <?php if ($welcome): ?>
    <div class="alert alert-success" id="welcomeAlert" role="status">
        <span>✅ Welcome back, <strong><?= htmlspecialchars($_SESSION['user_name']) ?></strong>! You are now logged in.</span>
        <button class="alert-close" aria-label="Dismiss" onclick="document.getElementById('welcomeAlert').remove()">✕</button>
    </div>
    <?php endif; ?>

    <div class="welcome-card">
        <div class="welcome-avatar" aria-hidden="true">👤</div>
        <div class="welcome-text">
            <h2>Hello, <?= htmlspecialchars($_SESSION['user_name']) ?>!</h2>
            <p>You are logged in to the ApexPlanet Internship Portal.</p>
        </div>
    </div>

    <div class="info-grid">
        <div class="info-card">
            <div class="ic-icon">✉️</div>
            <div class="ic-label">Email Address</div>
            <div class="ic-value"><?= htmlspecialchars($_SESSION['user_email']) ?></div>
        </div>
        <div class="info-card">
            <div class="ic-icon">🆔</div>
            <div class="ic-label">User ID</div>
            <div class="ic-value">#<?= htmlspecialchars($_SESSION['user_id']) ?></div>
        </div>
        <div class="info-card">
            <div class="ic-icon">🔐</div>
            <div class="ic-label">Session Status</div>
            <div class="ic-value" style="color:var(--clr-success)">Active ✅</div>
        </div>
        <div class="info-card">
            <div class="ic-icon">🎓</div>
            <div class="ic-label">Internship</div>
            <div class="ic-value">Web Dev — PHP & MySQL</div>
        </div>
    </div>
</div>

<script>
document.querySelectorAll('.alert').forEach(function(el){
    setTimeout(function(){el.classList.add('fade-out');setTimeout(function(){el.remove();},450);},4000);
});
</script>
</body>
</html>
