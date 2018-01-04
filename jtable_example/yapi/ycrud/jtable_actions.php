<?php
//example usage at the end
 class yjtable
 {
	
	protected $_ycrud;
	protected $pk;	
	public function __construct(ycrud $ycrud) 
    {
		$this->_ycrud = $ycrud;
		$this->pk = 'id';
		
    }//end __construct
	
	public function set_pk($pk)//set Primary Key
	{
		$this->pk = $pk;
	}//end set_pk
	

	
	public function create($post)
	{
		$res = $this->_ycrud->create($post);
		$row = $this->_ycrud->get_where( " ".$this->pk."= LAST_INSERT_ID() ");
		$this->ret_res('Record',$row);
	
	}//end edit
	
	public function deleate($post)
	{
		
		$res = $this->_ycrud->delete($post[$this->pk]);
		$this->ret_res1();
	
	}//end deleate
	
	public function update($post)
	{
		$res = $this->_ycrud->update($post[$this->pk],$post);
		$this->ret_res1();
	
	}//end update
	
	public function select($from,$to)
	{
			
		$all = $this->_ycrud->get_jtbl($from,$to);
		$this->ret_res('Records',$all);
	}//end update
	
	//ret_res =return result, just helper funcs
	
	public function ret_res1()
	{
		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}//end ret_res1
	
	public function ret_res($col,$val)
	{
		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult[$col] = $val ;
		print json_encode($jTableResult);
	}//end ret_res1

 
 }//end yjtable
 
 ?>