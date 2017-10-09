
<?php

class szalloda{
    
  public $id;
  public $nev;
  public $cim;
  public $email;
  public $telefonszam;
  public $erkezes;
  public $vejszaka;
  public $vendegid;
    
    
    public function __construct($data){
 
        $this->id= $data['id'];
        $this->nev= $data['nev'];
        $this->cim= $data['cim'];
        $this->email= $data['email'];
        $this->telefonszam=$data['telefonszam'];
        $this->erkezes=$data['erkezes'];
        $this->vejszaka=$data['vejszaka'];
       
       
 
    }
}
