<?php

//This class is the binary exectable that will be executed by the CRON or whatever
//However the handle_charge function does not actually do anything by itself
//You need to overwrite the handle_charge function over extending the class
//Then the CRON will executed the extended class not this class.
//This will need to bring in the Autoloader!
//
//OR the binary can allow you to select the file that contains the handle charge function.
//It'd just be a like a class that is relative??

class Charger{

	public function handle_charge(){

		//THIS FUNCTION NEEDS TO BE EXTENDED AND OVERWRITTEN BY THE END DEVELOPER
		return false;

	}

}