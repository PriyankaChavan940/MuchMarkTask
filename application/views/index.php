



    <div class="container con">
    	<div class="row">
    		<div class="col-xl-3 col-lg-3">
    			<div class="form-group">
				    <label for="contry">Country</label>
				    <select class="form-control country" id="country" name="country">
				     <option value="">--- Country Select ---</option>


                            <?php foreach($Country as $Country)
                             {
                                  $selected ="";
                                  if($Country->id == $data[0]->id)
                                  {
                                       $selected ="selected=selected";
                                   }
                                   echo '<option value="'. $Country->countryname.'" '.$selected.'>'. $Country->countryname.'</option>';
                              }
                              ?>
				    </select>
				  </div>
    		</div>
    		<div class="col-xl-3 col-lg-3">
    			<div class="form-group">
				    <label for="state">State</label>
				    <select class="form-control state" id="state">
				     <option value="">--- State Select ---</option>


                            <?php foreach($State as $State)
                             {
                                  $selected ="";
                                  if($State->id == $data[0]->id)
                                  {
                                       $selected ="selected=selected";
                                   }
                                   echo '<option value="'. $State->statename.'" '.$selected.'>'. $State->statename.'</option>';
                              }
                              ?>
				    </select>
				    </select>
				  </div>
    		</div>
    		<div class="col-xl-3 col-lg-3">
    			<div class="form-group">
				    <label for="city">City</label>
				    <select class="form-control city" id="city">
				      <option value="">--- City Select ---</option>


                            <?php foreach($City as $City)
                             {
                                  $selected ="";
                                  if($City->id == $data[0]->id)
                                  {
                                       $selected ="selected=selected";
                                   }
                                   echo '<option value="'. $City->cityname.'" '.$selected.'>'. $City->cityname.'</option>';
                              }
                              ?>
				    </select>
				  </div>
    		</div>
    		<div class="col-xl-3 col-lg-3">
    			<div class="form-group">
				    <label for="education">Education</label>
				    <select class="form-control education" id="education">
				       <option value="">--- Education Select ---</option>


                            <?php foreach($Education as $Education)
                             {
                                  $selected ="";
                                  if($Education->id == $data[0]->id)
                                  {
                                       $selected ="selected=selected";
                                   }
                                   echo '<option value="'. $Education->education.'" '.$selected.'>'. $Education->education.'</option>';
                              }
                              ?>
				    </select>
				  </div>
    		</div>
    	</div>
    	<div class="row">
    		<p class="selecteddata"></p>
    	</div>
    </div>


    