<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
        crossorigin="anonymous">
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 style="text-align:center">Edit Student</h1>
                <form action="/edit" class="form" method="post">
                    {{ Form::token() }}
                    <div class="form-group">
                        <label for="std_id" class="form-label">Student Id</label>
                        <input type="text" class="form-control" name="std_id" value="{{ $student->student_id }}" readonly/>
                    </div>
                    <div class="form-group">
                        <label for="std_name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="std_name" value="{{ $student->student_name }}" />
                    </div>
                    <div class="form-group">
                        <label for="std_tel" class="form-label">Tel</label>
                        <input type="text" class="form-control" name="std_tel" value="{{ $student->student_tel }}" />
                    </div>
                    <div class="text-center">
                        <button class="btn btn-warning">Edit Student</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
</body>

</html>