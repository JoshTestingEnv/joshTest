<?php
  $giant_array = array(
        'vcreative' => array(
            'people' => array(
                'Steve' => array(
                    'job' => 'Dev'
                ),
                'David' => array(
                    'job' => 'Dev'
                ),
                'Jinny' => array(
                    'job' => 'HD'
                ),
                'John' => array(
                    'job' => 'HD'
                ),
                'Melissa' => array(
                    'job' => 'Sales'
                )
            ),
            'salaries' => array(
                'Dev' => array(
                    'starting' => '300,000',
                    'medium' => '500,000',
                    'experienced' => '1,000,000'
                ),
                'HD' => array(
                    'starting' => '500,000',
                    'medium' => '1,000,000',
                    'experienced' => '2,000,000'
                ),
                'Sales' => array(
                    'starting' => '1,000,000',
                    'medium' => '2,000,000',
                    'experienced' => '5,000,000'
                )

            )
        ),
        'Modot' => array(
            'people' => array(
                'Josh' => array(
                    'job' => 'Sign guy'
                ),
                'B-Rad' => array(
                    'job' => 'boss man'
                ),
                'Sketterer' => array(
                    'job' => 'boss man'
                )
            ),
            'salaries' => array(
                'grunt' => array(
                    'starting' => '3000',
                    'medium' => '5000',
                    'experienced' => '10,000'
                ),
                'Sign guy' => array(
                    'starting' => '20,000',
                    'medium' => '25,000',
                    'experienced' => '30,000'
                ),
                'boss man' => array(
                    'starting' => '30,000',
                    'medium' => '35,000',
                    'experienced' => '40,000'
                )

            )
        )
    );
$newarray = array();
foreach($giant_array as $ga){
    foreach($ga['people'] as $k=>$v){
        $newarray[$k] = $v;
    }
     
}
    
// print_r($newarray);
echo json_encode($giant_array);

?>