<?php
while($row = $data->fetch_assoc()) {
    $content .= '<div class="item">
			    		<h3>'.$row['name'].'</h3>
						<p>'.$row['city'].', '.$row['area'].'
			';

    if(!empty($row['street']))
        $content .=',';

    $content.= ' '.$row['street'].' '.$row['house'].'<br>'.$row['comment'].'</p>
						<div class="actbox">
						    <a href="#" class="bcross"></a>
					    </div>
					</div>';

}
?>
			<div class="center_box cb">
				<div class="uo_tabs cf">
					<a href="#"><span>profile</a>
					<a href="#"><span>Reviews</span></a>
					<a href="#"><span>orders</span></a>
					<a href="#" class="active"><span>My Address</span></a>
					<a href="#"><span>Settings</span></a>
				</div>
				<div class="page_content bg_gray">
					<div class="uo_header">
						<div class="wrapper cf">
							<div class="wbox ava">
								<figure><img src="vendor/imgc/user_ava_1_140.jpg" alt="Helena Afrassiabi" /></figure>
							</div>
							<div class="main_info">
								<h1>Helena Afrassiabi</h1>
								<div class="midbox">
									<h4>560 points</h4>
									<div class="info_nav">
										<a href="#">Get Free Points</a>
										<span class="sepor"></span>
										<a href="#">Win iPad</a>
									</div>
								</div>
								<div class="stat">
									<div class="item">
										<div class="num">30</div>
										<div class="title">total orders</div>
									</div>
									<div class="item">
										<div class="num">14</div>
										<div class="title">total reviews</div>
									</div>
									<div class="item">
										<div class="num">0</div>
										<div class="title">total gifts</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="uo_body">
						<div class="wrapper">
							<div class="uofb cf">
								<div class="l_col adrs">
									<h2>Add New Address</h2>
                                    <?php
                                    if(count($error) !== 0){
                                        foreach($error as $text){
                                            echo $text.'<br>';
                                        }
                                    }
                                    ?>
									<form name="reg" method="post">
										<div class="field">
											<label>Name *</label>
											<input name="fieldAdress" type="text" value="" palceholder="" class="vl_empty"  />
										</div>
										<div class="field">
											<label>Your city *</label>
											<select name="fieldCity" class="vl_empty" >
												<option class="plh"></option>
												<option value="City 1">City 1</option>
												<option value="City 2">City 2</option>
											</select>
										</div>
										<div class="field">
											<label>Your area *</label>
											<select name="fieldArea" >
												<option class="plh" ></option>
												<option>Area 1</option>
												<option>Area 2</option>
											</select>
										</div>
										
										<div class="field" >
											<label>Street</label>
											<input name="fieldStreet" type="text" value="" palceholder="" class="vl_empty" />
										</div>
										<div class="field">
											<label>House # </label>
											<input name="fieldNum" type="text" value="" palceholder="House Name / Number" />
										</div>
										
										<div class="field">
											<label class="pos_top">Additional information</label>
											<textarea name="fieldComment"></textarea>
										</div>
										
										<div class="field">
											<input name="buttonSubmit" type="submit" value="add address" class="green_btn" />
										</div>
									</form>
								</div>
								
								<div class="r_col">
									<h2>My Addresses</h2>									
									
									<div class="uo_adr_list">
                                        <?=$content?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>