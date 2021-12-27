<?php
  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);

  echo "<table border='1'align = 'center'>";
  echo"<caption>";
  echo "<h3>";
  echo "<p>";
  echo "รายงานสถานการโควิด-19 แยกจังหวัด";
  echo "</p>";
  echo "</h3>";
  echo"</caption>";
  echo "<tr align = 'center'>";
  echo "<td bgcolor='#FF8970'>"; 
  echo "ลำดับ";
  echo "</td>"; 
  echo "<td bgcolor='#FFF367'>"; 
  echo "จังหวัด";
  echo "</td>";
  echo "<td bgcolor='#7FFF67'>"; 
  echo "ผู้ป่วยใหม่";
  echo "</td>"; 
  echo "<td bgcolor='#67FFC0'>"; 
  echo "ผู้ป่วยรวม";
  echo "</td>"; 
  echo "<td bgcolor='#67CEFF'>"; 
  echo "ผู้ป่วยใหม่ในประเทศ";
  echo "</td>"; 
  echo "<td bgcolor='#6780FF'>"; 
  echo "ผู้ป่วยรวมในประเทศ";
  echo "</td>"; 
  echo "<td bgcolor='#6FE8F3'>"; 
  echo "ผู้เสียชีวิตใหม่";
  echo "</td>"; 
  echo "<td bgcolor='#FB97EF'>"; 
  echo "ผู้เสียชีวิตรวม";
  echo "</td>";
  echo "<td bgcolor='#D85E5E'>"; 
  echo "วันที่อัพเดท";
  echo "</td>";  
  echo "</tr>";

  foreach($data as $key=>$val){
    echo "<tr align = 'center'>";
    echo "<tr align = 'center'>";
    echo "<td bgcolor='#FF8970'>"; 
    echo $key+1;
    echo "</td>"; 
    echo "<td bgcolor='#FFF367'>"; 
    echo $val->province;
    echo "</td>";
    echo "<td bgcolor='#7FFF67'>"; 
    echo $val->new_case;
    echo "</td>";
    echo "<td bgcolor='#67FFC0'>"; 
    echo $val->total_case;
    echo "</td>";
    echo "<td bgcolor='#67CEFF'>"; 
    echo $val->new_case_excludeabroad;
    echo "</td>";
    echo "<td bgcolor='#6780FF'>"; 
    echo $val->total_case_excludeabroad;
    echo "</td>";
    echo "<td bgcolor='#6FE8F3'>"; 
    echo $val->new_death;
    echo "</td>";
    echo "<td bgcolor='#FB97EF'>"; 
    echo $val->total_death;
    echo "</td>"; 
    echo "<td bgcolor='#D85E5E'>"; 
    echo $val->update_date;
    echo "</td>";
    echo "</tr>";

  }
  echo "</table>";
