<?php
echo "<h1>GANDAKI COLLEGE OF ENGINEERING & SCIENCE</h1>";
echo "<h2>Teaching & Non-Teaching Staff</h2>";
$gces = 
[
    "Academic"=>[ [
        "Name" => "Nishal Gurung",
        "Subject" => ["WT", "Java"],
        "Phone" => ["9846011111", "9846022222"],
        "Address" => "Lamachaur"
    ],
    [
        "Name" => "Ramesh Thapa",
        "Subject" => ["PST", "MFCS"],
        "Phone" => ["9846033333", "9846044444"],
        "Address" => "Mahendrapool"
    ],
    [
        "Name" => "Rajendra Bahadur Thapa",
        "Subject" => ["OOP-C++", "Microprocessor"],
        "Phone" => ["9846055555"],
        "Address" => "Lamachaur"
    ]
    ],
    "Non-Academic"=>
     [
    [
        "Name" => "ujjwal neupane",
        "Phone" => ["9845766095", "9808224001"],
        "Address" => "Lamachaur"
    ],
    [
        "Name" => "Ace singh",
        "Phone" => ["9846088888"],
        "Address" => "Mahendrapool"
    ],
    [
        "Name" => "luffy singh",
        "Phone" => ["984609099"],
        "Address" => "Lamachaur"
    ]
    ]
    ];
    

    echo "<table border=5 cellpadding=10 cellspacing=3 width = 900px";

    echo "<tr>
          <td>Category</td>
          <td>Name</td>
          <td>Address</td>
          <td>Phone</td>
          <td>Subject</td>
          </tr>";
    
    foreach($gces as $staffType => $staffDetails)
    {
        foreach($staffDetails as $key => $staff )
        {
                echo "<tr>";
                echo "<td width = 20%  >$staffType</td>";
                echo "<td width = 20%  >$staff[Name]</td>";
                echo "<td width = 20%  >$staff[Address]</td>";
                echo "<td width = 20% >";
                foreach($staff["Phone"] as $phone){
                    echo "$phone &nbsp &nbsp";
                };
                echo "</td>";

                echo "<td width = 20% bgcolor = 'LightGray'>";
                if(array_key_exists('Subject', $staff)){
		
                    foreach ($staff["Subject"] as $subject){
                      echo "$subject &nbsp &nbsp";
                    }
                  }
                  echo "</td>";
                }
              }
                echo "</td>";
                echo "</tr>";

    echo "</table>";




?>