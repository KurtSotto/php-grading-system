<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
      body{
        /* padding-top: 100px; */
        /* padding-left: 350px; */
        padding: 2em 2em 0 20em;
      }

      p{
        margin: 0;
      }
        :root{
            --blue: rgb(24, 49, 83);
        }
        
        aside{
            position: fixed;
            padding: 1em auto;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
        }
        
        .sidebar a{
            transition: background-color .20s;
        }
        
        .sidebar a:hover{
            background-color: rgb(93, 93, 250);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php 
        include'bootstrap.html';
    ?>
    <aside style="background-color: var(--blue); width: 300px; z-index: 100;" >
        <section class="d-flex flex-column align-items-center gap-1 my-4">
          <i class="fa-solid fa-user-gear fa-4x" style="color: #ffffff;"></i>
          <strong class="text-white">Administrator</strong>
        </section>
  
        <section class="d-flex flex-column sidebar">
          <a href="./dashboard.php" class="d-flex align-items-center gap-2 p-3 text-decoration-none">
            <i class="fa-solid fa-gauge" style="color: white;"></i> 
            <p class="text-white m-0">Dashboard</p>
          </a>
  
          <a href="/classes.php" class="d-flex align-items-center gap-2 p-3 text-decoration-none">
            <i class="fa-solid fa-gauge" style="color: white;"></i>
            <p  class="text-white m-0">Classes</p>
          </a>
  
          <a href="sections.php" class="d-flex flex-row align-items-center gap-2 p-3 text-decoration-none">
            <i class="fa-solid fa-gauge" style="color: white;"></i>
            <p  class="text-white m-0">Sections</p>
          </a>
  
          <a href="students.php" class="d-flex flex-row align-items-center gap-2 p-3 text-decoration-none">
            <i class="fa-solid fa-gauge" style="color: white;"></i>
            <p class="text-white m-0">Students</p>
          </a>
  
          <a href="#" class="d-flex flex-row align-items-center gap-2 p-3 text-decoration-none">
            <!-- <i class="fa-solid fa-gauge" style="color: white;"></i> -->
            <i class="fa-solid fa-table" style="color: #ffffff;"></i>
            <p class="text-white m-0">Grades</p>
          </a>
        </section>
          
        <button class="btn btn-danger">
            Logout
        </button>
      </aside>
</body>
</html>