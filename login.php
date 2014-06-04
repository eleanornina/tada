<?php include("includes/header.inc.php"); ?>
<body>
	 <!-- Side Menu -->
    
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
            <hr>
             <li><a href="index.php"><i class="fa fa-sign-out"></i> Logout</a>
            </li>
        </ul>
    </div>
    <!-- /Side Menu -->


<div class="container">
	<img src="img/logomini.png">
	<a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle pull-right"><i class="fa fa-bars"></i></a>
	<div class="jumbotron">
    	<div class="row">

			<div class="col-sm-12">
				<h4 class="listTitle">Shopping <i class="fa fa-share" data-title=" Share" data-toggle="modal" data-target="#share"></i></h4> 
				<h4>Todo</h4>
				<hr class="listdiv">
				<ul class="list-group" id="list">
					<li class="list-group-item" >
						<input type="checkbox">
						Vet Appointment!
						<span class="show-menu">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</span>
						<ul class="list-group-submenu">
							<li class="list-group-submenu-item danger" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-remove"></span></li>
							<li class="list-group-submenu-item success" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></li>
						</ul>
					</li>
					<li class="list-group-item">
						<input type="checkbox">
						Dinner with boss!
						<span class="show-menu">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</span>
						<ul class="list-group-submenu">
							<li class="list-group-submenu-item danger"><span class="glyphicon glyphicon-remove"></span></li>
							<li class="list-group-submenu-item success"><span class="glyphicon glyphicon-pencil"></span></li>
						</ul>
					</li>
					
				</ul>
				<h4>Completed</h4>
				<hr class="listdiv">

				<ul class="list-group">
					<li class="list-group-item">
						<input type="checkbox">
						Grocories
						<span class="show-menu">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</span>
						<ul class="list-group-submenu">
							<li class="list-group-submenu-item danger"><span class="glyphicon glyphicon-remove"></span></li>
							<li class="list-group-submenu-item success"><span class="glyphicon glyphicon-pencil"></span></li>
						</ul>
					</li>
					<li class="list-group-item">
						<input type="checkbox">
						Homework

						<span class="show-menu">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</span>
						<ul class="list-group-submenu">
							<li class="list-group-submenu-item danger"><span class="glyphicon glyphicon-remove"></span></li>
							<li class="list-group-submenu-item success"><span class="glyphicon glyphicon-pencil"></span></li>
						</ul>
					</li>
					
				</ul>
			</div>
		</div>
	</div>
<div class="modal fade" id="edit" >
      <div class="modal-dialog">
	    <div class="modal-content">
	          <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	            <h4 class="modal-title" id="Heading">Edit Your Detail</h4>
	          </div>
	          <div class="modal-body">
		          <div class="form-group">
		            <input class="form-control " type="text" placeholder="Start typing">
		          </div>
	          <div class="form-group">
	          	<input class="form-control " type="text" placeholder="mm/dd/yy">
	          </div>
	           <div class="form-group">
		            <select type="text" class="form-control multiselect multiselect-icon" role="multiselect">          
		              <option class="vryImp" data-icon="glyphicon-camera" selected="selected">Very Important</option>          
		              <option class="medImp" data-icon="glyphicon-link">Important</option>
		              <option class="notImp" data-icon="glyphicon-pencil">Get done soon</option>
		             </select> 
	          </div>
	        
	    </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-success btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    <!-- THIS IS THE SHARING MODAL! -->
    <div class="modal fade" id="share" >
      <div class="modal-dialog">
	    <div class="modal-content">
	          <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	            <h4 class="modal-title" id="Heading">Share With Who?</h4>
	          </div>
	          <div class="modal-body">
		          <div class="form-group">
		            <input class="form-control " type="text" placeholder="Email Address">
		          </div>
	          <div class="form-group">
	          	<input class="form-control " type="text" placeholder="Title">
	          </div>
	           <div class="form-group">
		            <select type="text" class="form-control multiselect multiselect-icon" role="multiselect">          
		              <option class="vryImp" data-icon="glyphicon-camera" selected="selected">Grant Full Access</option>          
		              <option class="medImp" data-icon="glyphicon-link">Editing Only</option>
		              <option class="notImp" data-icon="glyphicon-pencil">Viewing Only</option>
		             </select> 
	          </div>
	        
	    </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-success btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Share</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
      <!-- THIS IS THE DELETE MODAL! -->
    
    <div class="modal fade" id="delete">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-warning"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-danger" ><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    


</div>
<script type="text/javascript">
$(function () {
    $('.list-group-item > .show-menu').on('click', function(event) {
		event.preventDefault();
		$(this).closest('li').toggleClass('open');
	});
});
</script>
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
