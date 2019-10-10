<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<head><style>
	body{
		background-image: url(images/slider/lg11.jpg);
	}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container1 {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style></head>
<body>


<div class="container1">
  <form action="/action_page.php">
    <label for="name">Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">

    <label for="lname">E-Mail</label>
    <input type="text" id="lname" name="email" placeholder="Enter your mail....">
	  
	 <label for="lname">Phone</label>
    <input type="text" id="lname" name="phone" placeholder="Enter your number...."> 

    <label for="branch">Branch</label>
    <select id="country" name="branch">
      <option value="CS/IT">CS/IT</option>
      <option value="Mechnical">Mechnical</option>
      <option value="Electrical">Electrical</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something text.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>


</body>