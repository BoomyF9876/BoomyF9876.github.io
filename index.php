<!DOCTYPE html>
<html>
<head style="text-align: center">
    <title>php study note</title>
</head>
<body>
<?php
setlocale(LC_ALL,"zh_CN.utf8");
function test1($a){
    for(;$a<5;$a++){
        $b=rand(1,50);
        if($b<25)
            $b*=3;
        else
            $b*=2;
    echo $b."<br/>";
    }
}
function test2(){
    $users[3]=0;
    $users[0]="12";
    $users[1]="George";
    $users[2]="IV";
    return $users;
}
$testsum=0;
echo"Test<br/>";
//include"/Users/apple/Desktop/University of waterloo/transcript.jpg";
include"/Users/apple/Desktop/University of waterloo/testforphp.txt";
echo "<br/>";
test1($testsum);
list($a,$b,$c)=test2();
echo"Numbers:$a, Name:$b, Order:$c <br/><br/>";
echo"<table width='60%'align='left'border='10'>";
echo"<tr><th>Heading1</th><th>Heading2</th></tr>";
echo"<tr><th>row 1, cell 1</th><td>row 1, cell 2</td></tr>";
echo"<tr><th>row 2, cell 1</th><td>row 2, cell 2</td></tr>";
echo"</table><br/><br/><br/><br/><br/><br/>";
//如何用loop输入表格?
$ran= range("A","F");
/*for ($i=0;$i<6;$i++){
    echo $ran[$i];
}*/
foreach ($ran AS $r){
    echo $r."<br/>";
}
$customer[/*"Avator"*/]=array("test1","test2","test3","test4","test5");
$customer[/*"Beast"*/]=array("test4","test5","test1");
$customertest=array("test3","test2","test9");
foreach($customer as $individual){
    vprintf("%s %s <br/>",$individual);
}
$test3=print_r($customer,TRUE);
echo $test3."<br/>";
for($i=0;$i<3;$i++){
    echo $customer[0][$i]." ";
}
echo "<br/>";
$founded=array_search("test8",$customertest);
if($founded)
    printf("%s is the founded and %s is the string <br/>",$founded,$customertest[$founded]);
else
    echo "Error";
$keys=array_keys($customer[0]);
//$keys=preserve_keys($customer[0]);
print_r($keys);
/*$temp=each($customer);  这里each无法运行.
print_r($temp);*/
echo "<br/>".count($customer,100)."<br/>";//为什么数字大于1后恒为2?
//array_flip() interesting
natcasesort($customer[1]);//会永久改变
print_r($customer[1]);
echo"<br/>";
$combine=array_merge($customer[0],$customer[1]);
print_r($combine);
echo"<br/>";
$slice=array_slice($customer[0],2,-1);
print_r($slice);
echo"<br/>";
$diff=array_diff($customer[0],$customer[1],$customertest);
print_r($diff);
class Visitor{
    static function sayhello(){
        echo "Hi there!";
    }
    static function saybye(){
        echo"Good day!";
    }
}
echo"<br/>";
Visitor::sayhello();
Visitor::saybye();
class Visitodio extends Visitor{
    function __construct()
    {
    parent::__construct();
    }
}
static $around=5;
static $around=15;
static $around=115;
echo "<br/>".$around."<br/>";
class Emloyment{
    private $members;
    public static $football="football";
}
/*interface Emloyment{
    public function investigate();
}
echo Emloyment::getFootball();*/
//throw new Exception("Error");
echo"Test.";
$testt="Tshais zncz adwoaaisd n asidj w $500000";
print_r(split("[z]",$testt));
echo "<br/>".preg_filter("/s/","pp",$testt);
echo "<br/>".str_pad($testt,50,"*",STR_PAD_BOTH);
echo "<br/>".trim($testt,"Tsdj");
echo "<br/>".substr($testt,0,strrpos(substr($testt,0,30),' '));
$perform=count_chars($testt,1);
foreach ($perform as $letter => $frequency)
    echo chr($letter)." ".$frequency."<br/>";
print_r(str_word_count($testt,1));
$testforphp=realpath("/xampp/htdocs/testforphp1.txt");
echo "<br/>".$testforphp;
echo "<br/>".filesize($testforphp);
echo "<br/>".disk_free_space("C:")/(1024*1024*1024);
echo "<br/>".disk_free_space("/xampp/htdocs");
$storagetest='It may spare some spac.';
echo "<br/>".date("m-d-y g:i:sa", filectime("testforphp.txt"));
echo "<br/>".date("m-d-y g:i:sa", filemtime("testforphp.txt"));
//$insertpart='\n///Test for document insert.///';
$platform=fopen('testforphp.txt','a+');
fwrite($platform,$insertpart);
fclose($platform);
$readfile=opendir('/xampp/htdocs');
while($filereader=readdir($readfile))
  echo"<br/>".$filereader;
//unlink('/xampp/htdocs/xampp/Testfolder/TestDocument.txt');
//rmdir('Testfolder');
//rename("/xampp/htdocs/New Folder","/xpp/htdocs/Old Folder");
/*for($i=0;$i<100;$i++) {
    fopen("/xampp/htdocs/Group$i.txt",'w');
}*/
$listall=system("dir /xampp/htdocs/");
echo "<br/>".$listall.'test'."<br/>";
print_r('<pre>');
print_r(getdate(987654));
date_default_timezone_set('PRC');
echo date("m-d-y g:i:sa T",getlastmod());
$adih=new DateTime('tomorrow');
$adih->format('m-d-y g:i:sa');
echo "<br/>";
print_r($adih);
//$http= fsockopen("www.example.com",80);
/*$smarty=new Smarty;
$smarty->assign("name", "Bomin Fang");
$smarty->assign("title", "Smarty Rocks!");
$smarty->display("welcome.tpl");*/
?>
<p id="demo">I will change after u press me!</p>
<script>
    function changewords() {
        var x=document.getElementById("demo");
        if(x.innerHTML=="I will change after u press me!")
        {x.innerHTML="This is the inner-document.";}
        else
        {x="I will change after u press me!";}
    }
</script>
<button type="button" onclick="changewords()">Press here!</button>
</body>
</html>
