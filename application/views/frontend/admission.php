
<!----- Page Title Start ----->
<section class="edu_page_title_wrapper">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
						<div class="edu_page_title_text">
							<h1><?php echo html_escape($this->common->languageTranslator('ltr_admission'));?></h1>
							<ul>
								<li><a href="<?php echo base_url();?>"><?php echo html_escape($this->common->languageTranslator('ltr_home'));?></a></li>
								<li><a href="javascript:void(0);"><?php echo html_escape($this->common->languageTranslator('ltr_admission'));?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!----- About Section Start ----->
        <section class="edu_about_wrapper">
			<div class="container">
                <div class="row">
                    <form action="<?= base_url('save/student');?>" method="post" enctype="multipart/form-data">
                        <div class="col-lg-12" style="margin-bottom:20px;">
                            <div class="row form">
                                <div class="col-lg-12 form-head">
                                    <h5 style="color:green;"><?php echo $this->session->flashdata('message'); ?></h5>
                                </div>
                                <div class="col-lg-12 form-head">
                                    <h5>PERSONAL &amp; CONTACT INFORMATION</h5>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="admission_field_holder">
                                        <input type="text" name="name" id="name" value="<?php echo !empty($student_data)?$student_data[0]['name']:'';?>" placeholder="Student Name*" class="form-control name">
                                        <span style="color:red;"><?php echo form_error('name');?></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="admission_field_holder">
                                        <label><?php echo html_escape($this->common->languageTranslator('ltr_image'));?></label>
                                        <input type="file" id="file" name="stu_pic" value="<?php echo !empty($student_data)?base_url('uploads/students').$student_data[0]['image']:'';?>">
                                        <p class="fileNameShow"></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="admission_field_holder">
                                        <input type="text" name="father_name" placeholder="Father’s Name*" class="form-control" value="<?php echo !empty($student_data)?$student_data[0]['father_name']:'';?>">
                                        <span style="color:red;"><?php echo form_error('father_name');?></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="admission_field_holder">
                                        <input type="text" name="mother_name" placeholder="Mother’s Name*" class="form-control" value="<?php echo !empty($student_data)?$student_data[0]['mother_name']:'';?>">
                                        <span style="color:red;"><?php echo form_error('mother_name');?></span>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <div class="admission_field_holder">
                                        <input type="text" name="present_address" placeholder="Present Address*" class="form-control" value="<?php echo !empty($student_data)?$student_data[0]['present_address']:'';?>">
                                        <span style="color:red;"><?php echo form_error('present_address');?></span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="admission_field_holder">
                                        <input type="text" name="permanent_address" placeholder="Permanent Address*" class="form-control" value="<?php echo !empty($student_data)?$student_data[0]['permanent_address']:'';?>">
                                        <span style="color:red;"><?php echo form_error('permanent_address');?></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="admission_field_holder">
                                        <input type="text" name="office_address" placeholder="Office Address (If Applicable)" class="form-control" value="<?php echo !empty($student_data)?$student_data[0]['office_address']:'';?>">
                                        <span style="color:red;"><?php echo form_error('office_address');?></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="admission_field_holder">
                                        <input type="text" name="nid" placeholder="National ID*" class="form-control" value="<?php echo !empty($student_data)?$student_data[0]['nid']:'';?>">
                                        <span style="color:red;"><?php echo form_error('nid');?></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="admission_field_holder">
                                        <input type="text" name="occupation" placeholder="Occupation*" class="form-control" value="<?php echo !empty($student_data)?$student_data[0]['occupation']:'';?>">
                                        <span style="color:red;"><?php echo form_error('occupation');?></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="admission_field_holder">
                                        <input type="date" name="dob" value="<?php echo !empty($student_data)?$student_data[0]['dob']:'';?>" placeholder="Date of Birth*" class="form-control ">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="admission_field_holder">
                                        <select class="form-control " name="country">
                                            <option value="">Nationality*</option>
                                            <option value="1">Bangladeshi</option>
                                            <option value="2">Other Country</option>
                                        </select>
                                        <span style="color:red;"><?php echo form_error('country');?></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-5 col-sm-4">
                                            <div class="admission_field_holder">
                                                <select class="form-control " name="blood_group">
                                                    <option value="">Blood Group*</option>
                                                    <option value="A+">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="AB-">AB-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>
                                                </select>
                                                <span style="color:red;"><?php echo form_error('blood_group');?></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-sm-8 ru-main text-right">
                                            <div class="admission_field_holder">
                                                <select class="form-control require edu_selectbox_with_search" name="gender" data-placeholder="<?php echo html_escape($this->common->languageTranslator('ltr_gender'));?>">
                                                    <option value=""><?php echo html_escape($this->common->languageTranslator('ltr_gender'));?> </option>
                                                    <option value="male" <?php echo (!empty($student_data) && $student_data[0]['gender']=='male')?'selected':'';?>><?php echo html_escape($this->common->languageTranslator('ltr_male'));?></option>
                                                    <option value="female" <?php echo (!empty($student_data) && $student_data[0]['gender']=='female')?'selected':'';?>><?php echo html_escape($this->common->languageTranslator('ltr_female'));?></option>
                                                    <option value="other" <?php echo (!empty($student_data) && $student_data[0]['gender']=='other')?'selected':'';?>><?php echo html_escape($this->common->languageTranslator('ltr_other'));?></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="admission_field_holder">
                                        <input type="text" name="phone" value="<?php echo !empty($student_data)?$student_data[0]['contact_no']:'';?>" placeholder="Phone*" class="form-control ">
                                        <span style="color:red;"><?php echo form_error('phone');?></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="admission_field_holder">
                                        <input type="text" name="email" value="<?php echo !empty($student_data)?$student_data[0]['email']:'';?>" placeholder="Email*" class="form-control ">
                                        <span style="color:red;"><?php echo form_error('email');?></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="admission_field_holder">
                                        <input type="text" name="guardian_number" value="<?php echo !empty($student_data)?$student_data[0]['guardian_number']:'';?>" placeholder="Guardian’s Phone*" class="form-control ">
                                        <span style="color:red;"><?php echo form_error('guardian_number');?></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="admission_field_holder">
                                        <input type="text" name="relationship" value="<?php echo !empty($student_data)?$student_data[0]['relationship']:'';?>" placeholder="Relationship with the Guardian*" class="form-control ">
                                        <span style="color:red;"><?php echo form_error('relationship');?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12" id="getintouch-part" style="margin-bottom:30px;">
                            <div class="form-head">
                                <h5>Educational Background</h5>
                            </div>
                            <table width="100%" height="50" class="text-center tbl1">
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
                                        <td><input type="text" name="s_university" value="<?php echo !empty($student_data)?$student_data[0]['s_university']:'';?>"></td>
                                        <td><input type="text" name="s_board" value="<?php echo !empty($student_data)?$student_data[0]['s_board']:'';?>"></td>
                                        <td><input type="text" name="s_year" value="<?php echo !empty($student_data)?$student_data[0]['s_year']:'';?>"></td>
                                        <td><input type="text" name="s_gpa" value="<?php echo !empty($student_data)?$student_data[0]['s_gpa']:'';?>"></td>
                                    </tr>
                                    <tr>
                                        <td>H.S.C / Diploma</td>
                                        <td><input type="text" name="h_university" value="<?php echo !empty($student_data)?$student_data[0]['h_university']:'';?>"></td>
                                        <td><input type="text" name="h_board" value="<?php echo !empty($student_data)?$student_data[0]['h_board']:'';?>"></td>
                                        <td><input type="text" name="h_year" value="<?php echo !empty($student_data)?$student_data[0]['h_year']:'';?>"></td>
                                        <td><input type="text" name="h_gpa" value="<?php echo !empty($student_data)?$student_data[0]['h_gpa']:'';?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Graduation</td>
                                        <td><input type="text" name="g_university" value="<?php echo !empty($student_data)?$student_data[0]['g_university']:'';?>"></td>
                                        <td><input type="text" name="g_board" value="<?php echo !empty($student_data)?$student_data[0]['g_board']:'';?>"></td>
                                        <td><input type="text" name="g_year" value="<?php echo !empty($student_data)?$student_data[0]['g_year']:'';?>"></td>
                                        <td><input type="text" name="g_gpa" value="<?php echo !empty($student_data)?$student_data[0]['g_gpa']:'';?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Post Graduation</td>
                                        <td><input type="text" name="pg_university" value="<?php echo !empty($student_data)?$student_data[0]['pg_university']:'';?>"></td>
                                        <td><input type="text" name="pg_board" value="<?php echo !empty($student_data)?$student_data[0]['pg_board']:'';?>"></td>
                                        <td><input type="text" name="pg_year" value="<?php echo !empty($student_data)?$student_data[0]['pg_year']:'';?>"></td>
                                        <td><input type="text" name="pg_gpa" value="<?php echo !empty($student_data)?$student_data[0]['pg_gpa']:'';?>"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    
                        <div class="col-lg-12" style="margin-bottom:30px;">
                            <div class="row form">
                                <div class="col-lg-12 form-head">
                                    <h5>Reference Details</h5>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <div class="admission_field_holder">
                                        <input type="text" name="ref_name" value="<?php echo !empty($student_data)?$student_data[0]['ref_name']:'';?>" placeholder="Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="admission_field_holder">
                                        <input type="text" name="ref_phone" value="<?php echo !empty($student_data)?$student_data[0]['phone_no']:'';?>" placeholder="Mobile Number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="admission_field_holder">
                                        <input type="text" name="batch_name" value="<?php echo !empty($student_data)?$student_data[0]['batch_name']:'';?>" placeholder="Batch" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="admission_field_holder">
                                        <input type="text" name="ref_roll_no" value="<?php echo !empty($student_data)?$student_data[0]['ref_roll_no']:'';?>" placeholder="Roll/ID No" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="admission_field_holder">
                                        <input type="text" name="relation" value="<?php echo !empty($student_data)?$student_data[0]['relation']:'';?>" placeholder="Relation with Student" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <div class="submit">
                                <input type="submit" value="Submit" class="btn edu_admin_btn" data-type="add" style="background: #ff6e66; font-weight:bold; color: white;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>