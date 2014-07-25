/**
 * Class Restriction
 * Restricts users to connect based on IP list
 * Pass an array of white list IP in the format $arrayVariable = array('allowed' => array('123.123.123.123'))
 *
 */
class Restriction  {

    /**
     * @var
     */
    private $_allowedIPList;
    /**
     * @var
     */
    private $_userIP;

    /**
     * @param $arg
     * @return mixed
     */
    public function getAllowedIPlist($arg){
		return $this->_allowedIPList = $arg["allowed"];
	}

    /**
     * @param $ip
     * @return mixed
     */
    public function getUserIP($ip){
		return $this->_userIP = $ip;
	}

	//check if the user IP is in the white list
    /**
     *
     */
    public function checkGlobalIndex(){
		if(!in_array($this->_userIP,$this->_allowedIPList)){
			echo 'You are in the wrong place.';exit;
		}
	}

    /**
     * @param $arg
     * @param $ip
     */
    public function globalInit($whiteList,$ip){
		$this->getAllowedIPlist($whiteList);
		$this->getUserIP($ip);
		$this->checkGlobalIndex();
	}
}
