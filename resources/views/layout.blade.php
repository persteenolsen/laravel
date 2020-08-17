<!DOCTYPE html>
<html>
   <head>

      <meta charset="utf-8">

      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <title>A Laravel CRUD Application</title>
      
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

     <!--Styling the menu-->	 
	 <style>
	   
	    a:hover { cursor: pointer }
	   
        .navbar-toggler {background-color: whitesmoke; cursor: pointer;} 
	    .navbar-toggler:focus {background-color: gray; cursor: pointer;} 
        .navbar-toggler:hover {background-color: gray; cursor: pointer;}
       
	 </style>  

   </head>

   <body>
     
    <!--The menu-->
    <nav class="navbar navbar-expand-lg  navbar-light bg-light">
                         						 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
        </button>
						
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	  	  
	         <div class="navbar-nav">
                
                  <a class="nav-item nav-link" href="{{ route('students.index')}}">Show Students</a>
                  <a class="nav-item nav-link" href="{{ route('students.create')}}">Create a Student</a>
                  <a class="nav-item nav-link" href="{{ url('/welcome') }}">About Laravel</a>

              </div>
		</div>
				
     </nav>


    <!--The content is wrapped in a bootstrap table for scrolling besides the container -->         
     <div class="container">
           <div class="table-responsive">
               @yield('content')
           </div>
     </div>
         
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <script>

          // Collapsing the menu when the user click somewhere at the content   		 
          $('body').click(function(evt){    
        
            if(!$(evt.target).is('#container')) {
                                              
                if(!$(".navbar-collapse").is(":hidden")){
                    $('.navbar-collapse').collapse('hide');
                       // alert("The mobile menu will be hidden....");
                 }
              }
           });
                                          
      </script>
  
   </body>
</html>