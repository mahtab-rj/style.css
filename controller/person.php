<?php
class person{

    public $fname;
    public $lname;
    public $age;
    public $weight;
    public $height;
    public $email;
    public $pass;


    function __construct($fname,$lname,$age,$weight,$height,$email,$pass){

        $this->fname=$fname;
        $this->lname=$lname;
        $this->age=$age;
        $this->weight=$weight;
        $this->height=$height;
        $this->email=$email;
        $this->pass=$pass;

        echo "$this->fname"." "."$this->lname<br>";
    }

    function inserttodb(){
        $instance = ConnectDb::getInstance();
        $conn = $instance->getConnection();
        $sql="insert into users(firstname,lastname,age,weight,height,email,pass) values ('$this->fname','$this->lname','$this->age','$this->weight','$this->height','$this->email','$this->pass')";
        $conn->exec($sql);
    }


    function ageshow(){
        $myear=2020-$this->age;
        $syear=1399-$this->age;
        $x=$syear/3;
        $qyear=intval($syear+$x);
        echo "You born in ".$myear." AD ".$syear." hijri ".$qyear. " AH <br>";
    }

    function whshow(){
        $pweight=$this->weight*2.20;
        $fheight=$this->height*0.032;
        echo "yor weight is : ".$pweight." pond your height is : ".$fheight." feet";
    }

    public function bmishow()
    {
        $bmi = $this->weight / (($this->height / 100) ^ 2);
        echo "<br>your BMI is $bmi";
        if ($bmi <= 18.5) {
            echo "<h2>you are skinny</h2>";
        } elseif (18.5 < $bmi && $bmi < 25) {
            echo "<h2>you are Normal</h2>";
        } elseif (25 <= $bmi && $bmi < 30) {
            echo "<h2>you are overweight</h2>";
        } else {
            echo "<h2>you are fat!!!!!</h2>";
        }
    }
}