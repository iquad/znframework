<?php	
class __USE_STATIC_ACCESS__Functions implements FunctionsInterface
{
	//----------------------------------------------------------------------------------------------------
	//
	// Yazar      : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
	// Site       : www.zntr.net
	// Lisans     : The MIT License
	// Telif Hakkı: Copyright (c) 2012-2016, zntr.net
	//
	//----------------------------------------------------------------------------------------------------
	
	//----------------------------------------------------------------------------------------------------
	// Call Undefined Method                                                                       
	//----------------------------------------------------------------------------------------------------
	//
	// __call()
	//																						  
	//----------------------------------------------------------------------------------------------------
	use CallUndefinedMethodTrait;
	
	/******************************************************************************************
	* CALL ARRAY                                                                              *
	*******************************************************************************************
	| Genel Kullanım: call_user_func_array().									 	          |
	|          																				  |
	******************************************************************************************/
	public function callArray($callback = '', $params = array())
	{
		if( ! is_callable($callback) )
		{
			return Error::set(lang('Error', 'callableParameter', '1.(callback)'));	
		}
		
		if( ! is_array($params) )
		{
			return Error::set(lang('Error', 'arrayParameter', '2.(params)'));	
		}
		
		return call_user_func_array($callback, $params);		
	}	
	
	/******************************************************************************************
	* CALL		                                                                              *
	*******************************************************************************************
	| Genel Kullanım: call_user_func().									 	         		  |
	|          																				  |
	******************************************************************************************/
	public function call()
	{
		return $this->callArray('call_user_func', func_get_args());	
	}
	
	/******************************************************************************************
	* STATIC CALL ARRAY                                                                       *
	*******************************************************************************************
	| Genel Kullanım: forward_static_call_array().								 	          |
	|          																				  |
	******************************************************************************************/
	public function staticCallArray($callback = '', $params = array())
	{
		if( ! is_callable($callback) )
		{
			return Error::set(lang('Error', 'callableParameter', '1.(callback)'));	
		}
		
		if( ! is_array($params) )
		{
			return Error::set(lang('Error', 'arrayParameter', '2.(params)'));	
		}
		
		return forward_static_call_array($callback, $params);		
	}	
	
	/******************************************************************************************
	* STATIC CALL		                                                                      *
	*******************************************************************************************
	| Genel Kullanım: call_user_func().				  							 	          |
	|          																				  |
	******************************************************************************************/
	public function staticCall()
	{
		return $this->callArray('forward_static_call', func_get_args());	
	}
	
	/******************************************************************************************
	* REGISTER SHUTDOWN                                                                       *
	*******************************************************************************************
	| Genel Kullanım: register_shutdown_function().		    		     		 	          |
	|          																				  |
	******************************************************************************************/
	public function shutdown()
	{
		return $this->callArray('register_shutdown_function', func_get_args());	
	}
	
	/******************************************************************************************
	* TICK                                                                                    *
	*******************************************************************************************
	| Genel Kullanım:Her tikte çalıştırılacak işlevi tanımlar.		     	 	          |
	|          																				  |
	******************************************************************************************/
	public function tick()
	{
		return $this->callArray('register_tick_function', func_get_args());	
	}
	
	/******************************************************************************************
	* UNTICK                                                                                  *
	*******************************************************************************************
	| Genel Kullanım: unregister_tick_function().   		 			     	 	          |
	|          																				  |
	******************************************************************************************/
	public function untick()
	{
		return $this->callArray('unregister_tick_function', func_get_args());	
	}

	/******************************************************************************************
	* DEFINED    		                                                                      *
	*******************************************************************************************
	| Genel Kullanım: get_defined_functions().							 	   			      |
	|          																				  |
	******************************************************************************************/
	public function defined()
	{
		return get_defined_functions();
	}	
}