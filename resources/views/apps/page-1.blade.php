@extends('layout.app')
@section('content')

<div class="row">

    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Users | Managers </h3>
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Users</li>
                <li class="breadcrumb-item active">Managers</li>
            </ol>
        </div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <div class="d-flex mt-2 justify-content-end">
                <div class="d-flex mr-3 ml-2">
                    <div class="chart-text mr-2">
                        <button type="button" class="btn btn-outline-dark btn-rounded"><i class="fas fa-plus"></i> Add User</button>
                    </div>
                    <div class="chart-text mr-2">
                        <button type="button" class="btn btn-outline-dark btn-rounded">Print</button>
                    </div>
                    <div class="chart-text mr-2">
                        <div class="form-group">
                            <input type="text" class="form-control" id="search-input" aria-describedby="name" placeholder="search">
                        </div>
                    </div>
                </div>
                <div class="d-flex ml-2">

                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="tabletopbar row">
                    <div class="backup-date col-lg-5">
                        <span>Choose Backup Date/s</span>
                        <button type="button" class="btn waves-effect waves-light btn-secondary">From Date</button>
                        <button type="button" class="btn waves-effect waves-light btn-secondary">To Date</button>
                    </div>
                    <div class="export-options col-md-7">
                        <button type="button" class="btn waves-effect waves-light btn-secondary">Backup</button>
                        <button type="button" class="btn waves-effect waves-light btn-secondary">PDF</button>
                        <button type="button" class="btn waves-effect waves-light btn-secondary">Excel</button>
                        <button type="button" class="btn waves-effect waves-light btn-secondary">CSV</button>
                        <button type="button" class="btn waves-effect waves-light btn-secondary">Graph</button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="col_render" class="table  table-bordered display">
                        <thead>
                            <tr>
                                <th>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="md_checkbox_22" class="material-inputs filled-in chk-col-grey " checked="">
                                        <label for="md_checkbox_22"></label>
                                    </div>
                                </th>
                                <th>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="md_checkbox_22" class="material-inputs filled-in chk-col-grey " checked="">
                                        <label for="md_checkbox_22"></label>
                                    </div>
                                </th>
                                <th>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="md_checkbox_22" class="material-inputs filled-in chk-col-grey " checked="">
                                        <label for="md_checkbox_22"></label>
                                    </div>
                                </th>
                                <th>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="md_checkbox_22" class="material-inputs filled-in chk-col-grey " checked="">
                                        <label for="md_checkbox_22"></label>
                                    </div>
                                </th>
                                <th>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="md_checkbox_22" class="material-inputs filled-in chk-col-grey " checked="">
                                        <label for="md_checkbox_22"></label>
                                    </div>
                                </th>
                                <th>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="md_checkbox_22" class="material-inputs filled-in chk-col-grey " checked="">
                                        <label for="md_checkbox_22"></label>
                                    </div>
                                </th>
                                <th>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="md_checkbox_22" class="material-inputs filled-in chk-col-grey " checked="">
                                        <label for="md_checkbox_22"></label>
                                    </div>
                                </th>
                                <th>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="md_checkbox_22" class="material-inputs filled-in chk-col-grey " checked="">
                                        <label for="md_checkbox_22"></label>
                                    </div>
                                </th>
                                <th>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="md_checkbox_22" class="material-inputs filled-in chk-col-grey " checked="">
                                        <label for="md_checkbox_22"></label>
                                    </div>
                                </th>
                                <th>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="md_checkbox_22" class="material-inputs filled-in chk-col-grey " checked="">
                                        <label for="md_checkbox_22"></label>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="md_checkbox_22" class="material-inputs filled-in chk-col-grey ">
                                        <label for="md_checkbox_22"></label>
                                    </div>
                                </th>
                                <th>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="md_checkbox_22" class="material-inputs filled-in chk-col-grey ">
                                        <label for="md_checkbox_22"></label>
                                    </div>
                                </th>
                                <th>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="md_checkbox_22" class="material-inputs filled-in chk-col-grey ">
                                        <label for="md_checkbox_22"></label>
                                    </div>
                                </th>
                                <th>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="md_checkbox_22" class="material-inputs filled-in chk-col-grey ">
                                        <label for="md_checkbox_22"></label>
                                    </div>
                                </th>
                                <th>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="md_checkbox_22" class="material-inputs filled-in chk-col-grey ">
                                        <label for="md_checkbox_22"></label>
                                    </div>
                                </th>
                                <th>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="md_checkbox_22" class="material-inputs filled-in chk-col-grey ">
                                        <label for="md_checkbox_22"></label>
                                    </div>
                                </th>
                                <th>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="md_checkbox_22" class="material-inputs filled-in chk-col-grey ">
                                        <label for="md_checkbox_22"></label>
                                    </div>
                                </th>
                                <th>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="md_checkbox_22" class="material-inputs filled-in chk-col-grey ">
                                        <label for="md_checkbox_22"></label>
                                    </div>
                                </th>
                                <th>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="md_checkbox_22" class="material-inputs filled-in chk-col-grey ">
                                        <label for="md_checkbox_22"></label>
                                    </div>
                                </th>
                                <th>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="md_checkbox_22" class="material-inputs filled-in chk-col-grey ">
                                        <label for="md_checkbox_22"></label>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th>User No</th>
                                <th>Manager ID</th>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Date & Time Created</th>
                                <th>Date & Time Last Active</th>
                                <th>Country & City</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>0000001</td>
                                <td>Winters</td>
                                <td>Garrett</td>
                                <td>Admin</td>
                                <td>garrret@email.com</td>
                                <td>29/10/19 14:00</td>
                                <td>29/10/19 14:00</td>
                                <td>Capetown South Africa</td>
                                <td>Edit|Delete|View More</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>0000001</td>
                                <td>Winters</td>
                                <td>Garrett</td>
                                <td>Admin</td>
                                <td>garrret@email.com</td>
                                <td>29/10/19 14:00</td>
                                <td>29/10/19 14:00</td>
                                <td>Capetown South Africa</td>
                                <td>Edit|Delete|View More</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>0000001</td>
                                <td>Winters</td>
                                <td>Garrett</td>
                                <td>Admin</td>
                                <td>garrret@email.com</td>
                                <td>29/10/19 14:00</td>
                                <td>29/10/19 14:00</td>
                                <td>Capetown South Africa</td>
                                <td>Edit|Delete|View More</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>0000001</td>
                                <td>Winters</td>
                                <td>Garrett</td>
                                <td>Admin</td>
                                <td>garrret@email.com</td>
                                <td>29/10/19 14:00</td>
                                <td>29/10/19 14:00</td>
                                <td>Capetown South Africa</td>
                                <td>Edit|Delete|View More</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>0000001</td>
                                <td>Winters</td>
                                <td>Garrett</td>
                                <td>Admin</td>
                                <td>garrret@email.com</td>
                                <td>29/10/19 14:00</td>
                                <td>29/10/19 14:00</td>
                                <td>Capetown South Africa</td>
                                <td>Edit|Delete|View More</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>0000001</td>
                                <td>Winters</td>
                                <td>Garrett</td>
                                <td>Admin</td>
                                <td>garrret@email.com</td>
                                <td>29/10/19 14:00</td>
                                <td>29/10/19 14:00</td>
                                <td>Capetown South Africa</td>
                                <td>Edit|Delete|View More</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>0000001</td>
                                <td>Winters</td>
                                <td>Garrett</td>
                                <td>Admin</td>
                                <td>garrret@email.com</td>
                                <td>29/10/19 14:00</td>
                                <td>29/10/19 14:00</td>
                                <td>Capetown South Africa</td>
                                <td>Edit|Delete|View More</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>0000001</td>
                                <td>Winters</td>
                                <td>Garrett</td>
                                <td>Admin</td>
                                <td>garrret@email.com</td>
                                <td>29/10/19 14:00</td>
                                <td>29/10/19 14:00</td>
                                <td>Capetown South Africa</td>
                                <td>Edit|Delete|View More</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>0000001</td>
                                <td>Winters</td>
                                <td>Garrett</td>
                                <td>Admin</td>
                                <td>garrret@email.com</td>
                                <td>29/10/19 14:00</td>
                                <td>29/10/19 14:00</td>
                                <td>Capetown South Africa</td>
                                <td>Edit|Delete|View More</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>0000001</td>
                                <td>Winters</td>
                                <td>Garrett</td>
                                <td>Admin</td>
                                <td>garrret@email.com</td>
                                <td>29/10/19 14:00</td>
                                <td>29/10/19 14:00</td>
                                <td>Capetown South Africa</td>
                                <td>Edit|Delete|View More</td>
                            </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection