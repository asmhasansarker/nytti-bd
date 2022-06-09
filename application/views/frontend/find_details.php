
<!----- Page Title Start ----->
<style>
   .data_table>tbody>tr>td{
       
   }
</style>

<section class="edu_page_title_wrapper">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
						<div class="edu_page_title_text">
							<h1>Student Info & Result</h1>
							<ul>
								<li><a href="<?php echo base_url();?>"><?php echo html_escape($this->common->languageTranslator('ltr_home'));?></a></li>
								<li><a href="javascript:void(0);">Student Info & Result</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!----- About Section Start ----->
        <section class="edu_about_wrapper">
			<div class="container">
			    <div class="col-lg-12 col-sm-12" style="text-align:center; padding-top: 20px;">
					<div class="admission_field_holder">
						<button class="btn btn-danger" onclick="printDiv('printableArea')"><i class="fa fa-print"></i> Print</button>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12">
                <div class="row" id="printableArea">
						<!--<div class="col-lg-12" style="text-align:center;">-->
						<!--	<img src="<?php //echo 'https://nytti.com.bd/uploads/students/nytti_header.PNG';?>" alt="" >-->
						<!--</div>-->
						<div class="col-lg-12">
                            <div class="row form"> 
								<div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-12 form-head" style="padding: 0px; text-align:center;">
                                            <img src="<?php echo "https://nytti.com.bd/assets/images/Capture.PNG";?>">
                                        </div>
                                        <div class="col-lg-12 form-head" style="padding: 0px; padding-top:40px; text-align:center;">
                                            <h2 style="font-weight:bold; font-size: 32px; background: #4e86c9; color:white;">Admission Form</h2>
                                        </div>
                                        <br>
                                        <div class="col-lg-12" style="margin-bottom:20px;">
                                            <div class="row form">
                                                <div class="col-lg-12 form-head">
                                                    <h5 style="color:green;"><?php echo $this->session->flashdata('message'); ?></h5>
                                                </div>
                                                <div class="col-lg-6 col-sm-6">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label style="font-size: 18px;">Name: <?php echo !empty($student_data)?$student_data[0]['name']:'';?> </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6" style="text-align: right;">
                                                    <div class="admission_field_holder">
                                                        <img src="<?php echo 'https://nytti.com.bd/uploads/students/'.$student_data[0]['image'];?>" alt="" style="height: 120px; width: 100px;" >
                                                    </div>
                                                </div>

                                                <br>




                                                <table width="100%" height="50" class="text-center tbl1">
                                                    <tbody>
                                                        <tr>
                                                            <td style="border: 1px solid gray; font-size: 18px;">Father’s Name</td>
                                                            <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['father_name']:'';?></td>
                                                       
                                                            <td style="border: 1px solid gray; font-size: 18px;">Mother’s Name</td>
                                                            <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['mother_name']:'';?></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: 1px solid gray; font-size: 18px;">Present Address</td>
                                                            <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['present_address']:'';?></td>
                                                    
                                                            <td style="border: 1px solid gray; font-size: 18px;">Permanent Address</td>
                                                            <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['permanent_address']:'';?></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: 1px solid gray; font-size: 18px;">Office Address (If Applicable)</td>
                                                            <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['office_address']:'';?></td>
                                                      
                                                            <td style="border: 1px solid gray; font-size: 18px;">National ID</td>
                                                            <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['nid']:'';?></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: 1px solid gray; font-size: 18px;">Occupation</td>
                                                            <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['occupation']:'';?></td>
                                                        
                                                            <td style="border: 1px solid gray; font-size: 18px;">Date of Birth</td>
                                                            <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['dob']:'';?></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: 1px solid gray; font-size: 18px;">Nationality</td>
                                                            <td style="border: 1px solid gray; font-size: 18px;">Bangladesh</td>
                                                      
                                                            <td style="border: 1px solid gray; font-size: 18px;">Blood Group</td>
                                                            <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['blood_group']:'';?></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: 1px solid gray; font-size: 18px;">Gender</td>
                                                            <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['gender']:'';?></td>
                                                      
                                                            <td style="border: 1px solid gray; font-size: 18px;">Phone</td>
                                                            <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['contact_no']:'';?></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: 1px solid gray; font-size: 18px;">Email</td>
                                                            <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['email']:'';?></td>
                                                     
                                                            <td style="border: 1px solid gray; font-size: 18px;">Guardian Number</td>
                                                            <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['guardian_number']:'';?></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: 1px solid gray; font-size: 18px;">Relationship</td>
                                                            <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['relationship']:'';?></td>
                                                            <td style="border: 1px solid gray; font-size: 18px;">-</td>
                                                            <td style="border: 1px solid gray; font-size: 18px;">-</td>
                                                        </tr>
                                                       
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-lg-12" id="getintouch-part" style="margin-bottom:30px;">
                                            <div class="form-head">
                                                <h5>Educational Background</h5>
                                            </div>
                                            <table width="100%" height="50" class="text-center tbl1">
                                                <thead>
                                                    <tr>
                                                        <th style="border: 1px solid gray; font-size: 18px;">Degree</th>
                                                        <th style="border: 1px solid gray; font-size: 18px;">School/College/University</th>
                                                        <th style="border: 1px solid gray; font-size: 18px;">Board</th>
                                                        <th style="border: 1px solid gray; font-size: 18px;">Year of Passing</th>
                                                        <th style="border: 1px solid gray; font-size: 18px;">Division / GPA</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="border: 1px solid gray; font-size: 18px;">S.S.C / O Level</td>
                                                        <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['s_university']:'';?></td>
                                                        <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['s_board']:'';?></td>
                                                        <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['s_year']:'';?></td>
                                                        <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['s_gpa']:'';?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border: 1px solid gray; font-size: 18px;">H.S.C / Diploma</td>
                                                        <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['h_university']:'';?></td>
                                                        <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['h_board']:'';?></td>
                                                        <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['h_year']:'';?></td>
                                                        <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['h_gpa']:'';?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border: 1px solid gray; font-size: 18px;">Graduation</td>
                                                        <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['g_university']:'';?></td>
                                                        <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['g_board']:'';?></td>
                                                        <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['g_year']:'';?></td>
                                                        <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['g_gpa']:'';?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border: 1px solid gray; font-size: 18px;">Post Graduation</td>
                                                        <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['pg_university']:'';?></td>
                                                        <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['pg_board']:'';?></td>
                                                        <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['pg_year']:'';?></td>
                                                        <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['pg_gpa']:'';?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    
                                        <div class="col-lg-12" style="margin-bottom:30px;">
                                            <div class="row form">
                                                <div class="col-lg-12 form-head">
                                                    <h5>Reference Details</h5>
                                                </div>
                                                <table width="100%" height="50" class="text-center tbl1">
                                                    <tbody>
                                                        <tr>
                                                            <td style="border: 1px solid gray; font-size: 18px;">Name</td>
                                                            <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['ref_name']:'';?></td>
                                                     
                                                            <td style="border: 1px solid gray; font-size: 18px;">Mobile Number</td>
                                                            <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['phone_no']:'';?></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: 1px solid gray; font-size: 18px;">Batch</td>
                                                            <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['batch_name']:'';?></td>
                                                     
                                                            <td style="border: 1px solid gray; font-size: 18px;">Roll/ID No</td>
                                                            <td style="border: 1px solid gray; font-size: 18px;"><?php echo !empty($student_data)?$student_data[0]['ref_roll_no']:'';?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12" style="">
                                        
                                        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
                                            <table style="width: 100%; position:absolute;">
                        						<tbody>
                        							<tr>
                        								<td style="font-weight:bold;"><span style="font-weight:bold; font-size: 18px; border-top: 1px solid gray;">Student Signature</span></td>
                        								<td style="font-weight:bold; text-align:right; font-size: 18px; "><span style="border-top: 1px solid gray;">Authorized Signature</span></td>
                        							</tr>
                        						</tbody>
                        					</table>
                        					<br>
                        					<br>
                        					<br>
                                            <table style="width: 100%; position:absolute; background: #4e86c9; color: white;">
                        						<tbody>
                        							<tr>
                        								<td style="font-weight:bold;"><span style="font-weight:bold; font-size: 18px;">www.nytti.com.bd</span></td>
                        								<td style="font-weight:bold; text-align:right; font-size: 18px;"><?php echo date_format($date,"Y/m/d"); ?></td>
                        							</tr>
                        						</tbody>
                        					</table>
                        					
                        					
                        					
                        					
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
        <!--                <div class="col-lg-12" style="margin-bottom:30px;">-->
        <!--                    <div class="row form">-->
								<!--<div class="col-lg-12 form-head" style="padding: 0px; background: #ddd4d4; margin-top: 20px;">-->
								<!--	<h6>Course & Result Details</h6>-->
								<!--</div>-->

								<!--<table style="width: 100%;">-->
								<!--	<tbody>-->
								<!--		<tr>-->
								<!--			<td>Start Date</td>-->
								<!--			<td></td>-->
										
								<!--			<td>End Date</td>-->
								<!--			<td><?php echo !empty($student_data)?$student_data[0]['course_end_date']:'';?></td>-->
								<!--		</tr>-->
								<!--		<tr>-->
								<!--			<td>Course Name</td>-->
								<!--			<td></td>-->
										
								<!--			<td>Result</td>-->
								<!--			<td></td>-->
								<!--		</tr>-->
										<!--<tr>-->
										<!--	<td>Relation</td>-->
										<!--	<td><?php //echo !empty($student_data)?$student_data[0]['relation']:'';?></td>-->
										<!--</tr>-->
								<!--	</tbody>-->
								<!--</table>-->
								<!--<br>-->
        <!--                    </div>-->
        <!--                </div>-->
     
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