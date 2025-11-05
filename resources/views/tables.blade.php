@extends('layouts.admin')

@section('title', 'Datatable Page')

@section('content')


    <body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">

        <main class="app-main">
            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Simple Tables</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Simple Tables</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-content">
                <div class="card mb-4">
                    <div class="card-header">
                        <h3 class="card-title">Data Table</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="userTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date Of Birth</th>
                                    <th>Age</th>
                                    <th>Percentage</th>
                                    <th>Gender</th>
                                    <th>User Type</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        @vite('resources/js/app.js')
        @vite('resources/js/adminlte.js')

        <script>
            $(document).ready(function() {
                console.log("jQuery is ready!");

                $('#userTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('users') }}",
                    columns: [{
                            data: 'id'
                        },
                        {
                            data: 'name'
                        },
                        {
                            data: 'email'
                        },
                        {
                            data: 'date_of_birth'
                        },
                        {
                            data: 'age'
                        },
                        {
                            data: 'percentage',
                            render: function(data, type, row) {
                                let progressClass = '';
                                if (data < 35) {
                                    progressClass = 'text-bg-danger';
                                } else if (data < 50) {
                                    progressClass = 'text-bg-warning';
                                } else if (data < 75) {
                                    progressClass = 'text-bg-primary';
                                } else {
                                    progressClass = 'text-bg-success';
                                }
                                return `
                        <div class="progress progress-xs">
                            <div class="progress-bar ${progressClass}" style="width: ${data}%"></div>
                        </div>
                        <span class="badge text-bg-info ${progressClass}">${data}%</span>
                    `;
                            }

                        },
                        {
                            data: 'gender'
                        },
                        {
                            data: 'userType'
                        },
                    ],
                });
            });
        </script>
    </body>


@endsection
