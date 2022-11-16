<!doctype html>
<html lang="en">
   <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <title>Students Management System</title>
   </head>
   <body>
      @include("navbar")

         <div class="row header-container justify-content-center">
            <div class="header">
               <h1>Student Management System</h1>
            </div>
         </div>

      @if($layout == 'index')
         <div class="container-fluid mt-4">
            <div class="row">
               <section class="col">
                  @include("studentslist")
               </section>
               <section class="col-md-5"></section>
            </div>
         </div>
      @elseif($layout == 'create')
         <div class="container-fluid mt-4">
            <div class="row">
               <section class="col-md-7">
                  @include("studentslist")
               </section>
               <section class="col-md-5">

                  <div class="card mb-3">
                    <img src="..." class="card-img-top" alt="https://media.istockphoto.com/id/1153190902/vector/online-exam-online-form-survey-on-screen-monitor-with-set-elements-knowledge-icons-e.jpg?s=612x612&w=is&k=20&c=Fluu5ecyD31s3IzNsvKhoMbHOnSroIQuDT1MOVNgHlM=">
                    <div class="card-body">
                        <h5 class="card-title">Enter the information of the new student.</h5>

                        <form action="{{ url('/store') }}" method="post">
                     @csrf
                          <div class="form-group">
                              <label>Matric No</label>
                              <input name="mat_no" type="text" class="form-control" placeholder="Enter Matric No">
                           </div>
                           <div class="form-group">
                              <label>First Name</label>
                              <input name="firstName" type="text" class="form-control" placeholder="Enter First Name">
                           </div>
                           <div class="form-group">
                              <label>Last Name</label>
                              <input name="secondName" type="text" class="form-control" placeholder="Enter Lats Name">
                          </div>
                          <div class="form-group">
                              <label>Age</label>
                              <input name="age" type="text" class="form-control" placeholder="Enter Age">
                          </div>
                          <div class="form-group">
                              <label>Speciality</label>
                              <input name="speciality" type="text" class="form-control" placeholder="Enter Programme">
                          </div>
                          <input type="submit" class="btn btn-info" value="Save">
                          <input type="reset" class="btn btn-warning" value="Reset">
                        </form>

                    </div>
                  </div>

                  
               </section>
            </div>
      @elseif($layout == 'show')
         <div class="container-fluid mt-4">
            <div class="row">
               <section class="col">
                  @include("studentslist")
               </section>
               <section class="col"></section>
            </div>
         </div>
      @elseif($layout == 'edit')
         <div class="container-fluid mt-4">
            <div class="row">
               <section class="col-md-7">
                  @include("studentslist")
               </section>
               <section class="col-md-5">
                  <div class="card mb-3">
                    <img src="..." class="card-img-top" alt="https://media.istockphoto.com/id/1153190902/vector/online-exam-online-form-survey-on-screen-monitor-with-set-elements-knowledge-icons-e.jpg?s=612x612&w=is&k=20&c=Fluu5ecyD31s3IzNsvKhoMbHOnSroIQuDT1MOVNgHlM=">
                    <div class="card-body">
                        <h5 class="card-title">Update student's information.</h5>
                        <form action="{{ url('/update/'.$student->id) }}" method="post">
                           @csrf
                          <div class="form-group">
                              <label>Matric No</label>
                              <input value="{{ $student->mat_no }}" name="mat_no" type="text" class="form-control" placeholder="Enter Matric No">
                           </div>
                           <div class="form-group">
                              <label>First Name</label>
                              <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control" placeholder="Enter First Name">
                           </div>
                           <div class="form-group">
                              <label>Last Name</label>
                              <input value="{{ $student->secondName }}" name="secondName" type="text" class="form-control" placeholder="Enter Last Name">
                          </div>
                          <div class="form-group">
                              <label>Age</label>
                              <input value="{{ $student->age }}" name="age" type="text" class="form-control" placeholder="Enter Age">
                          </div>
                          <div class="form-group">
                              <label>Speciality</label>
                              <input value="{{ $student->speciality }}" name="speciality" type="text" class="form-control" placeholder="Enter Programme">
                          </div>
                          <input type="submit" class="btn btn-info" value="Update">
                          <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                    </div>
                  </div>
               </section>
            </div>
         </div>
      @endif

      <footer></footer>

      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
      -->
   </body>
</html>
