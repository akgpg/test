 <?php
$a = array('amit','anup','asit','arup','arindam','ananya','ashok','anadi','alok','abani','babu','bappa','bachchu','bubun','bubun',
			'babai','bubai','biltu','paltu','payel','rinku','priya','subho','chandana','shephali','rani','mahua','sumana','manashi');


  $q=$_REQUEST["q"];
  
 //$q='A';
  $q=strtolower($q);
  $hint='';
  if($q!='')	
  {
  foreach($a as $name)
 {
	if(stristr($q,substr($name,0,strlen($q))))
		{
		if($hint==='')
			{
			  $hint=$name;
			  
			}
		else
			{
			 $hint=$hint.' '.$name;
			
			}
		}
 }
 
}

echo $hint===''?'no suggestion':$hint;

 
 
  ?>