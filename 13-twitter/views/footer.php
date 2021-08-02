    <footer class="footer mt-auto py-3 bg-light">

      <div class="container">
        <span class="text-muted"></span>
        <p>&copy; My Website 2020</p>
      </div>

    </footer>




    <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        
        
            <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="loginModalTitle">Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class = "alert alert-danger" id = "loginAlert"></div>
                            <form>
                              <input type="hidden" id = "loginActive" name = "loginActive" value = "1">
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email Address">            
                              </div>
                              <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password">
                              </div>

                            </form>
                      </div>
                      <div class="modal-footer">
                        <a href="#" id="toggleLogin">Sign up</a>                
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>                
                        <button type="button" id = "loginSignupButton" class="btn btn-primary" >Login</button>
                      </div>
                    </div>
                  </div>
                </div>
             
         
          <script>
              
                 

                $("#toggleLogin").click(function() {                  
                    //e.preventDefault();
                    //alert("hi");
                    if ($("#loginActive").val() == "1") {  
                        //alert("hi");
                        $("#loginActive").val("0");
                        $("#loginModalTitle").html("Sign Up");
                        $("#loginSignupButton").html("Sign Up");
                        $("#toggleLogin").html("Login");

                    } else {

                        $("#loginActive").val("1");
                        $("#loginModalTile").html("Login");
                        $("#loginSignupButton").html("Login");
                        $("#toggleLogin").html("Sign up");
                    } 
                    
                })



                $("#loginSignupButton").click(function() {
                    //alert("hi");
                    
                    $.ajax({
                        type: "POST",
                        url: "actions.php?action=loginSignup",
                        data: "email=" + $("#email").val() + "&password=" + $("#password").val() + "&loginActive=" + $("#loginActive").val(),
                        success: function(result) {
                            if (result == '1') {
                                
                                window.location.assign("http://jkl2hostingpackage-com.stackstaging.com/13-twitter/");
                                
                            } else {
                                
                                $("#loginAlert").html(result).show();
                            }
                        }
                    })
                })

                
                $(".toggleFollow").click(function(){
                  //alert($(this).attr("data-userId"));

                  var id = $(this).attr("data-userId")

                  $.ajax({
                    type: "POST",
                    url: "actions.php?action=toggleFollow",
                    data: "userId=" + id,
                    success: function(result) {
                      // alert(result);
                      if (result == "1") {
                        $("a[data-userId='" + id + "']").html("Follow");
                      } else if (result == "2")
                      $("a[data-userId='" + id + "']").html("Unfollow");
                    }
                  })
                })


                $("#postTweetButton").click(function() {
                  //alert($("#tweetContent").val());
                  $.ajax({
                    type: "POST",
                    url: "actions.php?action=postTweet",
                    data: "tweetContent=" + $("#tweetContent").val(),
                    success: function(result) {
                      // alert(result);
                      
                      if (result == "1") {
                        $("#tweetSuccess").show();
                        $("#tweetFail").hide();
                      } else {

                        $("#tweetFail").html(result).show();
                        $("#tweetSuccess").hide();
                        
                      }
                    }
                  })
                })
            

            </script> 

            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">          
             
            
    
</body>
</html>