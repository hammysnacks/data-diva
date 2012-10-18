<?php

class index_controller extends base_controller {

	public function __construct() {
		parent::__construct();
	} 
	
	/*-------------------------------------------------------------------------------------------------
	Access via http://yourapp.com/index/index/
	-------------------------------------------------------------------------------------------------*/
	public function index() {
		
		# Any method that loads a view will commonly start with this
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_index_index'); 
	      		
		# Render the view
			echo $this->template;

	}
	
	public function program() {
		
		# Any method that loads a view will commonly start with this
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_program'); 
	      		
		# Render the view
			echo $this->template;
	}
	
	public function dataviz() {
		
		# Any method that loads a view will commonly start with this
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_dataviz'); 
	      		
		# Render the view
			echo $this->template;
	}
	
		public function inspire() {
		
		# Any method that loads a view will commonly start with this
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_inspire'); 
	      		
		# Render the view
			echo $this->template;
	}
	
		
	
		
} // end class
