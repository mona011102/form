<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <form class="form mt-5" action="connect.php" method="post" >
        <h1>Time for feedback </h1>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
        </div>
        
            <div class="row mt-2" >
              <div class="col">
                <input type="text" class="form-control" placeholder="monica"  id="Firstname" name="Firstname">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="patidar"id ="Lastname" name="Lastname">
              </div>
            </div>
          
        <div class="form-group">
          <label for="category">Select type of your feedback</label>
          <select class="form-control" id="category" name="category">
            <option value="Complaint">Complaint</option>
            <option value="Suggestion">Suggestion</option>
            <option value="Inquiries">Inquiries</option>
            
          </select>
        </div>
       
        <div class="form-group">
          <label for="textarea">Describe according to the type you selected</label>
          <textarea class="form-control" id="textarea" rows="3" name="textarea"></textarea>
        </div>
        <div class="form-group">
            <label for="ratings">Rate our service (Example - 5 for Excellent )</label>
            <select multiple class="form-control" id="ratings" name="ratings">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <input type="submit" class="btn btn-success mt-5" onclick = submitForm() />
    </div>
      </form>
    </div>
   
  
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>