<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <?php 
        include'sidebar.php';
    ?>
    
    <div style="z-index: 200; border-bottom: 1px solid rgb(24, 49, 83);" class="d-flex justify-content-between align-items-center">
        <h3 class="pb-3 text-dark">Students</h3>
        <button class="btn btn-primary">Add new Student</button>
    </div>
    
    <table class="table table-hover my-5">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Level</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>2</td>
        <td>
            <div class="d-flex gap-1">
                <button class="btn btn-primary"><i class="fa-solid fa-pencil" style="color: #ffffff;"></i></button>
                <button class="btn btn-danger"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
            </div>
        </td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>6</td>
        <td>
            <div class="d-flex gap-1">
                <button class="btn btn-primary"><i class="fa-solid fa-pencil" style="color: #ffffff;"></i></button>
                <button class="btn btn-danger"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
            </div>
        </td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>10</td>
        <td>
            <div class="d-flex gap-1">
                <button class="btn btn-primary"><i class="fa-solid fa-pencil" style="color: #ffffff;"></i></button>
                <button class="btn btn-danger"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
            </div>
        </td>
        </tr>
    </tbody>
    </table>
    
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>

<script>
    
</script>
</body>
</html>