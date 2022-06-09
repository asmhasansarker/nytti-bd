<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct(){
	    	parent::__construct();
			
			// check select language
			$this->load->helper('file');
		$this->load->helper('language');
		$language = $this->general_settings('language_name');
		if($language=="french"){
			$this->lang->load('french_lang', 'french');
		}else if($language=="arabic"){
			$this->lang->load('arabic_lang', 'arabic');
		}else{
			$this->lang->load('english_lang', 'english');
		}
	
    }
	
	
	function general_settings($key_text=''){
        $data = $this->db_model->select_data('*','general_settings',array('key_text'=>$key_text),1);
        return $data[0]['velue_text'];
    }

    function index(){
      $data['title'] =$this->lang->line('ltr_home');
      $data['frontend_details'] = $this->db_model->select_data('*','frontend_details',array('id'=>'1'),1);
      
      $data['Allcourses'] = $this->db_model->select_data('*','courses use index (id)',array('status'=>'1','admin_id'=>'1'),$data['frontend_details'][0]['no_of_course']);
      //print_r($data['Allcourses']);
      // die();
      $data['Allfacilities'] = $this->db_model->select_data('*','facilities use index (id)',array('status'=>'1'),$data['frontend_details'][0]['no_of_facility']);
      $data['courses'] = $this->db_model->select_data('course_name','courses use index (id)',array('status'=>'1','admin_id'=>'1'),5);
      $data['facilities'] = $this->db_model->select_data('title','facilities use index (id)',array('status'=>'1'),5);
       $batches = $this->db_model->select_data('*','batches use index (id)',array('status'=>'1','admin_id'=>'1'));
	  $data['site_Details'] = $this->db_model->select_data('*','site_details',array('id'=>'1'),1);
       $data['currency_decimal'] =$this->general_settings('currency_decimal_code');
	  if(!empty($batches)){
		  foreach($batches as $key =>$value){
			  $batches[$key]['description'] = $this->readMoreWord($value['description'], 150);
		  }
		  $data['batches']= $batches;
	  }else{
		  $data['batches'] =''; 
	  }
      	  $this->load->view('common/front_header',$data);
		  $this->load->view('frontend/home',$data);
		  $this->load->view('common/front_footer',$data);
    }

    function login(){
      if(isset($this->session->userdata['role']))
      {
        $role = $this->session->userdata['role'];
        if($role==1){
          redirect(base_url().'admin/dashboard');
        }elseif($role==3){
          redirect(base_url().'teacher/dashboard');
        }else if($role=='student'){
          redirect(base_url().'student/dashboard');
        }
      } 
      $header['title']=$this->lang->line('ltr_login'); 
      $this->load->view('common/auth_header',$header);
      $this->load->view('frontend/login');
      $this->load->view('common/auth_footer');
    }

    function forgot_password(){
      $header['title']=$this->lang->line('ltr_forgot_password'); 
      $this->load->view('common/auth_header',$header);
      $this->load->view('frontend/forgot_password');
      $this->load->view('common/auth_footer');
    }

    function about(){
      $data['title'] = $this->lang->line('ltr_about'); 
      $data['frontend_details'] = $this->db_model->select_data('*','frontend_details',array('id'=>'1'),1);
      $data['courses'] = $this->db_model->select_data('course_name','courses use index (id)',array('status'=>'1','admin_id'=>'1'),5);
      $data['facilities'] = $this->db_model->select_data('title','facilities use index (id)',array('status'=>'1'),5);
      $this->load->view('common/front_header',$data);
      $this->load->view('frontend/about',$data);
      $this->load->view('common/front_footer',$data);
    }

    function courses(){
      $data['title'] =$this->lang->line('ltr_courses_offered'); 
      $data['frontend_details'] = $this->db_model->select_data('*','frontend_details',array('id'=>'1'),1);
      $data['courses'] = $this->db_model->select_data('course_name','courses use index (id)',array('status'=>'1','admin_id'=>'1'),5);
      
	  $batches = $this->db_model->select_data('*','batches use index (id)',array('status'=>'1','admin_id'=>'1'));
	  if(!empty($batches)){
		  foreach($batches as $key =>$value){
			  $batches[$key]['description'] = $this->readMoreWord($value['description'], 150);
		  }
		  $data['batches']= $batches;
	  }else{
		  $data['batches'] =''; 
	  }
      $data['Allcourses'] = $this->db_model->select_data('*','courses use index (id)',array('status'=>'1','admin_id'=>'1'),$data['frontend_details'][0]['no_of_course']);
      $data['facilities'] = $this->db_model->select_data('title','facilities use index (id)',array('status'=>'1'),5);
	  $data['site_Details'] = $this->db_model->select_data('*','site_details',array('id'=>'1'),1);
	  $data['currency_decimal'] =$this->general_settings('currency_decimal_code');
      $this->load->view('common/front_header',$data);
      $this->load->view('frontend/courses',$data);
      $this->load->view('common/front_footer',$data);
    }

    function admission(){
		$data['title'] = $this->lang->line('ltr_admission'); 
		$data['frontend_details'] = $this->db_model->select_data('*','frontend_details',array('id'=>'1'),1);
		$data['courses'] = $this->db_model->select_data('course_name','courses use index (id)',array('status'=>'1','admin_id'=>'1'),5);
		$data['facilities'] = $this->db_model->select_data('title','facilities use index (id)',array('status'=>'1'),5);
		$data['student_id'] = $id;
		$data['batch_name'] = $this->db_model->select_data('id,batch_name','batches  use index (id)',array('admin_id'=>$this->session->userdata('uid'),'status'=>1),'',array('id','desc'));

		$this->load->view('common/front_header',$data);
		$this->load->view('frontend/admission',$data);
		$this->load->view('common/front_footer',$data);
    }

	 function courses_details($id=""){
		  $data['title'] =$this->lang->line('ltr_course_details'); 
		  $data['currency_decimal'] =$this->general_settings('currency_decimal_code');
		  $data['site_Details'] = $this->db_model->select_data('*','site_details',array('id'=>'1'),1);
		  $data['singel_batches'] = $this->db_model->select_data('*','batches use index (id)',array('status'=>'1','admin_id'=>'1','id'=>$id));
		  $data['batch_fecherd'] = $this->db_model->select_data('*','batch_fecherd',array('batch_id'=>$id));
		  $data['facilities'] = $this->db_model->select_data('title','facilities use index (id)',array('status'=>'1'),5);
		  $batches = $this->db_model->select_data('*','batches use index (id)',array('status'=>'1','admin_id'=>'1','id !='=>$id));
		  if(!empty($batches)){
			  foreach($batches as $key =>$value){
				  $batches[$key]['description'] = $this->readMoreWord($value['description'], 150);
			  }
			  $data['batches']= $batches;
		  }else{
			  $data['batches'] =''; 
		  }
		  $this->load->view('common/front_header',$data);
		  $this->load->view('frontend/courses_details',$data);
		  $this->load->view('common/front_footer',$data);
	 }
	 
	 function enroll_now($id=""){
		  $data['title'] =$this->lang->line('ltr_enroll_now'); 
		  $data['currency_code'] =$this->general_settings('currency_code');
		  $data['facilities'] = $this->db_model->select_data('title','facilities use index (id)',array('status'=>'1'),5);
		  $data['site_Details'] = $this->db_model->select_data('*','site_details',array('id'=>'1'),1);
		  $data['singel_batches'] = $this->db_model->select_data('*','batches use index (id)',array('status'=>'1','admin_id'=>'1','id'=>$id));
		  
		  $this->load->view('common/front_header',$data);
		  $this->load->view('frontend/enroll_now',$data);
		  $this->load->view('common/front_footer',$data);
	 }
	 
    function facilities(){
      $data['title'] = $this->lang->line('ltr_facilities');
      $data['frontend_details'] = $this->db_model->select_data('*','frontend_details',array('id'=>'1'),1);
      $data['courses'] = $this->db_model->select_data('course_name','courses use index (id)',array('status'=>'1','admin_id'=>'1'),5);
      $data['Allfacilities'] = $this->db_model->select_data('*','facilities use index (id)',array('status'=>'1'),$data['frontend_details'][0]['no_of_facility']);
      $data['facilities'] = $this->db_model->select_data('title','facilities use index (id)',array('status'=>'1'),5);
      $this->load->view('common/front_header',$data);
      $this->load->view('frontend/facilities',$data);
      $this->load->view('common/front_footer',$data);
    }

    function contact(){
      $data['title'] = $this->lang->line('ltr_contact_us');
      $data['frontend_details'] = $this->db_model->select_data('*','frontend_details',array('id'=>'1'),1);
      $data['courses'] = $this->db_model->select_data('course_name','courses use index (id)',array('status'=>'1','admin_id'=>'1'),5);
      $data['facilities'] = $this->db_model->select_data('title','facilities use index (id)',array('status'=>'1'),5);
      $this->load->view('common/front_header',$data);
      $this->load->view('frontend/contact',$data);
      $this->load->view('common/front_footer',$data);
    }

    function gallery(){
      $data['title'] = $this->lang->line('ltr_gallery');
      $data['frontend_details'] = $this->db_model->select_data('*','frontend_details',array('id'=>'1'),1);
      $data['courses'] = $this->db_model->select_data('course_name','courses use index (id)',array('status'=>'1','admin_id'=>'1'),5);
      $data['facilities'] = $this->db_model->select_data('title','facilities use index (id)',array('status'=>'1'),5);
      $this->load->view('common/front_header',$data);
      $this->load->view('frontend/gallery',$data);
      $this->load->view('common/front_footer',$data);
    }

    function video_gallery(){
      $data['title'] =$this->lang->line('ltr_video_gallery'); 
      $data['frontend_details'] = $this->db_model->select_data('*','frontend_details',array('id'=>'1'),1);
      $data['courses'] = $this->db_model->select_data('course_name','courses use index (id)',array('status'=>'1','admin_id'=>'1'),5);
      $data['facilities'] = $this->db_model->select_data('title','facilities use index (id)',array('status'=>'1'),5);
      $this->load->view('common/front_header',$data);
      $this->load->view('frontend/video_gallery',$data);
      $this->load->view('common/front_footer',$data);
    }
    
    function privacypolicy(){
      $data['title'] = $this->lang->line('ltr_privacy_policy');
      $data['frontend_details'] = $this->db_model->select_data('*','frontend_details',array('id'=>'1'),1);
      $data['courses'] = $this->db_model->select_data('course_name','courses use index (id)',array('status'=>'1','admin_id'=>'1'),5);
      $data['facilities'] = $this->db_model->select_data('title','facilities use index (id)',array('status'=>'1'),5);
      $data['policy'] = $this->db_model->select_data('*','privacy_policy_data',array('id'=>'1'),1);
      $this->load->view('common/front_header',$data);
      $this->load->view('frontend/privacypolicy',$data);
      $this->load->view('common/front_footer',$data);
    }
     function privacyandpolicy(){
      $data['title'] = $this->lang->line('ltr_privacy_policy');
      $data['frontend_details'] = $this->db_model->select_data('*','frontend_details',array('id'=>'1'),1);
      $data['courses'] = $this->db_model->select_data('course_name','courses use index (id)',array('status'=>'1','admin_id'=>'1'),5);
      $data['facilities'] = $this->db_model->select_data('title','facilities use index (id)',array('status'=>'1'),5);
      $data['policy'] = $this->db_model->select_data('*','privacy_policy_data',array('id'=>'1'),1);
      
      $this->load->view('frontend/privacyandpolicy',$data);
     
    }
	function readMoreWord($story_desc,$C_word='') {
        $chars = 90;
        if(!empty($C_word)){
            $chars =$C_word;
        }
        
        $count_word = strlen($story_desc);
        if($count_word>$chars){
           
    	    $story_desc = substr($story_desc,0,$chars);  
    	    $story_desc = substr($story_desc,0,strrpos($story_desc,' '));  
    	    $story_desc = $story_desc ;
    	    return $story_desc ;  
    	    
        }else{
            return $story_desc ; 
        }
    }
	
	// payment methode
	function paypal_success(){ 
		
	  $header['title']=$this->lang->line('ltr_home_page');
	  
	  $this->load->view('common/front_header',$header);
      $this->load->view('frontend/success');
      $this->load->view('common/front_footer');
    } 
	
	function blog($id=""){ 
      $header['title']=$this->lang->line('ltr_blog');
	  $this->load->view('common/front_header',$header);
	  if(empty($id)){
		  $data['gallery'] = $this->db_model->select_data('image, title','gallery use index (id)',array('status'=>'1','type'=>'Image'),9,array('id','desc'));
		  $data['blog']=$this->db_model->select_data('*','blog',array('status'=>1),5,array('id','desc'));
		  $data['recent_blog']=$this->db_model->select_data('*','blog',array('status'=>1),5,array('id','desc'));
		  $data['facilities'] = $this->db_model->select_data('title','facilities use index (id)',array('status'=>'1'),5);
		  $this->load->view('frontend/blog',$data);
	  }else{
	      $data['blog']=$this->db_model->select_data('*','blog',array('status'=>1,'id'=>$id));
		  $data['recent_blog']=$this->db_model->select_data('*','blog',array('status'=>1),5,array('id','desc'));
          $data['id'] = $id;	
		  $data['comments'] = $this->db_model->select_data('*','blog_comments',array('blog_id'=>$id,'status'=>1));	
		  $data['facilities'] = $this->db_model->select_data('title','facilities use index (id)',array('status'=>'1'),5);
		   $data['gallery'] = $this->db_model->select_data('image, title','gallery use index (id)',array('status'=>'1','type'=>'Image'),9,array('id','desc'));
		  $this->load->view('frontend/singel_blog',$data);		  
	  }
      $this->load->view('common/front_footer');
    } 
	function convertCurrency(){
          $apikey = $this->general_settings('currency_converter_api');
        
          $from_Currency = urlencode($from_currency);
          $to_Currency = urlencode($to_currency);
          $query =  "{$from_Currency}_{$to_Currency}";
        
          // change to the free URL if you're using the free version
          $json = file_get_contents("https://free.currconv.com/api/v7/convert?q={$query}&compact=ultra&apiKey={$apikey}");
          $obj = json_decode($json, true);
        
          $val = floatval($obj["$query"]);
        
        
          $total = $val * $amount;
          return number_format($total, 2, '.', '');
        }
     function paypal_cancel(){ 
        // Load payment failed view 
        $this->load->view('paypal/cancel');
     } 
      
     function paypal_ipn(){ 
        // Retrieve transaction data from PayPal IPN POST 
        $paypalInfo = $this->input->post(); 
// 		print_r($paypalInfo);
// 		die();
        if(!empty($paypalInfo)){ 
            $admin_id =$this->db_model->select_data('id','users use index (id)',array('role'=>1),1)[0]['id'];
			$custom =explode(",",$paypalInfo['custom']);
			$name = $custom[0];
			$email = $custom[1];
			$mobile = $custom[2];
			$prevRecd = $this->db_model->select_data('id as studentId,email as userEmail,name as fullName,enrollment_id as enrollmentId,contact_no as mobile,app_version as versionCode, batch_id as batchId,admin_id as adminId,admission_date as admissionDate, image, token','students use index (id)',array('email'=>$email),1);
			
			if(empty($prevRecd)){
				$siteData = array();
				$siteData['word_for_enroll'] = $this->common->enrollWord;
				$data_arr['admin_id'] = $admin_id;            
				$data_arr['login_status'] = 0;
				$lastrecord = $this->db_model->select_data('id','students use index (id)',array('admin_id'=>$admin_id),1,array('id','desc'));             
				if(!empty($lastrecord)){
					$last_id = $lastrecord[0]['id'];
				}else{
					$last_id = 0;
				}
				
				$password = $siteData['word_for_enroll'].$admin_id.$last_id.rand(1000,5000);
				$enrolid = $siteData['word_for_enroll'].$admin_id.$last_id.rand(10,100);
				$data_arr['name'] = $name;
				$data_arr['email'] = $email;
				$data_arr['batch_id'] = $paypalInfo['item_number'];
				$data_arr['added_by'] = 'student';
				$data_arr['status'] = 1;
				$data_arr['enrollment_id'] = $enrolid;
				$data_arr['password'] = md5($password);
				$data_arr['admission_date'] = date('Y-m-d');
				$data_arr['image']='student_img.png';
				$data_arr['contact_no']= $mobile;
				//update app version and login status
				$data_arr['login_status']= 1;
				$data_arr['last_login_app']= date("Y-m-d H:i:s");
				
				$data_arr = $this->security->xss_clean($data_arr);
				$ins = $this->db_model->insert_data('students',$data_arr);
				if($ins){
					 //check batch type
					$batch_type =$this->db_model->select_data('*','batches use index (id)',array('id'=>$paypalInfo['item_number']),1);
					if($batch_type[0]['batch_type']==2){
						if(!empty($paypalInfo['mc_gross'])){
							
						   $amount = $paypalInfo['mc_gross'];
						}
						
						$data_pay=array(
								   'student_id'=>$ins,
								   'batch_id'=>$paypalInfo['item_number'],
								   'transaction_id'=> !empty($paypalInfo['txn_id'])?$paypalInfo['txn_id']:'',
									  'amount'=> !empty($amount)?$amount:'',
										);
						$data_pay = $this->security->xss_clean($data_pay);
						$insf = $this->db_model->insert_data('student_payment_history',$data_pay);
						
						$this->db_model->update_data_limit('students use index (id)',array('payment_status'=>1),array('id'=>$ins),1);
					}
					$session_arr['customerBatchName']= !empty($batch_type[0]['batch_name'])? trim($batch_type[0]['batch_name']):'';
					$session_arr['customerprice']= !empty($amount)? trim($amount):'';
					//batch asin
					$data_batch= array(
								 'student_id'=>$ins,
								 'batch_id'=>$paypalInfo['item_number'],
								 'added_by'=>'student'
										 );
				   $this->db_model->insert_data('sudent_batchs',$data_batch);
					// send email 
				   $title = $this->db_model->select_data('site_title','site_details','',1,array('id','desc'))[0]['site_title'];
					$subj = $title.'- '.$this->lang->line('ltr_credentials');
					$em_msg = $this->lang->line('ltr_hey').' '.ucwords($name).', '.$this->lang->line('ltr_congratulation').' <br/><br/>'.$this->lang->line('ltr_successfully_enrolled').'<br/><br/>'.$this->lang->line('ltr_login_details').'<br/><br/> '.$this->lang->line('ltr_enrolment_id').' : '.$enrolid.'<br/><br/>'.$this->lang->line('ltr_password').' : '.$password.'';

					@$this->SendMail($email, $subj, $em_msg);

					$session_arr['customerId']= !empty($ins)? trim($ins):'';
					$session_arr['customerPwd']= !empty($password)? trim($password):'';
					$session_arr['customerBatchId']= !empty($paypalInfo['item_number'])? trim($paypalInfo['item_number']):'';

					$this->session->set_userdata($session_arr);
					
					
				}
			}else{
				
				$siteData = array();
				$data_arr['login_status'] = 0;
				$last_id = $prevRecd[0]['studentId'] ;
				$enrolid = $prevRecd[0]['enrollmentId'];
				$password = $enrolid.$admin_id.$last_id.rand(1000,5000);
				
				$data_arr['name'] = $name;
				$data_arr['batch_id'] = $paypalInfo['item_number'];
				$data_arr['added_by'] = 'student';
				$data_arr['status'] = 1;
				$data_arr['password'] = md5($password);
				$data_arr['contact_no']= $mobile;
				//update app version and login status
				$data_arr['login_status']= 1;
				$data_arr['last_login_app']= date("Y-m-d H:i:s");
				
				$data_arr = $this->security->xss_clean($data_arr);
				$this->db_model->update_data_limit('students',$data_arr,array('id'=>$last_id));
		
				 //check batch type
				$batch_type =$this->db_model->select_data('*','batches use index (id)',array('id'=>$paypalInfo['item_number']),1);
				if($batch_type[0]['batch_type']==2){
					if(!empty($paypalInfo['payment_gross'])){
							
						   $amount = $paypalInfo['payment_gross'];
						}
					$data_pay=array(
							   'student_id'=>$last_id,
							   'batch_id'=>$paypalInfo['item_number'],
							   'transaction_id'=> !empty($paypalInfo['txn_id'])?$paypalInfo['txn_id']:'',
								  'amount'=> !empty($amount)?$amount:'',
									);
					$data_pay = $this->security->xss_clean($data_pay);
					$insg = $this->db_model->insert_data('student_payment_history',$data_pay);
					
					$this->db_model->update_data_limit('students use index (id)',array('payment_status'=>1),array('id'=>$last_id),1);
				}
				$session_arr['customerBatchName']= !empty($batch_type[0]['batch_name'])? trim($batch_type[0]['batch_name']):'';
				$session_arr['customerprice']= !empty($amount)? trim($amount):'';
				//batch asin
				$data_batch= array(
								 'student_id'=>$last_id,
								 'batch_id'=>$paypalInfo['item_number'],
								 'added_by'=>'student'
										 );
				$this->db_model->insert_data('sudent_batchs',$data_batch);
				// send email 
			   $title = $this->db_model->select_data('site_title','site_details','',1,array('id','desc'))[0]['site_title'];
				$subj = $title.'- '.$this->lang->line('ltr_credentials');
				$em_msg = $this->lang->line('ltr_hey').' '.ucwords($name).', '.$this->lang->line('ltr_congratulation').' <br/><br/>'.$this->lang->line('ltr_successfully_enrolled').'<br/><br/>'.$this->lang->line('ltr_login_details').'<br/><br/> '.$this->lang->line('ltr_enrolment_id').' : '.$enrolid.'<br/><br/>'.$this->lang->line('ltr_password').' : '.$password.'';
				@$this->SendMail($email, $subj, $em_msg);
				
				$session_arr['customerId']= !empty($last_id)? trim($last_id):'';
				$session_arr['customerPwd']= !empty($password)? trim($password):'';
				$session_arr['customerBatchId']= !empty($paypalInfo['item_number'])? trim($paypalInfo['item_number']):'';
				$this->session->set_userdata($session_arr);
				
			}
        }
		return $paypalInfo;
    } 
	
	function paypal_form($batch_id=''){
		// Load paypal library 
        $this->load->library('paypal_lib'); 
		$batch_data = $this->db_model->select_data('*','batches',array('id'=>$batch_id));
		if($batch_data[0]['batch_type']==2){
			if(!empty($batch_data[0]['batch_offer_price'])){
				$amount = $batch_data[0]['batch_offer_price'];
			}else{
				$amount = $batch_data[0]['batch_price'];	
			}
		}
		$batc_name =$batch_data[0]['batch_name'];
		$custom_name= $_GET['name'].','.$_GET['email'].','.$_GET['mobile'];
        // Set variables for paypal form 
        $returnURL = base_url().'success'; //payment success url 
        $cancelURL = base_url().'enroll-now/'.$batch_id; //payment cancel url 
        $notifyURL = base_url().'paypal-ipn'; //ipn url 
        
         
        // Add fields to paypal form  
        $this->paypal_lib->add_field('return', $returnURL); 
        $this->paypal_lib->add_field('cancel_return', $cancelURL); 
        $this->paypal_lib->add_field('notify_url', $notifyURL); 
        $this->paypal_lib->add_field('item_name', $batc_name); 
        $this->paypal_lib->add_field('custom',$custom_name); 
        $this->paypal_lib->add_field('item_number',$batch_id); 
        $this->paypal_lib->add_field('amount',  $amount); 
        $this->paypal_lib->add_field('business',$this->general_settings('sandbox_accounts')); 
        $this->paypal_lib->add_field('rm','2');    // Return method = POST 
        $this->paypal_lib->add_field('cmd','_xclick'); 
        $this->paypal_lib->add_field('currency_code',$this->general_settings('currency_code') ); 
        $this->paypal_lib->add_field('quantity', '1'); 
       $this->paypal_lib->button('Pay Now!'); 
        // Render paypal form 
        $this->paypal_lib->paypal_auto_form(); 
    } 
	public function SendMail($tomail='', $subject='', $msg=''){
		$frommail =$this->general_settings('smtp_mail');
		$frompwd =$this->general_settings('smtp_pwd');
		$title = $this->db_model->select_data('site_title','site_details','',1,array('id','desc'))[0]['site_title'];

		$this->load->library('email');
		$config = array();
		$config['protocol'] = $this->general_settings('server_type');
		$config['smtp_host'] = $this->general_settings('smtp_host');
		$config['smtp_port'] = $this->general_settings('smtp_port');
		$config['smtp_user'] = $frommail;
		$config['smtp_pass'] = $frompwd;
		$config['charset'] = "utf-8";
		$config['mailtype'] = "html";
		$config['smtp_crypto'] = $this->general_settings('smtp_encryption');
		$config['newline'] = "\r\n";
		
		// Set to, from, message, etc.
		$this->email->initialize($config);
		$this->email->from($frommail, $title);
		$this->email->to($tomail);
		
		$this->email->subject($subject);
		$this->email->message($msg);
		
		@$this->email->send();
		return true;
	}

	public function save_student(){
		// if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')){
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('father_name','Father Name','required');
		$this->form_validation->set_rules('mother_name','Mother Name','required');
		$this->form_validation->set_rules('present_address','Present Address','required');
		$this->form_validation->set_rules('permanent_address','Permanent Address','required');
		// $this->form_validation->set_rules('office_address','Office Address','required');
		$this->form_validation->set_rules('nid','NID','required');
		// $this->form_validation->set_rules('dob','DOB','required');
		$this->form_validation->set_rules('country','Country','required');
		$this->form_validation->set_rules('blood_group','Blood Group','required');
		$this->form_validation->set_rules('email','Email','required|is_unique[students.email]');
		$this->form_validation->set_rules('guardian_number','Guardian Number','required');
		$this->form_validation->set_rules('relationship','Relationship','required');
		// $this->form_validation->set_rules('email','email','required|is_unique[students.email]');

		$post= $this->input->post();

		// print_r($post);

		$config['upload_path'] ='./uploads/students/';
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size']    = '0';		
		$this->load->library('upload', $config);

		
		if(isset($_FILES['stu_pic']) && !empty($_FILES['stu_pic']['name'])){
			if ($this->upload->do_upload('stu_pic')){
				$uploaddata = $this->upload->data();
				$pic = $uploaddata['raw_name'];
				$pic_ext = $uploaddata['file_ext'];
				$image_name = $pic.'_'.date('ymdHis').$pic_ext;
				rename('./uploads/students/'.$pic.$pic_ext,'./uploads/students/'.$image_name);
				$image = $image_name;
			}else{
				$resp = array('status'=>'0', 'msg' => $this->upload->display_errors());
				echo json_encode($resp,JSON_UNESCAPED_SLASHES);
				die();
			}
		}else{
			$image='student_img.png';
		}



		$siteData['word_for_enroll'] = $this->common->enrollWord;
		$enrolid = $siteData['word_for_enroll'].$admin_id.$last_id.rand(10,100);
        $enrollment_id = $enrolid;
		$admin_id = $this->session->userdata('uid');


		if ($this->form_validation->run() != false) {
			$data=array(
				'admin_id'=>$admin_id,
				'enrollment_id'=>$enrollment_id,
				'name'=>$post['name'],
				'father_name'=>$post['father_name'],
				'mother_name'=>$post['mother_name'],
				'image'=>$image,
				'present_address'=>$post['present_address'],
				'permanent_address'=>$post['permanent_address'],
				'office_address'=>$post['office_address'],
				'nid'=>$post['nid'],
				'occupation'=>$post['occupation'],
				'dob'=>$post['dob'],
				'country'=>$post['country'],
				'blood_group'=>$post['blood_group'],
				'gender'=>$post['gender'],
				'contact_no'=>$post['phone'],
				'email'=>$post['email'],
				'guardian_number'=>$post['guardian_number'],
				'relationship'=>$post['relationship'],
				's_university'=>$post['s_university'],
				's_board'=>$post['s_board'],
				's_year'=>$post['s_year'],
				's_gpa'=>$post['s_gpa'],
				'h_university'=>$post['h_university'],
				'h_board'=>$post['h_board'],
				'h_year'=>$post['h_year'],
				'h_gpa'=>$post['h_gpa'],
				'g_university'=>$post['g_university'],
				'g_board'=>$post['g_board'],
				'g_year'=>$post['g_year'],
				'g_gpa'=>$post['g_gpa'],
				'pg_university'=>$post['pg_university'],
				'pg_board'=>$post['pg_board'],
				'pg_year'=>$post['pg_year'],
				'pg_gpa'=>$post['pg_gpa'],
				'ref_name'=>$post['ref_name'],
				'phone_no'=>$post['ref_phone'],
				'batch_name'=>$post['batch_name'],
				'ref_roll_no'=>$post['ref_roll_no'],
				'relation'=>$post['relation'],
				'login_status'=>0,
				'status'=>1
			);
	
			$ins = $this->db_model->insert_data('students',$data);
			$id = $this->db->insert_id();
			$q = $this->db->get_where('students', array('id' => $id))->row();
            if($ins){
				$this->session->set_flashdata('message', 'Application Successfully');
				redirect('admission_details/'.$q->enrollment_id);
			}
		}else{
			 print_r($data);exit;
			return $this->admission();
		}
	// }
	}

	function student_result(){
		$data['title'] = $this->lang->line('ltr_contact_us');
		$data['frontend_details'] = $this->db_model->select_data('*','frontend_details',array('id'=>'1'),1);
		$data['courses'] = $this->db_model->select_data('course_name','courses use index (id)',array('status'=>'1','admin_id'=>'1'),5);
		$data['facilities'] = $this->db_model->select_data('title','facilities use index (id)',array('status'=>'1'),5);
		$this->load->view('common/front_header',$data);
		$this->load->view('frontend/result',$data);
		$this->load->view('common/front_footer',$data);
	}

	function find_student_result(){
		$this->form_validation->set_rules('enrollment_id','enrollment id','required');
			if ($this->form_validation->run() != false) {

			$data['student_data'] = $this->db_model->select_data('*','students use index (id)',array('enrollment_id'=>$this->input->post('enrollment_id')));
			$data['batch_name'] = $this->db_model->select_data('id,batch_name','batches  use index (id)',array('status'=>1, 'id'=>$data['student_data'][0]['batch_id']),'',array('id','desc'));
			$header['title']='Student Details';
			$data['student_id'] = $id;
			$data['baseurl'] = base_url();
			$this->load->view('common/front_header',$data);
			$this->load->view('frontend/find_result',$data);
			$this->load->view('common/front_footer',$data);

		}else{
			return $this->student_result();
		}
	}


	function admission_details($id=""){
		if ($id != '') {
			$data['student_data'] = $this->db_model->select_data('*','students use index (id)',array('enrollment_id'=>$id));
			$data['batch_name'] = $this->db_model->select_data('id,batch_name','batches  use index (id)',array('status'=>1, 'id'=>$data['student_data'][0]['batch_id']),'',array('id','desc'));
			$header['title']='Student Details';
			$data['student_id'] = $id;
			$data['baseurl'] = base_url();
			$this->load->view('common/front_header',$data);
			$this->load->view('frontend/find_details',$data);
			$this->load->view('common/front_footer',$data);

		}else{
			return $this->index();
		}
	}

}