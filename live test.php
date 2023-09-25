 <?php
// $student = array('name' => 'Alice', 'age' => 22, 'grade' => 'A');
// if (array_key_exists('grade',$student))
//   {
//   echo "Key exists. Grade: " . $student['grade'];
//   }
// else
//   {
//   echo "Key does not exist.";
//   }


function is_match($names) {
    return $names == 'M';
}
$names= array('Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni');
$matchNames = array_filter($names, 'is_match');
print_r($matchNames);


// function test_name($names){

// $names =array('Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni');
// print_r(array_filter($names,"M"));


// $names 

// $originalString = ('Hello World!');
// echo strrev ($originalString);



    // $numbers=array('100','200','50','40','50');
    // foreach($numbers as $value){ 
    //     echo $value; 
    //     echo "\n";
    // }
?> 





















