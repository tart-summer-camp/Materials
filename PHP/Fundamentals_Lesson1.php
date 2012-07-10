<?php

//Every php file starts with '<?php' and this is a comment line

/**
 * Every line ends with a semicolon ”;”
 * Also this seems to be a block comment
 */
echo "Hello World";

/**
 * Variables in PHP starts with a $ sign, followed by the name of the variable
 */
$sampleVariable = 'sampleVariable';

/**
 * The variable name must begin with a letter or the underscore character
 */
/**
 * A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
 */
/**
 * Variable names are case sensitive (c and C are two different variables) 
 */
$validVariables = array($crazyBoy_99, $CrazyBoy99, $_crazyBoy99, $Crazy_Boy_99_);
//$invalidVariables = array($.crazyBoy, $crazy-Boy99, $Crazy?Boy, $99CrazyBoy);

/**
 * A variable name should not contain spaces
 */
//$company Model <> $companyModel


/**
 * PHP is a Loosely Typed Language 
 */
$looselyTypedVariable = 'Hello World';
//now it is string
$looselyTypedVariable = 12341;
//now it is integer
$looselyTypedVariable = 3.4;
//now it is float



/**
 * Now we will start with scopes 
 * besides this also focus on methods
 */


/**
 *  PHP has four different variable scopes:
 *  -local
 *  -global
 *  -static
 *  -parameter
 */

/**
 * Local Scope 
 */
$a = 5; // global scope
function demonstrateLocalScope() {
    echo $a; // local scope
}
demonstrateLocalScope();
//output undefined



/**
 * Global Scope 
 */
$a = 5;
$b = 10;
function demonstrateGlobalScope() {
    global $a, $b;
    $b = $a + $b;
}
demonstrateGlobalScope();
echo $b;
//output 15

/**
 * Static Scope 
 */
static $rememberMe;
//static variables allways visible to that function
//with same value even going in and out of scope
//namely still local to the function



/**
 * Parameter Scope 
 */
function demonstrateParameterScope($param1, &$param2, $param3 = NULL) {
    // 
    // function code
    //
    return $valueToReturnParameter;
}
demonstrateParameterScope($param1, $param2);
demonstrateParameterScope($param1, $param2, $param3);


/**
 * String
 */
//Concatenation
$txt1="Hello";
$txt2="World!";
echo $txt1 . " " . $txt2;
// output Hello World!



//Length of a string
echo strlen("Hello world!");
//output 12



//index of a character or a sub string
echo strpos("Hello world!","world");
//output 6 (first character index is 0)



//dividing strings into array
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));



//combining array into a string
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);



//lowering a string
echo strtolower("Hello WORLD.");
//output "hello world."



//uppercasing a string
echo strtoupper("Hello WORLD!");
//output: HELLO WORLD!



//substring
echo substr("Hello world!",6);
//output: world!



echo substr("Hello world!", 6, 2);
//output: wo



//trimming words
$str = " Hello World! ";
echo trim($str);
//output "Hello World!"



//uppercase first letters
echo ucwords("hello world");
//Output: Hello World



echo ucfirst("hello world");
//output : Hello world

/**
 * OPERATORS 
 */

/**
 * Assignment Operators 
 */

//x = y         x = y           Assigning
//x += y	x = x + y	Addition
//x -= y	x = x - y	Subtraction
//x *= y	x = x * y	Multiplication
//x /= y	x = x / y	Division
//x %= y	x = x % y	Modulus
//a .= b	a = a . b	Concatenation


/**
 * Incrementing/Decrementing Operators
 */
// ++x	Pre-increment
// x++	Post-increment
// --x	Pre-decrement
// x--	Post-decrement


/**
 * Comparison Operators
 */
// x ==  y	Equal
// x === y	Identical
// x !=  y	Not equal
// x <>  y	Not equal
// x !== y	Not identical
// x >   y	Greater than
// x <   y	Less than
// x >=  y	Greater than or equal to
// x <=  y	Less than or equal to


/**
 * Logical Operators
 */
