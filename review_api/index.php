<html>
    <head>
        <title> Review Page </title>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://use.fontawesome.com/a6f0361695.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>    
    <body>
    </body>    
</html>    


<h2 id="fh2">WE APPRECIATE YOUR REVIEW!</h2>
<h6 id="fh6">Your review will help us to improve our product quality products, and customer services.</h6>


<form id="feedback" style="padding-bottom: 100px;">

<div class="pinfo">Prduct </div>
<div class="form-group">
  <div class="col-md-8 inputGroupContainer">
    <img src="https://www.premiumbeat.com/blog/wp-content/uploads/2020/08/Mac-or-PC.jpg" style="width:50%;height:50%;">
    <input  id="product_id" value="4" class="form-control"  type="hidden">
  </div>
</div>


<div class="pinfo">Your Name</div>
  
<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-user"></i></span>
  <input  name="name" id="user_name" disabled value="Arif Rizvee" class="form-control"  type="text">
  <input  name="user_id" id="user_id" value="1" class="form-control"  type="hidden">
    </div>
  </div>
</div>

 <div class="pinfo">Rate our overall services.</div>

<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-star"></i></span>
   <select class="form-control" id="rating" required>
      <option value="">Select</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
    </div>
  </div>
</div>

 <div class="pinfo" >Write your feedback.</div>
  

<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
  <textarea class="form-control" id="review" rows="3" required></textarea>
 
    </div>
  </div>
</div>

 <button type="button" class="btn btn-primary" onclick="sumit_Data();">Submit</button>


</form>

<script>
    function sumit_Data(){
            var user_id =  document.getElementById("user_id").value;
            var product_id = document.getElementById("product_id").value;
            var review = document.getElementById("review").value;
            var obj = {"user_id":user_id, "product_id":product_id, "review":review};
            var dataString = JSON.stringify(obj);

            $.ajax({
            url: 'http://localhost/assignment/api.php',
            data: {obj: dataString},
            type: 'POST',
            success: function(data) {
                var response = JSON.parse(data);
                Swal.fire(response['message']);
            }
        });
    }
</script>    