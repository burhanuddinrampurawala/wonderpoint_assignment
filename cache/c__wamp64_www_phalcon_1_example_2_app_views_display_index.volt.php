<!-- the top navigation bar -->
	<nav class="navbar navbar-inverse navbar-fixed-top" style="border-radius: 0px;">
  <div class="container" style="text-align : center; font-size: 40px;color: #ffffff;">
    <p>Submited Data</p>
  </div>
</nav>
<!-- table to display the data from the database -->
<div class="panel" style="margin-top: 75px">

    <table class="table table-hover" id="list" style="margin-left: 25px;font-size: 20px; margin-top: 25px" >
    
   </table>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript">
    
    update();

	function update(){
		var xmlhttp, myObj, x, txt = "";
		var xmlhttp = new XMLHttpRequest();
		//when parameters is recieved from the server
		xmlhttp.onreadystatechange = function() {
		    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		    	//myobj conatins the data in json format
		        myObj = JSON.parse(this.responseText);
		        var i=0;
		        txt+="<tr style=' background-color: #f1f1f1;'><th>First name</th><th>Last name</th>Email<th<th>Gender</th><th>Education</th><th>Skills</th></tr>";
		        for (x in myObj) {
		        	var a = myObj[x].avaibility;
		        	var avaibility;
		            txt +="<tr><td>"+ myObj[x].firstname +"</td><td>"+ myObj[x].lastname + "</td><td>"+ myObj[x].email+"</td><td>"+ myObj[x].gender+"</td><td>"+ myObj[x].education+"</td><td>"+myObj[x].skills+"</td</tr>";

		        }
		        // text is written in the table 
		        document.getElementById("list").innerHTML = txt;
		    }
		};
		// request is opened here
		xmlhttp.open("GET", "http://localhost/phalcon_1/example_2/display/displaydata", true);
		//sent request
		xmlhttp.send();
	}
   setInterval(update,4000);
	
</script>