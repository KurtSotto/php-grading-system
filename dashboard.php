<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php 
        include'sidebar.php';
    ?>
    
    <h3 style="z-index: 200; border-bottom: 1px solid rgb(24, 49, 83);" class="pb-3 text-dark">Home</h3>
    
    <div class="mt-5 d-flex gap-3 align-items-center">
        <div class=" rounded d-flex flex-row justify-content-center align-items-center" style="height: 90px; width: 100px; background-color: var(--blue);">
            <i class="fa-solid fa-user-group fa-2x" style="color: #ffffff;"></i>
        </div>
        <div>
            <p class="m-0">Total students</p>
            <strong>0</strong>
        </div>
    </div>
</body>
</html>