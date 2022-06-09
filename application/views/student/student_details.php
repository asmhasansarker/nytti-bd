<style>
	div{
		display:block;
	}
</style>
<section class="edu_admin_content">
	<div class="edu_admin_right sectionHolder edu_question_manager">
			<div class="edu_main_wrapper edu_table_wrapper mb_20" style="padding-top: 0px;">
				<div class="edu_admin_informationdiv">
					<div class="row" id="printableArea">
						<div class="col-lg-12" style="text-align:center;">
							<h3>Student Details</h3>
						</div>
						<div class="col-lg-12">
                            <div class="row form">
								<div class="col-lg-12 col-sm-12" style="text-align:center;">
                                    <div class="admission_field_holder">
                                        <img src="<?php echo !empty($student_data)?base_url('uploads/students/').$student_data[0]['image']:'';?>" alt="" style="height: 120px; width: 100px;" >
                                    </div>
                                </div>
								<div class="col-lg-12 form-head" style="padding: 0px; background: #ddd4d4; margin-top: 20px;">
                                    <h6>PERSONAL &amp; CONTACT INFORMATION</h6>
                                </div>

								<table style="width: 100%;">
									<tbody>
										<tr>
											<td>Name</td>
											<td><?php echo !empty($student_data)?$student_data[0]['name']:'';?></td>
										</tr>
										<tr>
											<td>Father Name</td>
											<td><?php echo !empty($student_data)?$student_data[0]['father_name']:'';?></td>

											<td>Mother’s Name</td>
											<td><?php echo !empty($student_data)?$student_data[0]['mother_name']:'';?></td>
										</tr>
										<tr>
											<td>Present Address</td>
											<td><?php echo !empty($student_data)?$student_data[0]['present_address']:'';?></td>

											<td>Permanent Address</td>
											<td><?php echo !empty($student_data)?$student_data[0]['permanent_address']:'';?></td>
										</tr>
										<tr>
											<td>Office Address</td>
											<td><?php echo !empty($student_data)?$student_data[0]['office_address']:'';?></td>

											<td>National ID</td>
											<td><?php echo !empty($student_data)?$student_data[0]['nid']:'';?></td>
										</tr>
										<tr>
											<td>Occupation</td>
											<td><?php echo !empty($student_data)?$student_data[0]['occupation']:'';?></td>

											<td>Date of Birth</td>
											<td><?php echo !empty($student_data)?$student_data[0]['dob']:'';?></td>
										</tr>
										<tr>
											<td>Nationality</td>
											<td><?php 
											if(!empty($student_data)){
												if($student_data[0]['country'] == 1){
													echo "Bangladeshi";
												}else{
													echo "Other Country";
												}
											}
										?></td>

											<td>Blood Group</td>
											<td><?php echo !empty($student_data)?$student_data[0]['blood_group']:'';?></td>
										</tr>
										<tr>
											<td>Gender</td>
											<td><?php 
											if(!empty($student_data)){
												if($student_data[0]['gender']=='male'){
													echo 'Male';
												}elseif($student_data[0]['gender']=='female'){
													echo "Female";
												}else{
													echo "Other";
												}
											}
										?></td>

											<td>Phone</td>
											<td><?php echo !empty($student_data)?$student_data[0]['contact_no']:'';?></td>
										</tr>
										<tr>
											<td>Email</td>
											<td><?php echo !empty($student_data)?$student_data[0]['email']:'';?></td>

											<td>Guardian Number</td>
											<td><?php echo !empty($student_data)?$student_data[0]['guardian_number']:'';?></td>
										</tr>
										<tr>
											<td>Relationship</td>
											<td><?php echo !empty($student_data)?$student_data[0]['relationship']:'';?></td>
										</tr>
									</tbody>
								</table>
                            </div>
                        </div>
                        <div class="col-lg-12" id="getintouch-part" style="margin-bottom:30px;">
							<div class="row form">
								<div class="col-lg-12 form-head" style="padding: 0px; background: #ddd4d4; margin-top: 20px;">
									<h6>Educational Background</h6>
								</div>
								<br>
								<div class="col-lg-12 form-head">
									<table width="100%" height="50" class="tbl1">
										<thead>
											<tr>
												<th>Degree</th>
												<th>School/College/University</th>
												<th>Board</th>
												<th>Year of Passing</th>
												<th>Division / GPA</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>S.S.C / O Level</td>
												<td><?php echo !empty($student_data)?$student_data[0]['s_university']:'';?></td>
												<td><?php echo !empty($student_data)?$student_data[0]['s_board']:'';?></td>
												<td><?php echo !empty($student_data)?$student_data[0]['s_year']:'';?></td>
												<td><?php echo !empty($student_data)?$student_data[0]['s_gpa']:'';?></td>
											</tr>
											<tr>
												<td>H.S.C / Diploma</td>
												<td><?php echo !empty($student_data)?$student_data[0]['h_university']:'';?></td>
												<td><?php echo !empty($student_data)?$student_data[0]['h_board']:'';?></td>
												<td><?php echo !empty($student_data)?$student_data[0]['h_year']:'';?></td>
												<td><?php echo !empty($student_data)?$student_data[0]['h_gpa']:'';?></td>
											</tr>
											<tr>
												<td>Graduation</td>
												<td><?php echo !empty($student_data)?$student_data[0]['g_university']:'';?></td>
												<td><?php echo !empty($student_data)?$student_data[0]['g_board']:'';?></td>
												<td><?php echo !empty($student_data)?$student_data[0]['g_year']:'';?></td>
												<td><?php echo !empty($student_data)?$student_data[0]['g_gpa']:'';?></td>
											</tr>
											<tr>
												<td>Post Graduation</td>
												<td><?php echo !empty($student_data)?$student_data[0]['pg_university']:'';?></td>
												<td><?php echo !empty($student_data)?$student_data[0]['pg_board']:'';?></td>
												<td><?php echo !empty($student_data)?$student_data[0]['pg_year']:'';?></td>
												<td><?php echo !empty($student_data)?$student_data[0]['pg_gpa']:'';?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
                        </div>
                    
                        <div class="col-lg-12" style="margin-bottom:30px;">
                            <div class="row form">
								<div class="col-lg-12 form-head" style="padding: 0px; background: #ddd4d4; margin-top: 20px;">
									<h6>Reference Details</h6>
								</div>

								<table style="width: 100%;">
									<tbody>
										<tr>
											<td>Ref. Name</td>
											<td><?php echo !empty($student_data)?$student_data[0]['ref_name']:'';?></td>
										
											<td>Phone No</td>
											<td><?php echo !empty($student_data)?$student_data[0]['phone_no']:'';?></td>
										</tr>
										<tr>
											<td>Batch</td>
											<td><?php echo !empty($student_data)?$student_data[0]['batch_name']:'';?></td>
										
											<td>ID</td>
											<td><?php echo !empty($student_data)?$student_data[0]['ref_batch_id']:'';?></td>
										</tr>
										<tr>
											<td>Relation</td>
											<td><?php echo !empty($student_data)?$student_data[0]['relation']:'';?></td>
										</tr>
									</tbody>
								</table>
                            </div>
                        </div>

                        <div class="col-lg-12" style="margin-bottom:30px;">
                            <div class="row form">
								<div class="col-lg-12 form-head" style="padding: 0px; background: #ddd4d4; margin-top: 20px;">
									<h6>Course & Result Details</h6>
								</div>

								<table style="width: 100%;">
									<tbody>
										<tr>
											<td>Start Date</td>
											<td><?php echo !empty($student_data)?$student_data[0]['course_start_date']:'';?></td>
										
											<td>End Date</td>
											<td><?php echo !empty($student_data)?$student_data[0]['course_end_date']:'';?></td>
										</tr>
										<tr>
											<td>Batch</td>
											<td><?php echo !empty($batch_name)?$batch_name[0]['batch_name']:'';?></td>
										
											<td>Result</td>
											<td><?php echo !empty($student_data)?$student_data[0]['grade']:'';?></td>
										</tr>
										<tr>
											<td>Relation</td>
											<td><?php echo !empty($student_data)?$student_data[0]['relation']:'';?></td>
										</tr>
									</tbody>
								</table>
								<br>
                                <div class="col-lg-12 col-sm-12" style="text-align:center;">
									<div class="admission_field_holder">
										<button class="btn btn-danger" onclick="printDiv('printableArea')"><i class="fa fa-print"></i> Print</button>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div> 
</section> 

<script>
  function printDiv(id) {
            var divContents = document.getElementById(id).innerHTML;
            var printWindow = window.open('', '', 'height=3508,width=2480');
            printWindow.document.write('<html><head><title>DIV Contents</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }
</script>
