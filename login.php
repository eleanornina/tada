<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
</script>
    <title>TaDa</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/style.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <!-- Side Menu -->
    <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars"></i></a>
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
           <a href="#" id="newBtn"><li class="sidebar-brand"><h3>List <i class="fa fa-plus-circle"></i> </h3>
           
           
           </li></a>
            
            <div class="col-lg-12" id="creatNew" style="display:none">
                <div class="input-group">
                  <input type="text" class="form-control">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Create</button>
                  </span>
                </div><!-- /input-group -->
              </div><!-- /.col-lg-6 -->
              
              
            <li><a href="#">Shopping</a>
            </li>
            <li><a href="#">School</a>
            </li>
            <li><a href="#">Chores</a>
            </li>
             <li><a href="index.php">Logout</a>
            </li>
        </ul>
    </div>
    <!-- /Side Menu -->

    <!-- Full Page Image Header Area -->
    <div id="top" class="header">
        
          <div class="container">
          
            <div class="row">
            <img src="img/logomini.png" />
                <div class="col-lg-12" id="blurBack">
                <h3>Shopping</h3>
                <div class="col-lg-9">
                   <input type="text" class="form-control" placeholder="Text input">
                 </div>
               <div class="col-lg-2">
               
               <div class="btn-group">
                  <button type="button" class="btn btn-default">Priority Level</button>
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li id="highLev" ><a href="#">Very Important</a></li>
                    <li id="midLev"><a href="#">Important</a></li>
                    <li id="lowLev"><a href="#">Get done soon</a></li>
                   
                  </ul>
                </div>
               
      
                </div>
                <button type="button" class="btn btn-success">Add</button>
                <hr>
                <div class="col-md-12"> 
                     <div class="col-md-12" id="listItem"> 
                         <input type="checkbox"> Pink Socks Very important
                             <div class="itemRight">
                                 <a href="#" class="fa fa-trash-o"></a> 
                                 <a href="#" class="fa fa-pencil fa-fw"></a> 
                             </div>
                         </input>
                     </div>
                 </div>
                 <div class="col-lg-12" id="completeItem">
                 <hr>
                     <h3>Completed</h3>
                         <div class="col-lg-12" id="listItem" style="text-decoration:line-through;"> V-neck shirts Important
                             <div class="itemRight">
                                 <a href="#" class="fa fa-trash-o"></a> 
                                 <a href="#" class="fa fa-pencil fa-fw"></a> 
                             </div>
                         </div>
                     </div>
                 
            </div><!-- close col-lg-12 -->
          </div><!-- close row -->
       </div><!-- close container -->
   </div>
    <!-- /Full Page Image Header Area -->


    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
		$(document).ready(function(){
		  $("#newBtn").click(function(){
			$("#creatNew").toggle();
		  });
		});
	</script>

    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
    <script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>
