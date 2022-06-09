
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
                 
						<a class="btn btn-warning" href="https://nytti.com.bd/admission_details/<?php echo !empty($student_data)?$student_data[0]['enrollment_id']:'';?>"><i class="fa fa-print"></i> Application Form</a>
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
                                            <h2 style="font-weight:bold; font-size: 42px; background: #4e86c9; color:white;">Mark Sheet</h2>
                                        </div>
                                        <br>
                                        <div class="col-lg-12" style="">
                                            <table style="width: 100%;">
            									<tbody>
            										<tr>
            											<td style="font-weight:bold;"><span style="font-weight:bold; font-size: 20px;">Roll/ID No: <?php echo !empty($student_data)?$student_data[0]['enrollment_id']:'';?></span></td>
            											<td style="font-weight:bold; text-align:right; font-size: 20px;"><img src="<?php echo 'https://nytti.com.bd/uploads/students/'.$student_data[0]['image'];?>" alt="" style="height: 120px; width: 100px;" ></td>
            										</tr>
            									</tbody>
            								</table>
                                            
                                            <table style="width: 100%;" class="data_table">
            									<tbody>
            										<tr>
            											<td style="font-weight:bold; padding-bottom: 15px; font-size: 20px;">Name Of Students</td>
            											<td style="font-weight:bold; padding-bottom: 15px; font-size: 20px;"><?php echo !empty($student_data)?$student_data[0]['name']:'';?></td>
            										</tr>
            										<tr>
            											<td style="padding-bottom: 15px; font-size: 20px;">Father Name</td>
            											<td style="padding-bottom: 15px; font-size: 20px;"><?php echo !empty($student_data)?$student_data[0]['father_name']:'';?></td>
            										</tr>
            										<tr>
            											<td style="padding-bottom: 15px; font-size: 20px;">Mother’s Name</td>
            											<td style="padding-bottom: 15px; font-size: 20px;"><?php echo !empty($student_data)?$student_data[0]['mother_name']:'';?></td>
            										</tr>
            										<tr>
            											<td style="padding-bottom: 15px; font-size: 20px;">Date Of Birth</td>
            											<td style="padding-bottom: 15px; font-size: 20px;"><?php echo !empty($student_data)?$student_data[0]['dob']:'';?></td>
            										</tr>
            										<tr>
            											<td style="padding-bottom: 15px; font-size: 20px;">Name Of Degree/Course</td>
            											<td style="padding-bottom: 15px; font-size: 20px;"><?php echo !empty($batch_name)?$batch_name[0]['batch_name']:'';?></td>
            										</tr>
            										<tr>
            											<td style="padding-bottom: 15px; font-size: 20px;">Duration</td>
            											<td style="padding-bottom: 15px; font-size: 20px;"><?php echo !empty($student_data)?$student_data[0]['course_start_date']:'';?> To <?php echo !empty($student_data)?$student_data[0]['course_end_date']:'';?></td>
            										</tr>
            										<tr>
            											<td style="padding-bottom: 15px; font-size: 20px;">Result</td>
            											<td style="padding-bottom: 15px; font-size: 20px;"><?php echo !empty($student_data)?$student_data[0]['grade']:'';?></td>
            										</tr>
            										<tr>
            											<td style="padding-bottom: 15px; font-size: 20px;">Passing Year</td>
            											<td style="padding-bottom: 15px; font-size: 20px;"><?php $date=''; !empty($student_data)?$date=date_create($student_data[0]['course_start_date']):''; echo date_format($date,'Y'); ?></td>
            										</tr>
            										
            									</tbody>
            								</table>
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