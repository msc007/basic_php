<?php
    //this is comment
    # this is also comment
    /*this is also comment */

    //print string
    echo "Hello World";
 
    //print out its data type & value
    echo var_dump(1234);

    //concatenation operator
    echo "Hello"." "."World";
    
    //append string
    $data1 = "Hello";
    $data1 .= " World";

    //Variable
    $a = 1;
    print $a+1;
    print $a."<br/>";

    //Variable variables
    $title = "subject";
    $$title = "PHP tutorial";   #$title itself become a variable
    echo $subject;

    //Set;Get variable types
    $a = 100;
    echo gettype($a);   #integer type
    settype($a,"double");
    echo gettype($a);   #double type

    //Constant -not modifiable
    define("TITLE", "PHP TUTORIAL");
    echo TITLE;

    //Boolean number
        #0 == FALSE
        #any number other than 0 == TRUE

    //and;or
    if(true and true)   #if(true && true)
    if(true or true)    #if(true || true)

    //Basic check functions
    $x ="";
    gettype($x);    #string
    empty($x);      #TRUE
    is_null($x);    #FALSE
    isset($x);      #TRUE

    //Strict comparision with ===
        #it checks both type & value just like javascript.

    //Function syntax
    function foo($arg1, $arg2){
        return $arg1 + $arg2;
    }        

    //Array syntax
    $numArray = [1, 2, 3];
    echo $numArray[0];
    #function can return array
    function bar(){
        return ['a', 'b', 'c']; 
    }
    echo bar()[0];  #return 'b' (php version 5.4+)

    //Basic array methods
    array_push($arr, 'd');      #append to the end of array
    array_unshift($arr, 'z');   #append to the front of array
    array_shft($arr);           #remove first index of array
    array_pop($arr);            #remove last index of array
    sort($arr);                 #sort array in ascending order
    rsort($arr);                #sort array in descending order

    //연관배열(MAP)
    $arr = [];
    arr['a'] = 10;
    $grades = array('a'=>1, 'b'=>2, 'c'=>3);
    foreach($grades as $key => $values){
        echo "key: {$key} value: {$value}<br/>";
    }
    
    //include/require
    <?php
    include 'greeting.php';             #include => warning
    include_once 'greeting.php';
    require 'greeting.php';             #require => fatal error (more strict)
    require_once 'greeting.php';
    ?>

    //namespace-eliminate name confusion between files
    namespace language\kor;
    namespace language\eng;
    echo language\kor\welcome();    
    echo language\end\welcome();    


    //POST;GET
    echo $_GET["id"]." Welcome!";   #localhost/basic_tutorial.php?id=min 
    echo $_POST["id"]. "Welcome!";  #post method does not shows inputs
    
?>