<?php

		$url = "https://ippanel.com/services.jspd";
		
		$rcpt_nm = array('09124499659');
		$param = array
					(
						'uname'=>'parsaco',
						'pass'=>'Parsa88480',
						'from'=>'+983000505',
						'message'=>'تست',
						'to'=>json_encode($rcpt_nm),
						'op'=>'send'
					);
					
		$handler = curl_init($url);             
		curl_setopt($handler, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($handler, CURLOPT_POSTFIELDS, $param);                       
		curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
		$response2 = curl_exec($handler);
		if (curl_errno($handler)) {
            echo 'Error:' . curl_error($handler);
        }
		$response2 = json_decode($response2);
		$res_code = $response2[0];
		$res_data = $response2[1];
        echo $res_data;



        $json = file_get_contents('php://input');

        
        curl_close($handler);

?>