<?php
	Class Message{
		$message = "";
			Public Function send_message($chat_id, $message){
				$method_ctnt = "sendMessage?chat_id='". $chat_id . "'&text='". $message ."'";
			}
	}
?>