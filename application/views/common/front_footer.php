<footer class="edu_footer_wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12 col-12 mb_30">
					<div class="edu_widgets edu_footer_about">
						<img class="footer_logo" src="<?php echo html_escape($this->common->siteLogo); ?>" alt=""/>
						<p><?php echo !empty($frontend_details[0]['abt_frst_desc'])?substr($frontend_details[0]['abt_frst_desc'],0,180):'Consectetur adipiscing elttid do eiuid tempor incididunt ut labereore maeet dolore magna aliqua. Qweeuis ium suspen edisse ultrices.Consectetur adipiscing elttid do eiuid tempor incididunt ut labereore maeet dolore magna aliqua. Qweeuis ium suspen edisse ultrices.';?></p>
						<a class="edu_readMoreBtn" href="<?php echo base_url('about-us');?>"><?php echo html_escape($this->common->languageTranslator('ltr_read_more')); ?></a>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-12">
					<div class="edu_widgets mb_30">
						<div class="edu_footer_title">
							<h4 class="edu_footer_heading"><?php echo html_escape($this->common->languageTranslator('ltr_our_courses')); ?></h4>
							<img src="<?php echo base_url()?>assets/images/half_border.png" alt="">
						</div>
						<ul>
						<?php 
						$batches = $this->db_model->select_data('*','batches use index (id)',array('status'=>'1','admin_id'=>'1'),6);
							if(!empty($batches)){
								foreach($batches as $crs){ 
									echo '<li><a href="'.base_url('courses-details/'.$crs['id']).'"><span>'.$crs['batch_name'].'</span></a></li>';							
								}
							}
							?>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-12">
					<div class="edu_widgets mb_30">
						<div class="edu_footer_title">
							<h4 class="edu_footer_heading"><?php echo html_escape($this->common->languageTranslator('ltr_facilities')); ?></h4>
							<img src="<?php echo base_url()?>assets/images/half_border.png" alt="">
						</div>
						<ul>
						<?php 
						if(!empty($facilities)){
							foreach($facilities as $facility){ ?>
								<li><span><?php echo html_escape($facility['title'])?></span></li>
							<?php 
							}
						}
						?>
						
						</ul>
					</div>
				</div>
				
				<div class="col-lg-2 col-md-6 col-sm-4 col-12">
					<div class="edu_widgets mb_30">
						<div class="edu_footer_title">
							<h4 class="edu_footer_heading"><?php echo html_escape($this->common->languageTranslator('ltr_our_links')); ?></h4>
							<img src="<?php echo base_url();?>assets/images/half_border.png" alt="">
						</div>
						<ul>
							<li><a href="<?php echo base_url();?>"><span><?php echo html_escape($this->common->languageTranslator('ltr_home')); ?></span></a></li>
							<li><a href="<?php echo base_url();?>about-us"><span><?php echo html_escape($this->common->languageTranslator('ltr_about_us')); ?></span></a></li>
							<li><a href="<?php echo base_url();?>courses-offered"><span><?php echo html_escape($this->common->languageTranslator('ltr_courses_offered')); ?></span></a></li>
							<li><a href="<?php echo base_url();?>gallery"><span><?php echo html_escape($this->common->languageTranslator('ltr_gallery')); ?></span></a></li>
							<li><a href="<?php echo base_url();?>facilities"><span><?php echo html_escape($this->common->languageTranslator('ltr_facilities')); ?></span></a></li>
						    <li><a href="<?php echo base_url();?>contact-us"><span><?php echo html_escape($this->common->languageTranslator('ltr_contact_us')); ?></span></a></li>
						    <li><a href="<?php echo base_url();?>privacy-policy"><span><?php echo html_escape($this->common->languageTranslator('ltr_privacy_policy')); ?></span></a></li>
						</ul>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-sm-12 col-12 mb_30">
					<div class="edu_widgets edu_footer_address">
						<div class="edu_footer_title">
							<h4 class="edu_footer_heading"><?php echo html_escape($this->common->languageTranslator('ltr_contact_us')); ?></h4>
							<img src="<?php echo base_url()?>assets/images/half_border.png" alt="">
						</div>
						<ul>
							<li>
								<div class="edu_footer_info">
									<span>Office Address:</span>
										<?php
										if(!empty($frontend_details[0]['address']))
											echo '<a>'.$frontend_details[0]['address'].'</a>';
										else
											echo '<a>04 A, Agroha Nagar, Dewas, Madhya Pradesh 455001</a>';
										?>
								</div>
							</li>
							<li>
								<div class="edu_footer_info">
									<span>Contact Number:</span>
										<?php
										if(!empty($frontend_details[0]['mobile']))
											echo '<a href="tel:+'.$frontend_details[0]['mobile'].'">'.$frontend_details[0]['mobile'].'</a>';
										else
											echo '<a href="tel:+91 9999999999">+91 9999999999</a>';
										?>
								</div>
							</li>
							<li>
								<div class="edu_footer_info">
									<span>Email Address:</span>
										<?php
										if(!empty($frontend_details[0]['email']))
											echo '<a href="mailto:'.$frontend_details[0]['email'].'">'.$frontend_details[0]['email'].'</a>';
										else
											echo '<a href="mailto:example@email.com">example@email.com</a>';
										?>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="edu_copyright_wrapper">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
				<p><?php echo html_escape($this->common->copyrightText); ?></p>
			</div>
		</div>
	</footer>	
	<!---------- GO To Top ------------>
	<a href="javascript:void(0);" id="scroll"><span class="icofont-swoosh-up"></span></a>
    <!----- Script Start ----->
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/swiper.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.appear.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.countTo.js"></script>
	<script src="<?php echo base_url();?>assets/js/toastr.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/tilt.js"></script>
	<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
	<script src="<?php echo base_url();?>assets/js/front-custom.js?<?php echo time();?>"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/datatable/jquery.dataTables.min.js"></script>


	<script>
		var base_url =  window.location.origin+'/narayongonj-traning/';
		function validate_form(target){
		var check = 'valid';
		target.find('input , textarea , select').each(function(){
			var email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/; 
			var url = /(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?/;
			var websiteUrl = /^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$/;
			var image = /\.(jpe?g|gif|png|PNG|SVG|svg|JPE?G)$/;
			var images = /\.(jpe?g|png|PNG|JPE?G)$/;
			var mobile =  /((?:\+|00)[17](?: |\-)?|(?:\+|00)[1-9]\d{0,2}(?: |\-)?|(?:\+|00)1\-\d{3}(?: |\-)?)?(0\d|\([0-9]{3}\)|[1-9]{0,3})(?:((?: |\-)[0-9]{2}){4}|((?:[0-9]{2}){4})|((?: |\-)[0-9]{3}(?: |\-)[0-9]{4})|([0-9]{7}))/;
			var facebook = /^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]/;
			var twitter = /^(https?:\/\/)?(www\.)?twitter.com\/[a-zA-Z0-9(\.\?)?]/;
			var google_plus = /^(https?:\/\/)?(www\.)?plus.google.com\/[a-zA-Z0-9(\.\?)?]/;
			var number = /^[\s()+-]*([0-9][\s()+-]*){1,20}$/; 
			var password = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&#])[A-Za-z\d$@$!%*?&#]{8,}$/;
			var pdfimage = /\.(pdf|PDF)$/;
			var float_num = /^[-+]?[0-9]+\.[0-9]+$/; 
			var youtube = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=|\?v=)([^#\&\?]*).*/;
			var vimeo = /^.*((http|https)?:\/\/(www\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|)(\d+)(?:|\/\?)).*/;
			var TagReg = /[<>`;&=+/()|^%*+]/g;
			var text_only = /^[a-zA-Z ]*$/g; 

			var dropbox = /^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?([a-z0-9]+([\-\.]dropboxusercontent)|dropbox)\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/;
			var embed = /embed/g;
            var excel = /\.(xlsx)$/;
			if($(this).hasClass('require')){

				if((typeof $(this).val() == 'object' && isEmpty($(this).val()) == true) || (typeof $(this).val() != 'object' && $(this).val().trim() == '')){ 
					toastr.error('Some required fields are missing.');
					$(this).addClass('error').focus();
					if($('.edu_accord_parent').length)
						$(this).closest('.edu_accord_parent').addClass('error');
					check = 'novalid';
					return false; 
				}else{
					$(this).removeClass('error');
					if($('.edu_accord_parent').length)
						$(this).closest('.edu_accord_parent').removeClass('error');
					check = 'valid';
				} 
			}

			if((typeof $(this).val() == 'object' && isEmpty($(this).val()) == true) || (typeof $(this).val() != 'object' && $(this).val().trim() != '')){
				var valid = $(this).attr('data-valid'); 				
				if(typeof valid != 'undefined'){
					if(!eval(valid).test($(this).val().trim())){
						$(this).addClass('error').focus();
						toastr.error($(this).attr('data-error'));
						check = 'novalid';
						return false; 
					}else{
						$(this).removeClass('error');
						check = 'valid';
					}
				}
			}
			
		});
		return check;
	}


		$(document).on('click','.addNewStudent', function(){
			
			var formdata = new FormData($('#add_student_form')[0]);
			var type = $(this).attr('data-type');
			formdata.append('type',type)
			var valid_check = validate_form($(this).closest('form'));
			var student_name = $('#add_student_form input[name="name"]').val();
			console.log(valid_check)
			if(valid_check == 'valid'){
				
				if(student_name.length>=50){
					toastr.error(ltr_characters_msg);
					$('#add_student_form input[name="name"]').addClass('error').focus();
					return false;
				}else{
					$('#add_student_form input[name="name"]').removeClass("error");
				}
				
				var father_name = $('#add_student_form input[name="father_name"]').val();
				if(father_name.length>=50){
					toastr.error(ltr_characters_msg);
					$('#add_student_form input[name="father_name"]').addClass('error').focus();
					return false;
				}else{
					$('#add_student_form input[name="father_name"]').removeClass("error");
				}
				
				// var father_designtn = $('#add_student_form input[name="father_designtn"]').val();
				// if(father_designtn.length>=50){
				// 	toastr.error(ltr_characters_msg);
				// 	$('#add_student_form input[name="father_designtn"]').addClass('error').focus();
				// 	return false;
				// }else{
				// 	$('#add_student_form input[name="father_designtn"]').removeClass("error");
				// }
				
				$('.edu_preloader').css('background-color','rgba(255,255,255,0.80)').css('display','block');
				$.ajax({
					method: "POST",
					url: base_url+"ajaxcall/addNewStudent",
					data: formdata,
					processData: false, 
					contentType: false,
					success: function(resp){
						var resp = $.parseJSON(resp);
						if(resp['status'] == '1'){
							toastr.success(resp['msg']);
							if(type == 'add'){
								if(resp['enroll_id'] != '' && resp['password'] != ''){
									$('#add_student_form').html('<div class="enrollmentDetails text-center"><p >'+ltr_password_student_msg+'<b> '+student_name+'</b> is </p><h5 class="padderTop20">'+ltr_enrollment_id+' : '+resp['enroll_id']+'</h5><h5 class="padderBottom20">'+ltr_password+' : '+resp['password']+'</h5><a href="'+base_url+'admin/add-student" class="btn btn-primary">'+ltr_add_another_student+'</a></div>');
								}
							}else{
								setTimeout(function(){
									window.location.href = base_url+'admission';
								},1000);
							}
						}else if(resp['status'] == '0'){
							toastr.error(resp['msg']);
						}else{
							toastr.error(ltr_something_msg);
						}
						$('.edu_preloader').fadeOut();
					},
					error:function(resp){
						toastr.error(ltr_something_msg);
						$('.edu_preloader').fadeOut();
					}
				});
			}
			
		});
		
		$(document).on('click','.studentResult', function(){
    		var formdata = new FormData($('#student_result')[0]);
			$.ajax({
				method: "POST",
				url: base_url+"ajaxcall/findStudent",
				data: formdata,
				processData: false, 
				contentType: false,
				success: function(resp){
				
				},
				error:function(resp){
					toastr.error(ltr_something_msg);
					$('.edu_preloader').fadeOut();
				}
			});
    	});
	</script>
  </body>
</html>