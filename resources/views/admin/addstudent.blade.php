@extends('layout')
@section('content')
<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Add Student</h2>
            <p class="alert-danger">
                <?php 
                  $exception = Session::get('exception');
                  if($exception){
                    echo $exception;
                    Session::put('exception',null);
                  }
                ?>
                <form class="forms-sample" method="post" action="{{URL::to('/save_student')}}"
                    enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Name</label>
                        <input type="text" class="form-control p-input" name="student_name"
                            placeholder="Enter Student Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Roll</label>
                        <input type="text" class="form-control p-input" name="student_roll"
                            placeholder="Enter Student Roll">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Fathers Name</label>
                        <input type="text" class="form-control p-input" name="student_fathersname"
                            placeholder="Enter Student Fathers Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Mothers Name</label>
                        <input type="text" class="form-control p-input" name="student_mothersname"
                            placeholder="Enter Student Maothers Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Email</label>
                        <input type="email" class="form-control p-input" name="student_email"
                            placeholder="Enter Student Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Phone</label>
                        <input type="text" class="form-control p-input" name="student_phone"
                            placeholder="Enter Student Phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Address</label>
                        <input type="text" class="form-control p-input" name="student_address"
                            placeholder="Enter Student Address">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control p-input" name="student_password"
                            placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label>Upload file</label>
                        <div class="row">
                            <div class="col-12">
                                <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i
                                        class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                <input type="file" class="form-control-file" id="exampleInputFile2" name="student_image"
                                    aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level
                                    help
                                    text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Admission Year</label>
                        <input type="date" class="form-control p-input" name="student_admissionyear"
                            placeholder="Admission Year">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Department</label>
                        <select name="student_department" id="" class="form-control p-input">
                            <option value="1">CSE</option>
                            <option value="2">BBA</option>
                            <option value="3">ECE</option>
                            <option value="4">EEE</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                </form>
        </div>
    </div>
</div>
@endsection