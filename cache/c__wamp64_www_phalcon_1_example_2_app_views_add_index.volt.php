<div class="form" style=" margin-top: 50px">
				 <form action="http://localhost/phalcon_1/example_2/add/adddata" method="POST"> 

			     <div class="placement">
				      <p ><label for="firstname">First name</label></p> 
				      <input class="form-control" id="firstname" placeholder="First name" required="" tabindex="1" type="text" name = "firstname"> 
			     </div>

			      <div class = "placement">
				      <p><label for="lastname">Last name</label></p> 
				      <input class="form-control" id="lastname" placeholder="last name" required="" tabindex="2" type="text" name = "lastname"> 
			      </div>

			      <div class="placement">
				      <p ><label for="email">Email</label></p> 
				      <input
				      class="form-control" id="email" name="email" placeholder="example@domain.com" required="" type="email"
				      tabindex="3"> 
			      </div>
			      <div class = "placement">
			      	<p>
			      		<label for="gender">Gender</label>
			      	</p>
			      	<input type="radio" name="gender" value="M" checked tabindex="4"> Male
				    <input type="radio" name="gender" value="F" style="margin-left: 5px"
				    tabindex="5"> Female<br>
			      </div>
			      
			      <div class = "placement">
				      <p ><label for="education">Education</label></p> 

				      <select  name="education" tabindex="6">
				        <option value="BE">BE</option>
				        <option value="TE">TE</option>
				        <option value="SE">SE</option>
				        <option value="FE">FE</option>
				      </select><br><br>
			      </div>
			      <div class="placement">
				      <p ><label for="Skills">Skills</label></p> 
				      <input
				      class="form-control" id="skills" name="skills" required="" type="text"
				      tabindex="7"> 
			      </div>
			      <br>
			      <input class="btn-primary" name="submit" id="submit" tabindex="12" value="submit" type="submit" style="margin-left: 20px;font-size: 20px" /> 
			    </form> 
			</div>