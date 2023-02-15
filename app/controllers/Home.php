<?php
	
	/**
	 * home class
	 */
	class Home
	{
		use Controller;
		
		/**
		 * @return void
		 */
		public function index(): void {
			
			// Create new Timer
			$timer = new Timer;
			
			/* Retrieve timer data
				done by _id
				TODO: Should be changed to by name later
			*/
			$data['timer'] = $timer->get_timer(1)['date'];
			
			/* User Session Data*/
			$data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->username;
			
			// Set View
			$this->view('home',$data);
		}
		
	}
