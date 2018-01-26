<?PHP
Class Posting{
		public function req_post($content){
			$options = array(
					'http' => array(
					'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
					'method'  => 'POST',
					'content' => http_build_query($content),
				)
			);
		}
}
?>