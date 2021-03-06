@extends('layouts.main')

@section('content')


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Student Record</h3>
              </div>
            </div>
          </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>{{ $student->firstname }} {{ $student->lastname }}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><img src="{{asset('images/img.jpg')}}" class="avatar" alt="Avatar" style="width:100px; height:auto;">
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="col-md-12 col-sm-12 col-xs-12">



                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="previous" role="tab" data-toggle="tab" aria-expanded="true">Add New Report</a>
                          </li>
                          <!-- <li role="presentation" class=""><a href="#tab_content2" role="tab" id="new" data-toggle="tab" aria-expanded="false">Add New Report</a>
                          </li> -->
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <form method="POST" action="{{route('professional.student.iep.post')}}">
                              {{csrf_field()}}
                              <input type="hidden" name="stu_id" value="{{$id}}">
                            <table class="data table table-striped no-margin">
                              <thead>
                                <tr>
                                  <th>MONTH</th>
                                  <th>INTERVENTION/SKILL AREA</th>
                                  <th>PRESENT LEVEL </th>
                                  <th>GOAL</th>
                                  <th>Stategy</th>
                                  <th>Remarks</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><div class="item form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <select class="form-control col-md-7 col-xs-12" style="width: 70px;" name="month">
                                        <option value="Jan">Jan</option>
                                        <option value="Feb">Feb</option>
                                        <option value="Mar">Mar</option>
                                        <option value="Apr">Apr</option>
                                        <option value="May">May</option>
                                        <option value="Jun">Jun</option>
                                        <option value="Jul">Jul</option>
                                        <option value="Aug">Aug</option>
                                        <option value="Sep">Sep</option>
                                        <option value="Oct">Oct</option>
                                        <option value="Nov">Nov</option>
                                        <option value="Dec">Dec</option>
                                      </select>
                                    </div>
                                  </div></td>
                                  <td><div class="item form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <select class="form-control col-md-7 col-xs-12" style="width: 170px;" name="int_sk">
                                        <option value="Behaviour Therapy">Behaviour Therapy</option>
                                        <option value="Physio Therapy">Physio Therapy</option>
                                        <option value="Speech Therapy">Speech Therapy</option>
                                        <option disabled>---Special Educator---</option>
                                        <option value="Computer">Computer</option>
                                        <option value="English">English</option>
                                        <option value="Hindi">Hindi</option>
                                        <option value="Mass Communication">Mass Communication</option>
                                        <option value="Home Science">Home Science</option>
                                        <option value="Personal Grooming">Personal Grooming</option>
                                        <option value="Home Management">Home Management</option>
                                        <option value="Personal Safety">Personal Safety</option>
                                        <option value="3D Sublimation">3D Sublimation</option>
                                        <option value="Social Skill">Social Skill</option>
                                        <option value="Communication Skill">Communication Skill</option>
                                      </select>
                                    </div>
                                  </div></td>
                                  <td><textarea id="present_level" required="required" class="form-control" name="present_level" style="width:150px; height:200px"></textarea></td>
                                  <td><textarea id="goal" required="required" class="form-control" name="goal" style="width:150px; height:200px"></textarea></td>
                                  <td><textarea id="goal" required="required" class="form-control" name="strategy" style="width:150px; height:200px"></textarea></td>
                                  <td><textarea id="goal" required="required" class="form-control" name="remarks" style="width:150px; height:200px"></textarea></td>

                                </tr>
                              </tbody>
                            </table>
                            <div class="pull-right">
                            <button type="submit" class="btn btn-round btn-success">Submit</button>
                            <button type="button" class="btn btn-round btn-primary">Add Skill</button>
                            <form>
                            <!-- <ul class="messages">
                              <li>
                                <img src="{{asset('images/img.jpg')}}" class="avatar" alt="Avatar">
                                <div class="message_date">
                                  <h3 class="date text-info">24</h3>
                                  <p class="month">May</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">Desmond Davison</h4>
                                  <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                  <br />
                                  <p class="url">
                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                    <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                  </p>
                                </div>
                              </li>
                            </ul> -->
                          </div>
                        </div>


                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

    <!-- morris.js -->
    <script src="{{asset('vendors/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('vendors/morris.js/morris.min.js')}}"></script>

  </body>
</html>
@endsection
