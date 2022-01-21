<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>

</head>

<body>
    <div class="container my-5">
        <div class="card">
            <div class="card-title">
                <h3 class="lead text-primary m-3">Application Form</h3>
            </div>
            <div class="card-body w-100">
                <form action="backend.php" method="post">
                    <input type="hidden" name="submitted" value="1" />

                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" placeholder="Name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Email Address</label>
                        <input type="email" name="emailAddress" placeholder="Email Address" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="text" name="phoneNumber" placeholder="Phone Number" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Nationality</label>
                        <input type="text" name="nationality" placeholder="Nationality" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary mt-3 float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>