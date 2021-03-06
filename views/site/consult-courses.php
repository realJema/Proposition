<?php
  use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Reults Managment/CONSULT FACULTY';
?>
<!DOCTYPE html>
<html lang="en">
  

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UB! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index-2.html" class="site_title"><i class="fa fa-paw"></i> <span>UB</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
           <?= $this->renderFile('@app/views/site/menu-profile.php') ?>
            
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
                    <?= $this->renderFile('@app/views/site/sidebar-menu.php') ?>
           
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
           
            <?= $this->renderFile('@app/views/site/menufooter-buttons.php') ?>
            
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
           <?= $this->renderFile('@app/views/site/top-navigation.php') ?>
        
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><small>Results Sysytem Managment</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Projects</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>


                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Levels</label>
                        <div class="col-md-3 col-sm-9 col-xs-12">
                            <select class="form-control">
                                <option>Choose LEVELS</option>
                                <option>level 100</option>
                                <option>level 200</option>
                                <option>level 300</option>
                                <option>level 400</option>
                            </select>
                        </div>
                    </div>



                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Levels</label>
                        <div class="col-md-3 col-sm-9 col-xs-12">
                            <select class="form-control">
                                <option>Choose SPECIALITY</option>
                                <option>SOFTWARE</option>
                                <option>NETWORK</option>


                            </select>
                        </div>
                    </div>

                  <div class="x_content">

                    <p>Simple table with project listing with progress and editing options</p>

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">Course  Name</th>
                          <th>Course code</th>
                          <th>		COurse Code</th>

                          <th>Status</th>
                          <th style="width: 20%">#ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>#</td>
                          <td>
                            <a>cef</a>
                            <br />
                            <small> bonjou</small>
                          </td>
                          <td>

                          
                          </td>

                          <td >
                            
                            
             
                          </td>

                          <td>
                            
                          </td>
                          <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td> 
                        </tr>
                        <tr>
                          <td>#</td>
                          <td>
                            <a>Cef</a>
                            <br />
                            <small></small>
                          </td>

                          <td>
                            
                              
                                
                              
                              
                                
                              
                            
                          </td>

                          <td>


                          <td/>	
                          
                          
                          <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        <tr>
                          <td>#</td>
                          <td>
                            <a>Cef</a>
                            <br />
                            <small></small>
                          </td>
                          <td>
                            


                          </td>
                          <td >
                            
                            
                          </td>
                          <td>
                            
                          </td>
                          <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        <tr>
                          <td>#</td>
                          <td>
                            <a>CEF</a>
                            <br />
                            <small></small>
                          </td>
                          <td>
                            


                          </td>


                          <td >
                            

                          </td>

                          <td>
                            
                          </td>

                          <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        <tr>
                          <td>#</td>
                          <td>
                            <a>CEF</a>
                            <br />
                            <small>C</small>
                          </td>
                          <td>
                            


                          </td>
                          <td >
                            
                          </td>
                          <td>
                           
                          </td>
                          <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        <tr>
                          <td>#</td>
                          <td>
                            <a>CEF</a>
                            <br />
                            <small></small>
                          </td>
                          <td>
                           
                          </td>
                          <td >
                            
                          </td>
                          <td>
                           
                          </td>
                          <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        <tr>
                          <td>#</td>
                          <td>
                            <a>Cef</a>
                            <br />
                            <small></small>
                          </td>
                          <td>
                            
                          </td>
                          <td >
                            
                          </td>
                          <td>
                            
                          </td>
                          <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        <tr>
                          <td>#</td>
                          <td>
                            <a>CEF</a>
                            <br />
                            <small></small>
                          </td>
                          <td>
                            
                          </td>
                          <td >
                           
                          </td>
                          <td>
                           
                          </td>
                          <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        <tr>
                          <td>#</td>
                          <td>
                            <a>CEF</a>
                            <br />
                            <small></small>
                          </td>
                          <td>
                            
                          </td>
                          <td >
                            
                          </td>
                          <td>
                            
                          </td>
                          <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
           
        
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-23581568-13', 'auto');
ga('send', 'pageview');

</script>
  </body>


</html>