// x and y	
// x or y	
// x xor y	
// x && y
// x || y
// !x

/**
 * There is also bitwise oprators
 */


/**
 * IF Conditions
 */
if ($e->getCode() == '30') {
    //also describe exceptions here
    throw new \User_Exception_UserActivationWaitingException();
} elseif ($e->getCode() == '50') {
    throw new \User_Exception_UserActivationCanceledException();
} else {
    throw new \User_Exception_UserLoginFailedException();
}

$result = $e->getCode() == '30' ? 'false' : 'true';



/**
 *Switch Conditions 
 */
switch ($serviceType) {
    //here is an example of reaching static variable from outsides
    case (AsynchronousSearchServiceTypeEnum::MQ):
        return new Asynchronous\MessageQueueService($config);
        break;
    case (AsynchronousSearchServiceTypeEnum::MAIL):
        return new Asynchronous\MailQueueService($config);
        break;
    default:
        throw new Exception\AsynchronousSearchServiceTypeException();
}



/**
 * Array 
 */


$_requiredFields = array("OrderObjectId", "MPAY", "PaymentCategoryId");
echo $_requiredFields[0];
//output "OrderObjectId"

echo $_requiredFields[] = "SalesOrderId";
//assign/add new value

echo count($_requiredFields);
//output 4



$_paymentStatus = array(
    "inprogress" => "paymentInProgress",
    "cancelled" => "paymentCancelled"
);
echo $_paymentStatus["inprogress"];
//output "paymentInProgress"



$_paymentStatus = array(
    "inprogress" => array("inarrayKey" => "inArrayValue"),
    "cancelled" => "paymentCancelled"
);
echo $_paymentStatus["inprogress"]["inarrayKey"];
//output "inArrayValue"



$a1 = array(0 => "Cat", 1 => "Dog", 2 => "Horse");
$a2 = array(3 => "Horse", 4 => "Dog", 5 => "Fish");
array_diff($a1, $a2);
//output: Array ( [0] => Cat );



array_key_exists("a", $a = array("a" => "Dog", "b" => "Cat"));
//true



$a1=array("a"=>"Horse","b"=>"Dog");
$a2=array("c"=>"Cow","b"=>"Cat");
array_merge($a1,$a2);
//$a2 overrides $a1
//Array ( [a] => Horse [b] => Cat [c] => Cow )



$a = array("Dog", "Cat");
array_push($a, "Horse", "Bird");
//Array ( [0] => Dog [1] => Cat [2] => Horse [3] => Bird )



$a = array("Dog", "Cat", "Horse");
$b = array_pop($a);
//$a = > Array ( [0] => Dog [1] => Cat )
//$b = > Array ( [0] => Horse )



$a=array("a"=>"Dog","b"=>"Cat","c"=>"Horse");
echo array_search("Dog",$a);
//output: "a"
//note that array_search searchs for a value and returns key



$a=array(0=>"Dog",1=>"Cat",2=>"Horse");
echo array_shift($a);
//output: Array ( [0] => Cat [1] => Horse )
//removes the first index



$a=array(0=>"Dog",1=>"Cat",2=>"Horse",3=>"Bird");
array_slice($a,1,2);
//Array ( [0] => Cat [1] => Horse )



$a=array("a"=>"Cat","b"=>"Dog","c"=>"Cat");
array_unique($a);
//Array ( [a] => Cat [b] => Dog )



$a=array("a"=>"Cat","b"=>"Dog","c"=>"Horse");
array_values($a);
//Array ( [0] => Cat [1] => Dog [2] => Horse )



$a=array("a"=>"Horse","b"=>"Cat","c"=>"Dog");
array_keys($a);
//Array ( [0] => a [1] => b [2] => c )



$a=array(10,20,30,10);
array_keys($a,10);
//Array ( [0] => 0 [1] => 3 )
//second parameter is optional



$people = array("Peter", "Joe", "Glenn", "Cleveland");
in_array("Glenn",$people);
//true



/**
 * Loops
 */

//While loop
while ($cursor->hasNext()) {
    $LogsData[] = $cursor->getNext();
}



