<?php
/**
 * Configuration file generated by ApiTool
 *
 * @see https://github.com/CookieShop/apitools.git
 */


namespace Cspermission\Model\Entity;

class Roles{

    /**
     * @var int              
     */
      protected $id;  

    /**
     * @var varchar              
     */
      protected $role;  

    /**
     * @var int              
     */
      protected $idparent;  


    /**
     * Set id
     *
     * @param int $id
     * @return type                   
     */            
	public function setId($id){
		$this->id = (int) $id;
	}
    /**
     * Get id
     *
     * @return int
     */          
	public function getId(){
		return $this->id;
	}
    /**
     * Set role
     *
     * @param varchar $role
     * @return type                   
     */            
	public function setRole($role){
		$this->role = (string) $role;
	}
    /**
     * Get role
     *
     * @return varchar
     */          
	public function getRole(){
		return $this->role;
	}
    /**
     * Set idparent
     *
     * @param int $idparent
     * @return type                   
     */            
	public function setIdparent($idparent){
		$this->idparent = (int) $idparent;
	}
    /**
     * Get idparent
     *
     * @return int
     */          
	public function getIdparent(){
		return $this->idparent;
	}
}

?>