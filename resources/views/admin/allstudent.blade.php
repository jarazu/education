@extends('layout')
@section('content')
<!-- partial -->
<div class="content-wrapper">
    <h1 class="page-title">Data table</h1>
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Data table</h2>
            <div class="row">
                <div class="col-12">
                    <table id="order-listing" class="table table-striped" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Student ROll #</th>
                                <th>St Name</th>
                                <th>Phone</th>
                                <th>Image</th>
                                <th>Address</th>
                                <th>Department</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>27/08/12</td>
                                <td>Edinburgh</td>
                                <td>New York</td>
                                <td>$1500</td>
                                <td>$3200</td>
                                <td>
                                    <button class="btn btn-outline-primary">View</button>
                                    <button class="btn btn-outline-warning">Edit</button>
                                    <button class="btn btn-outline-danger">Delete</button>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content-wrapper ends -->
@endsection