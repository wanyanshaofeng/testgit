
<?php  
 echo '12121212<br/>o';
 echo "zhengaafa";
 




 $con=mysql_connect('localhost','root','');
 if($con){
   echo "connect ok !";
 }else{
    echo "connect fail ! ";
 }
  
  class demo{
   private $username=root";
   private $password="";
   private $host="localhost";

   function __construct(){
      $this-> connectsql($this->host,$this->username,$this->password);
      $this->mysqlclose();
           
    }

    protected function  connectsql($host,$username,$pwd){
      $con=mysql_connect($host,$username,$pwd);
      if($con){
         echo "���ݿ����ӳɹ���";
       }else{
         echo  "���ݿ�����ʧ�ܣ�";
       }
    
    
    }
    protected function mysqlclose(){
       mysql_close();
    
    }
  
  
  }

 ?>