//do while loop
do {
    $LogsData[] = $cursor->getNext();
} while ($cursor->hasNext());



//for loop
for ($index = 0; $index < $count; $index++) {
    $this->createCoupon($id, NULL, $commit);
    if (($index + 1) % 1000 == 0) {
        $repository->commit();
    }
}



//foreach loop
foreach ($transactions as $transaction) {
    $cdrDocument = $this->_addLineToCdrDocument($transaction, $cdrDocument);
}

foreach ($transactionData["data"] as $key => $value) {
    if ($value["createdAt"] > $date) {
        unset($transactionData["data"][$key]);
    }
}



/**
 * FORM HANDLING 
 *
    <html>
        <body>
            <form action = "welcome.php" method = "post">
            Name: <input type = "text" name = "fname" />
            Age: <input type = "text" name = "age" />
            <input type = "submit" />
            </form>
        </body>
    </html>

    <html>
        <body>
        Welcome <?php echo $_POST["fname"]; ?>!<br />
        You are <?php echo $_POST["age"]; ?> years old.
        </body>
    </html>
 *
 * / 
 */
/**
 * What is the difference between POST and GET ?
 */



/**
 * DATE 
 */
date("Y-m-d H-i-s");
//2012-07-10 11-23-56
//@see http://www.php.net/manual/en/function.date.php

//mktime(hour,minute,second,month,day,year,is_dst);
echo date("d-m-Y",mktime(0,0,0,1,1,2001));
//output 01-Jan-2001
echo date("d-m-Y",mktime(0,0,0,12,36,2001));
//output 05-Jan-2002




/**
 * DIRECTORY 
 */
scandir("images");
//output
// Array
// (
//  [0] => .
//  [1] => ..
//  [2] => dog.jpg
//  [3] => house.jpg
//  [4] => logo.gif
// )



//returns true if file exists
if(file_exists("test.txt")){
    //do dirty things with this file, huhuuu
}



echo file_get_contents("test.txt");
//outputs the file content as string



echo file_put_contents("test.txt","Hello World. Testing!");
//outputs false on error



echo filectime("test.txt");
//output 1341868253



echo filesize('text');
//output 11



//returns true if test is a dir
if(is_dir("test")){
}



//removes directory
if (!rmdir('test')) {
    echo ("Could not remove test");
}



$_FILES["file"]["name"];     // the name of the uploaded file
$_FILES["file"]["type"];     // the type of the uploaded file
$_FILES["file"]["size"];     // the size in bytes of the uploaded file
$_FILES["file"]["tmp_name"]; // the name of the temporary copy of the file stored on the server
$_FILES["file"]["error"];    // the error code resulting from the file upload



/**
 * SESSION 
 */
session_start();

$_SESSION[];
//do, store whatever you want in session global

session_destroy();

//ALL GLOBALS
$_GET;
$_POST;
$_REQUEST;
$_COOKIE;
$_SERVER;



/**
 * EXCEPTIONS 
 */
//@see Look to if conditions section for more exception examples
try {
    $this->_logMikroOdemeTransactions($input, "request");
} catch (\Exception $e) {
    \Model_Core_Helper::logDebugMessage($e, "WebService", 1, "ReceiveOrderResult");
    throw new Exception('An unexpected error occured while trying to log Mikroodeme transaction, Ouchh');
}
//but there is not a <--finally--> reserved word :((





/**
 * Math functions 
 */
echo abs(-3);
//output 3



echo ceil(5.1);
//output 6
echo ceil(-5.1);
//output -5



echo floor(5.1);
//output 5
echo floor(-5.1);
//output -6



echo min(7.25,7.30);
//output 7.25



echo max(7.25,7.30);
//output 7.30



echo round(0.50);
//output 1
echo round(0.49);
//output 0




/**
 * Namespacing 
 */
namespace PHP\Lesson1;
class Fundamentals {
    
}



// Variable assignment
$name = 'foo'; 
$$name = 'boo';
echo $foo;
//output boo
//how come!?!



//Last words : code with care!
