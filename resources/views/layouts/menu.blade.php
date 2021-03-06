
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Student</h3>
                <ul class="nav side-menu">

                  @if(Session::get('type')=='master')
                  <!--<li><a href="/"><i class="fa fa-home"></i> Home <!-<span class="fa fa-chevron-down">-</span></a>-->
                  </li>
                  <li><a href="{{route('master.centre.index')}}"><i class="fa fa-building-o"></i>Centres</a>
                  </li>
                  @endif
                  @if(Session::get('type') == 'centre')
                  <!--<li><a href="/"><i class="fa fa-home"></i> Home <!-<span class="fa fa-chevron-down">-</span></a>-->
                  </li>
                  <li><a href="{{route('centre.student.index')}}"><i class="fa fa-graduation-cap"></i>Students</a>
                  </li>
                  <li><a href="{{route('centre.professional.index')}}"><i class="fa fa-users"> </i>Professionals</a>
                  </li>
                  @endif
                  @if(Session::get('type')=='professional')
                  <!--<li><a href="/"><i class="fa fa-home"></i> Home <!-<span class="fa fa-chevron-down">-</span></a>-->
                  </li>
                  <!--<li><a href="{{route('professional.student.index')}}"><i class="fa fa-graduation-cap"></i>Students</a>-->
                  </li>
                  <li><a href="{{route('professional.student.index')}}"><i class="fa fa-graduation-cap"></i> Students</a>
                    <ul class="nav child_menu" style="display: block;">
                      <li><a href="{{ route('professional.students.centre.index') }}">Centre Students</a></li>
                      <li><a href="{{ route('professional.students.personal.index') }}">Personal Students</a></li>
                    </ul>
                  </li>
                  @endif


                </ul>
              </div>
          <!--    <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div> -->

            </div>
            <!-- /sidebar menu -->



                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                          <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                          </a>
                          <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                          </a>
                          <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                          </a>
                          <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                          </a>
                        </div>
                        <!-- /menu footer buttons -->
                      </div>
                    </div>

                            <!-- top navigation -->
                            <div class="top_nav">
                              <div class="nav_menu">
                                <nav>
                                  <div class="nav toggle">
                                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                                  </div>

                                  <ul class="nav navbar-nav navbar-right">
                                    <li class="">
                                      <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('images/img.jpg')}}" alt="">{{ Session::get('name') }}
                                        <span class=" fa fa-angle-down"></span>
                                      </a>
                                      <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        @if(Session::get('type') === 'professional')
                                        <li><a href="{{ route('professional.profile.show', [Session::get('id')]) }}"> Profile</a></li>
                                        @endif
                                        <li>
                                          @if(Session::get('type') === 'master')
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                         <i class="fa fa-sign-out pull-right"></i>
                                                Log Out
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                          @else
                                            <!-- Logout Form -->
                                            <a href="{{ route('global.logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('global-logout-form').submit();">
                                                         <i class="fa fa-sign-out pull-right"></i>
                                                Log Out
                                            </a>

                                            <form id="global-logout-form" action="{{ route('global.logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="type" value="{{ Session::get('type') }}" />
                                            </form>
                                          @endif
                                        </li>
                                      </ul>
                                    </li>

                                    <li role="presentation" class="dropdown">
                                      <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="badge bg-green">6</span>
                                      </a>
                                      <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                        <li>
                                          <a>
                                            <span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image" /></span>
                                            <span>
                                              <span>John Smith</span>
                                              <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                              Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                          </a>
                                        </li>
                                        <li>
                                          <a>
                                            <span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image" /></span>
                                            <span>
                                              <span>John Smith</span>
                                              <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                              Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                          </a>
                                        </li>
                                        <li>
                                          <a>
                                            <span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image" /></span>
                                            <span>
                                              <span>John Smith</span>
                                              <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                              Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                          </a>
                                        </li>
                                        <li>
                                          <a>
                                            <span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image" /></span>
                                            <span>
                                              <span>John Smith</span>
                                              <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                              Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                          </a>
                                        </li>
                                        <li>
                                          <div class="text-center">
                                            <a>
                                              <strong>See All Alerts</strong>
                                              <i class="fa fa-angle-right"></i>
                                            </a>
                                          </div>
                                        </li>
                                      </ul>
                                    </li>
                                  </ul>
                                </nav>
                              </div>
                            </div>
                            <!-- /top navigation -->
