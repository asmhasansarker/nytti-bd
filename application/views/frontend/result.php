
<!----- Page Title Start ----->
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
                <div class="col-lg-12 col-sm-12">
                    <form action="<?= base_url('result/student');?>" method="post" enctype="multipart/form-data">
                        <div class="col-lg-6 col-sm-6" style="margin-bottom:20px;">
                            <div class="row form">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="admission_field_holder">
                                        <input type="text" name="enrollment_id" id="enrollment_id" placeholder="Roll/ID No*" class="form-control enrollment_id">
                                        <span style="color:red;"><?php echo form_error('enrollment_id');?></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 text-center">
                                <div class="admission_field_holder">
                                    <div class="submit">
                                        <input type="submit" value="Submit" class="btn edu_admin_btn" data-type="add" style="background: #ff6e66; font-weight:bold; color: white;">
                                     </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>