<div class="navigation-menu-body">
    <ul>
        <li class="navigation-divider">Users</li>
        <li>
        <!-- class="open" -->
            <a href="index.html">
                <i class="nav-link-icon" data-feather="bar-chart-2"></i>
                <span>Users</span>
            </a>
            <ul>
                <li><a class="{{  request()->is('users/super-admins') ? 'active' : '' }}" href="{{ url('/users/super-admins') }}">Super Admins</a></li>
                <li><a class="{{  request()->is('requested-quotes') ? 'active' : '' }}" href="{{ url('/requested-quotes') }}">Managers</a></li>
                <li><a class="{{  request()->is('offline-leads') ? 'active' : '' }}" href="{{ url('/offline-leads') }}">Players</a></li>
                <li><a class="{{  request()->is('callbacks') ? 'active' : '' }}" href="{{ url('/callbacks') }}">Resellers</a></li>
                <li><a href="{{ url('/') }}">Helpdesk Management</a></li>
            </ul>
        <!-- </li>
                

        <li> -->
            <a href="#">
                <i class="nav-link-icon" data-feather="command"></i>
                <span>Game Units</span>
            </a>
            <ul>
                <li>
                    <a href="{{ url('/') }}">
                        <span>Chat</span>
                        <span class="badge badge-danger">2</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/') }}">
                        <span>Mail</span>
                        <span class="badge badge-success">2</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/') }}">
                        <span>Todo</span>
                        <span class="badge badge-warning">2</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/') }}">
                        <span>File Manager</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/') }}">
                        <span>Calendar</span>
                    </a>
                </li>
            </ul>
        </li>

        
        <li class="navigation-divider">Game Units</li>
        <li>
            <a href="#">
                <i class="nav-link-icon" data-feather="monitor"></i>
                <span>Game Units</span>
            </a>
            <ul>
                <li>
                    <a href="#">Basic</a>
                    <ul>
                        <li><a href="{{ url('/') }}">Alert</a></li>
                        <li><a href="{{ url('/') }}">Accordion</a></li>
                        <li><a href="{{ url('/') }}">Buttons</a></li>
                        <li><a href="{{ url('/') }}">Dropdown</a></li>
                        <li><a href="{{ url('/') }}">List Group</a></li>
                        <li><a href="{{ url('/') }}">Pagination</a></li>
                        <li><a href="{{ url('/') }}">Typography</a></li>
                        <li><a href="{{ url('/') }}">Media Object</a></li>
                        <li><a href="{{ url('/') }}">Progress</a></li>
                        <li><a href="{{ url('/') }}">Modal</a></li>
                        <li><a href="{{ url('/') }}">Spinners</a></li>
                        <li><a href="{{ url('/') }}">Navs</a></li>
                        <li><a href="{{ url('/') }}">Tab</a></li>
                        <li><a href="{{ url('/') }}">Tooltip</a></li>
                        <li><a href="{{ url('/') }}">Popovers</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Cards</a>
                    <ul>
                        <li><a href="{{ url('/') }}{{ url('/') }}{{ url('/') }}{{ url('/') }}">Basic Cards </a></li>
                        <li><a href="{{ url('/') }}{{ url('/') }}{{ url('/') }}{{ url('/') }}">Image Cards </a></li>
                        <li><a href="{{ url('/') }}{{ url('/') }}{{ url('/') }}{{ url('/') }}">Card Scroll </a></li>
                        <li><a href="{{ url('/') }}{{ url('/') }}{{ url('/') }}{{ url('/') }}">Others </a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/') }}{{ url('/') }}{{ url('/') }}">Avatar</a></li>
                <li><a href="{{ url('/') }}{{ url('/') }}{{ url('/') }}">Icons</a></li>
                <li><a href="{{ url('/') }}{{ url('/') }}{{ url('/') }}">Colors</a></li>
            </ul>
        </li>

        <li>
            <a href="#">
                <i class="nav-link-icon" data-feather="globe"></i>
                <span>Plugins</span>
            </a>
            <ul>
                <li><a href="{{ url('/') }}{{ url('/') }}">Sweet Alert</a></li>
                <li><a href="{{ url('/') }}{{ url('/') }}">Lightbox</a></li>
                <li><a href="{{ url('/') }}{{ url('/') }}">Toast</a></li>
                <li><a href="{{ url('/') }}{{ url('/') }}">Tour</a></li>
                <li><a href="{{ url('/') }}{{ url('/') }}">Slick Slide</a></li>
                <li><a href="{{ url('/') }}{{ url('/') }}">Nestable</a></li>
            </ul>
        </li>

        <li>
            <a href="#">
                <i class="nav-link-icon" data-feather="mouse-pointer"></i>
                <span>Forms</span>
            </a>
            <ul>
                <li><a href="{{ url('/') }}">Form Layouts</a></li>
                <li><a href="{{ url('/') }}">Custom Forms</a></li>
                <li><a href="{{ url('/') }}">Advanced Form</a></li>
                <li><a href="{{ url('/') }}">Validation</a></li>
                <li><a href="{{ url('/') }}">Wizard</a></li>
                <li><a href="{{ url('/') }}">File Upload</a></li>
                <li><a href="{{ url('/') }}">Datepicker</a></li>
                <li><a href="{{ url('/') }}">Timepicker</a></li>
                <li><a href="{{ url('/') }}">Colorpicker</a></li>
            </ul>
        </li>

        <li>
            <a href="#">
                <i class="nav-link-icon" data-feather="grid"></i>
                <span>Tables</span>
            </a>
            <ul>
                <li><a href="{{ url('/') }}{{ url('/') }}">Basic Tables</a></li>
                <li><a href="{{ url('/') }}{{ url('/') }}">Datatable</a></li>
                <li><a href="{{ url('/') }}{{ url('/') }}">Responsive Tables</a></li>
            </ul>
        </li>

        <li>
            <a href="#">
                <i class="nav-link-icon" data-feather="pie-chart"></i>
                <span>Charts</span>
            </a>
            <ul>
                <li><a href="{{ url('/') }}">Apex</a></li>
                <li><a href="{{ url('/') }}">Chartjs</a></li>
                <li><a href="{{ url('/') }}">Justgage</a></li>
                <li><a href="{{ url('/') }}">Morsis</a></li>
                <li><a href="{{ url('/') }}">Peity</a></li>
            </ul>
        </li>

        <li>
            <a href="#">
                <i class="nav-link-icon" data-feather="map-pin"></i>
                <span>Maps</span>
            </a>
            <ul>
                <li><a href="{{ url('/') }}{{ url('/') }}">Google</a></li>
                <li><a href="{{ url('/') }}{{ url('/') }}">Vector</a></li>
            </ul>
        </li>

        <li class="navigation-divider">Extras</li>
        <li>
            <a href="#">
                <i class="nav-link-icon" data-feather="user"></i>
                <span>Authentication</span>
            </a>
            <ul>
                <li><a href="{{ url('/') }}">Login</a></li>
                <li><a href="{{ url('/') }}">Register</a></li>
                <li><a href="{{ url('/') }}">Recovery Password</a></li>
                <li><a href="{{ url('/') }}">Lock Screen</a></li>
            </ul>
        </li>

        <li>
            <a href="#">
                <i class="nav-link-icon" data-feather="copy"></i>
                <span>Pages</span>
            </a>
            <ul>
                <li><a href="{{ url('/') }}">Profile</a></li>
                <li><a href="{{ url('/') }}">Timeline</a></li>
                <li><a href="{{ url('/') }}">Invoice</a></li>

                <li><a href="{{ url('/') }}">Pricing Table</a></li>
                <li><a href="{{ url('/') }}">Search Result</a></li>
                <li>
                    <a href="#">Error Pages</a>
                    <ul>
                        <li><a href="{{ url('/') }}">404</a></li>
                        <li><a href="{{ url('/') }}">404 V2</a></li>
                        <li><a href="{{ url('/') }}">503</a></li>
                        <li><a href="{{ url('/') }}">Mean at Work</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/') }}">Starter Page</a></li>
            </ul>
        </li>

        <li>
            <a href="#">
                <i class="nav-link-icon" data-feather="send"></i>
                <span>Email Templates</span>
            </a>
            <ul>
                <li><a href="{{ url('/') }}">Basic</a></li>
                <li><a href="{{ url('/') }}">Alert</a></li>
                <li><a href="{{ url('/') }}">Billing</a></li>
            </ul>
        </li>

        <li>
            <a href="#">
                <i class="nav-link-icon" data-feather="menu"></i>
                <span>Menu Level</span>
            </a>
            <ul>
                <li>
                    <a href="#">Menu Level</a>
                    <ul>
                        <li>
                            <a href="#">Menu Level </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>


    </ul>


</div>