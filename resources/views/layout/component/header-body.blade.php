<div>
    <ul class="navbar-nav">

        <!-- begin::navigation-toggler -->
        <!-- <li class="nav-item navigation-toggler">
            <a href="#" class="nav-link">
                <i data-feather="menu"></i>
            </a>
        </li> -->
        <!-- end::navigation-toggler -->

        <li class="nav-item">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <i data-feather="plus" class="mr-1"></i> Dashboard
            </a>
            <!-- <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Insurance Company/ Partners</a>
            </div> -->
        </li>

<!-- 
        <li class="nav-item">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <i data-feather="book-open" class="mr-1"></i> Rates and Policies Requirements
            </a>
            <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Adjust Quotations</a>
            </div>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <i data-feather="user" class="mr-1"></i> User Management
            </a>
            <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Create User</a>
            </div>

            <div class="dropdown-menu">
                <a href="#" class="dropdown-item">User Privileges</a>
            </div>

        </li>

        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Applications</a>
            <div class="dropdown-menu dropdown-menu-big">
                <div class="p-3">
                    <div class="row row-xs">
                        <div class="col-6">
                            <a href="chat.html">
                                <div class="p-3 border-radius-1 border text-center mb-3">
                                    <i class="width-23 height-23" data-feather="message-circle"></i>
                                    <div class="mt-2">Chat</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="inbox.html">
                                <div class="p-3 border-radius-1 border text-center mb-3">
                                    <i class="width-23 height-23" data-feather="mail"></i>
                                    <div class="mt-2">Mail</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="app-todo.html">
                                <div class="p-3 border-radius-1 border text-center">
                                    <i class="width-23 height-23" data-feather="check-circle"></i>
                                    <div class="mt-2">Todo</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="file-manager.html">
                                <div class="p-3 border-radius-1 border text-center">
                                    <i class="width-23 height-23" data-feather="file"></i>
                                    <div class="mt-2">File Manager</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
 -->

    </ul>
</div>

