<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Learning</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/mail.css"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>

            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="btn-compose pull-left">
                <a type="button" class="btn btn-danger navbar-btn" href="#compose" role="tab" data-toggle="tab"> <span class="glyphicon glyphicon-pencil"></span> Compose</a>
            </div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="#inbox" role="tab" data-toggle="tab">
                        Inbox <span class="label label-success">10</span>
                    </a>
                </li>
                <li><a href="#sent-mail" role="tab" data-toggle="tab">Sent mail</a>

                </li>
                <li><a href="#draft" role="tab" data-toggle="tab">Draft</a>

                </li>
                <li><a href="#trash" role="tab" data-toggle="tab">Trash</a>

                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Username</a>

                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>




<div class="tab-content">
  <div class="tab-pane active" id="inbox">
      
      <div class="container">
           <div class="content-container clearfix">
               <div class="col-md-12">
                   <h1 class="content-title">Inbox</h1>
                   
                   <input type="search" placeholder="Search Mail" class="form-control mail-search" />
                   
                   <ul class="mail-list">
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">You have ten more subscriptions click her...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
      
  </div>
  <div class="tab-pane" id="compose">
      
      <div class="container">
    <div class="content-container clearfix">
        <h1 class="content-title">Compose</h1>
        <div class="col-md-12">
            <div class="form-group">
                <input id="tokenfield" type="text" class="form-control" placeholder="To" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Cc" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Bcc" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" />
            </div>
            <textarea class="form-control" placeholder="message"></textarea>
            <div class="btn-send">
            <button class="btn btn-success btn-lg"><span class="glyphicon glyphicon-send"></span> Send</button>
            </div>
        </div>
    </div>
</div>
      
  </div>
  <div class="tab-pane" id="sent-mail">
      
      <div class="container">
           <div class="content-container clearfix">
               <div class="col-md-12">
                   <h1 class="content-title">Sent Mail</h1>
                   
                   <input type="search" placeholder="Search Mail" class="form-control mail-search" />
                   
                   <ul class="mail-list">
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">You have ten more subscriptions click her...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
      
  </div>
  <div class="tab-pane" id="draft">
      
      <div class="container">
           <div class="content-container clearfix">
               <div class="col-md-12">
                   <h1 class="content-title">Draft</h1>
                   
                   <input type="search" placeholder="Search Mail" class="form-control mail-search" />
                   
                   <ul class="mail-list">
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">You have ten more subscriptions click her...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
      
  </div>
  <div class="tab-pane" id="trash">
      
      <div class="container">
           <div class="content-container clearfix">
               <div class="col-md-12">
                   <h1 class="content-title">Trash</h1>
                   
                   <input type="search" placeholder="Search Mail" class="form-control mail-search" />
                   
                   <ul class="mail-list">
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">You have ten more subscriptions click her...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
      
  </div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/script.js"></script>
</body>
</html>