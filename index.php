<?php 
    session_start();
    include'connection.php';
    
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        header('Location: dashboard.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benedicto College</title>
    <link rel="icon" href="./images/bcimage1.png">
    <link rel="stylesheet" href="./styling/style.css">
    
</head>
<body>
    <?php 
        include'./bootstrap.html';
    ?>
    <main class="p-5 d-flex flex-column align-items-center">
        <img class="mb-3" src="./images/bcimage1.png" alt="" style="width: 150px;">
        <h4 class="mb-3" style="color: white;">ACCOUNT LOGIN</h4>
        <form action="" method="post" class="w-75" style="max-width: 400px;">
            <div class="input-group mb-3 d-flex flex-column">
                <div class="d-flex">
                    <span class="input-group-text" style="border-top-right-radius: 0; border-bottom-right-radius: 0;">
                        <i class="fa-solid fa-user" style="color: #0337af;"></i>
                    </span>
                    <input type="text" class="form-control" style="border-top-left-radius: 0; border-bottom-left-radius: 0;" placeholder="USERNAME" name="username">
                </div>
                <strong class="fs-6 text-danger m-0"></strong>
            </div>

            <div class="input-group mb-3 d-flex flex-column">
                <div class="d-flex">
                    <span class="input-group-text" style="border-top-right-radius: 0; border-bottom-right-radius: 0;">
                        <i class="fa-solid fa-lock" style="color: #0337af;"></i>
                    </span>
                    <input type="password" class="form-control" placeholder="PASSWORD" name="password" style="border-top-left-radius: 0; border-bottom-left-radius: 0;">
                </div>
                <strong class="fs-6 text-danger m-0"></strong>
            </div>

            <div class="d-flex justify-content-center gap-2">
                <input style="border-radius: 30px;" type="submit" class="w-50 btn btn-primary js-submit-btn" value="LOGIN">
                <!-- <div class="mt-3 container d-flex justify-content-center"> -->
                <button style="border-radius: 30px;" class="w-50 btn btn-light">View Grades</button>
            </div>
            <!-- </div> -->
        </form>
    </main>

    <script>
        const form =document.querySelector('form')
        const btn = document.querySelector('.js-submit-btn')

        form.addEventListener('submit', _ => {
            
        })

        btn.addEventListener('click', _ =>{
            const error = document.querySelectorAll('strong')
            error.forEach((index, wow) => {
                console.log(index)
            })
        })
    </script>
</body>
</html>