<div>
    <ul class="navbar-nav">

        <!-- <li class="nav-item">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img width="18" class="mr-2" src="{{ asset('assets/media/image/flags/029-kenya.png') }}" alt="flag">Kenya</a>
        </li> -->

        <!-- begin::header search -->
        <li class="nav-item">
            <a href="#" class="nav-link" title="Search" data-toggle="search">
                <i data-feather="search"></i>
            </a>
            <div class="header-search">
                <form>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button class="btn" type="button">
                                <i data-feather="search"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-prepend">
                            <button class="btn close-header-search" type="button">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
        <!-- end::header search -->

        <!-- begin::header minimize/maximize -->
        <li class="nav-item dropdown">
            <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                <i class="maximize" data-feather="maximize"></i>
                <i class="minimize" data-feather="minimize"></i>
            </a>
        </li>
        <!-- end::header minimize/maximize -->

        <!-- begin::header messages dropdown -->
        <li class="nav-item dropdown">
            <a href="#" class="nav-link nav-link-notify" title="Chats" data-toggle="dropdown">
                <i data-feather="message-circle"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                <div class="p-4 text-center d-flex justify-content-between" data-backround-image="https://via.placeholder.com/1920X1080">
                    <h6 class="mb-0">Chats</h6>
                    <small class="font-size-11 opacity-7">2 unread chats</small>
                </div>
                <div>
                    <ul class="list-group list-group-flush">
                        <li>
                            <a href="#" class="list-group-item d-flex hide-show-toggler">
                                <div>
                                    <figure class="avatar avatar-sm m-r-15">
                                        <img src="https://via.placeholder.com/128X128" class="rounded-circle" alt="user">
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                        Herbie Pallatina
                                        <i title="Mark as read" data-toggle="tooltip" class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                    </p>
                                    <div class="small text-muted">
                                        <span class="mr-2">02:30 PM</span>
                                        <span>Have you madimage</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                <div>
                                    <figure class="avatar avatar-sm m-r-15">
                                        <img src="https://via.placeholder.com/128X128" class="rounded-circle" alt="user">
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                        Andrei Miners
                                        <i title="Mark as read" data-toggle="tooltip" class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                    </p>
                                    <div class="small text-muted">
                                        <span class="mr-2">08:36 PM</span>
                                        <span>I have a meetinimage</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="text-divider small pb-2 pl-3 pt-3">
                            <span>Old chats</span>
                        </li>
                        <li>
                            <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                <div>
                                    <figure class="avatar avatar-sm m-r-15">
                                        <img src="https://via.placeholder.com/128X128" class="rounded-circle" alt="user">
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                        Kevin added
                                        <i title="Mark as unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                    </p>
                                    <div class="small text-muted">
                                        <span class="mr-2">11:09 PM</span>
                                        <span>Have you madimage</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="list-group-item d-flex hide-show-toggler">
                                <div>
                                    <figure class="avatar avatar-sm m-r-15">
                                        <img src="https://via.placeholder.com/128X128" class="rounded-circle" alt="user">
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                        Eugenio Carnelley
                                        <i title="Mark as unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                    </p>
                                    <div class="small text-muted">
                                        <span class="mr-2">Yesterday</span>
                                        <span>I have a meetinimage</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                <div>
                                    <figure class="avatar avatar-sm m-r-15">
                                        <img src="https://via.placeholder.com/128X128" class="rounded-circle" alt="user">
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                        Neely Ferdinand
                                        <i title="Mark as unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                    </p>
                                    <div class="small text-muted">
                                        <span class="mr-2">Yesterday</span>
                                        <span>I have a meetinimage</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="p-2 text-right">
                    <ul class="list-inline small">
                        <li class="list-inline-item">
                            <a href="#">Mark All Read</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <!-- end::header messages dropdown -->

        <!-- begin::header notification dropdown -->
        <li class="nav-item dropdown">
            <a href="#" class="nav-link nav-link-notify" title="Notifications" data-toggle="dropdown">
                <i data-feather="bell"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                <div class="p-4 text-center d-flex justify-content-between" data-backround-image="https://via.placeholder.com/1920X1080">
                    <h6 class="mb-0">Notifications</h6>
                    <small class="font-size-11 opacity-7">1 unread notifications</small>
                </div>
                <div>
                    <ul class="list-group list-group-flush">
                        <li>
                            <a href="#" class="list-group-item d-flex hide-show-toggler">
                                <div>
                                    <figure class="avatar avatar-sm m-r-15">
                                        <span class="avatar-title bg-success-bright text-success rounded-circle">
                                            <i class="ti-user"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                        New customer registered
                                        <i title="Mark as read" data-toggle="tooltip" class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                    </p>
                                    <span class="text-muted small">20 min ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="text-divider small pb-2 pl-3 pt-3">
                            <span>Old notifications</span>
                        </li>
                        <li>
                            <a href="#" class="list-group-item d-flex hide-show-toggler">
                                <div>
                                    <figure class="avatar avatar-sm m-r-15">
                                        <span class="avatar-title bg-warning-bright text-warning rounded-circle">
                                            <i class="ti-package"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                        New Order Recieved
                                        <i title="Mark as unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                    </p>
                                    <span class="text-muted small">45 sec ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                <div>
                                    <figure class="avatar avatar-sm m-r-15">
                                        <span class="avatar-title bg-danger-bright text-danger rounded-circle">
                                            <i class="ti-server"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                        Server Limit Reached!
                                        <i title="Mark as unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                    </p>
                                    <span class="text-muted small">55 sec ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                <div>
                                    <figure class="avatar avatar-sm m-r-15">
                                        <span class="avatar-title bg-info-bright text-info rounded-circle">
                                            <i class="ti-layers"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                        Apps are ready for update
                                        <i title="Mark as unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                    </p>
                                    <span class="text-muted small">Yesterday</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="p-2 text-right">
                    <ul class="list-inline small">
                        <li class="list-inline-item">
                            <a href="#">Mark All Read</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <!-- end::header notification dropdown -->

        <!-- begin::user menu -->
        <li class="nav-item dropdown">
            <a href="#" class="nav-link" title="User menu" data-toggle="dropdown">
                <figure class="avatar avatar-sm avatar-state-success">
                    <img src="{{ asset('assets/icons/customs/ic_user_placeholder.png') }}" class="rounded-circle" alt="avatar">
                </figure>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                <div class="p-3 text-center" data-backround-image="https://via.placeholder.com/1920X1080">
                    <figure class="avatar avatar-state-success mb-3">
                        <img src="{{ asset('assets/icons/customs/ic_user_placeholder.png') }}" class="rounded-circle" alt="image">
                    </figure>
                    <h6 class="d-flex align-items-center justify-content-center">

                        User's Name

                        <a href="#" class="ml-2" data-toggle="tooltip" title="Edit">
                            <i class="width-13 height-13" data-feather="edit-2"></i>
                        </a>
                    </h6>
                    <small>Email: <strong>Email Address</strong></small>
                </div>
                <div class="dropdown-menu-body">

                    <!-- <div class="border-bottom p-4">
                        <h6 class="text-uppercase font-size-11 d-flex justify-content-between">
                            Storage
                            <span>%25</span>
                        </h6>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div> -->

                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item">Profile</a>
                        <!-- <a href="#" class="list-group-item d-flex">Followers <span class="text-muted ml-auto">214</span></a> -->
                        <a href="#" class="list-group-item" data-sidebar-target="#settings">Settings</a>
                        <form action="#" method="POST">
                            @csrf
                            <button type="submit" class="list-group-item text-danger">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </li>
        <!-- end::user menu -->
    </ul>

    <!-- begin::mobile header toggler -->
    <ul class="navbar-nav d-flex align-items-center">
        <li class="nav-item header-toggler">
            <a href="#" class="nav-link">
                <i data-feather="arrow-down"></i>
            </a>
        </li>
    </ul>
    <!-- end::mobile header toggler -->
</div>