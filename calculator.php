<?php
 function operators($a, $b)
 {
  if(($a != 0) && ($b != 0))
  {
   $array = array("x" => ($a * $b), "+" => ($a + $b), "-" => ($a - $b),
                  "(-)" => ($b - $a), "div" => ($a/$b), "(div)" => ($b/$a));
  }
  else
  {
   $array = array("x" => ($a * $b), "+" => ($a + $b), "-" => ($a - $b),
                  "(-)" => ($b - $a));
  }
  return $array;
 }

 function single()
 {
  global $vals, $ans, $return;

  foreach($vals as $key => $values)
  {
   if($values == $ans)
   {
    echo "A simple solution is the number ".$values.".";
    echo "<br />";
    $return = "";
   }
  }
 }

 function pairs()
 {
  global $vals, $ans, $return;

  foreach($vals as $key => $values)
  {
   foreach($vals as $keyout => $valout)
   {
    if($key != $keyout)
    {
     $temparray = operators($values, $valout);
     foreach($temparray as $strop => $caop)
     {
      if($caop == $ans)
      {
       $return = "";
       echo "A solution is (".$values." ".$strop." ".$valout.").<br />";
      }
     }
    }
   }
  }
 }

 function triple()
 {
  global $vals, $ans, $return;

  foreach($vals as $key => $values)
  {
   foreach($vals as $keyout => $valout)
   {
    if($key != $keyout)
    {
     foreach($vals as $keymid => $valmid)
     {
      if(($key != $keymid) && ($keyout != $keymid))
      {
       $temparray = operators($values, $valout);
       foreach($temparray as $strop => $caop)
       {
        $temparray2 = operators($caop, $valmid);
        foreach($temparray2 as $strop2 => $caop2)
        {
         if($caop2 == $ans)
         {
          $return = "";
          echo "A solution is ((".$values." ".$strop." ".$valout.") "
                      .$strop2." ".$valmid.".<br />";
         }
        }
       }
      }
     }
    }
   }
  }
 }

 function quad()
 {
  global $vals, $ans, $return;

  foreach($vals as $key => $val)
  {
   foreach($vals as $key2 => $val2)
   {
    if($key != $key2)
    {
     foreach($vals as $key3 => $val3)
     {
      if(($key != $key3) && ($key2 != $key3))
      {
       foreach($vals as $key4 => $val4)
       {
        if(($key != $key4) && ($key2 != $key4) && ($key3 != $key4))
        {
         $temparray = operators($val, $val2);
         foreach($temparray as $strop => $caop)
         {
          $temparray2 = operators($caop, $val3);
          foreach($temparray2 as $strop2 => $caop2)
          {
           $temparray3 = operators($caop2, $val4);
           foreach($temparray3 as $strop3 => $caop3)
           {
            if($caop3 == $ans)
            {
             $return = "";
             echo "A solution is (((".$val." ".$strop." ".$val2.") "
                         .$strop2." ".$val3.") ".$strop3." ".$val4.").<br />";
            }
           }
          }
         }
        }
       }
      }
     }
    }
   }
  }
 }

 function twotwo()
 {
  global $vals, $ans, $return;

  foreach($vals as $key => $val)
  {
   foreach($vals as $key2 => $val2)
   {
    if($key != $key2)
    {
     foreach($vals as $key3 => $val3)
     {
      if(($key != $key3) && ($key2 != $key3))
      {
       foreach($vals as $key4 => $val4)
       {
        if(($key != $key4) && ($key2 != $key4) && ($key3 != $key4))
        {
         $temparray = operators($val, $val2);
         foreach($temparray as $strop => $caop)
         {
          $temparray2 = operators($val3, $val4);
          foreach($temparray2 as $strop2 => $caop2)
          {
           $temparray3 = operators($caop, $caop2);
           foreach($temparray3 as $strop3 => $caop3)
           {
            if($caop3 == $ans)
            {
             $return = "";
             echo "A solution is ((".$val." ".$strop." ".$val2.") "
                         .$strop3." (".$val3." ".$strop2." ".$val4.")).<br />";
            }
           }
          }
         }
        }
       }
      }
     }
    }
   }
  }
 }

 function quint()
 {
  global $vals, $ans, $return;

  foreach($vals as $key => $val)
  {
   foreach($vals as $key2 => $val2)
   {
    if($key != $key2)
    {
     foreach($vals as $key3 => $val3)
     {
      if(($key != $key3) && ($key2 != $key3))
      {
       foreach($vals as $key4 => $val4)
       {
        if(($key != $key4) && ($key2 != $key4) && ($key3 != $key4))
        {
         foreach($vals as $key5 => $val5)
         {
          if(($key != $key5) && ($key2 != $key5) && ($key3 != $key5)
             && ($key4 != $key5))
          {
           $temparray = operators($val, $val2);
           foreach($temparray as $strop => $caop)
           {
            $temparray2 = operators($caop, $val3);
            foreach($temparray2 as $strop2 => $caop2)
            {
             $temparray3 = operators($caop2, $val4);
             foreach($temparray3 as $strop3 => $caop3)
             {
              $temparray4 = operators($caop3, $val5);
              foreach($temparray4 as $strop4 => $caop4)
              {
               if($caop4 == $ans)
               {
                $return = "";
                echo "A solution is ((((".$val." ".$strop." ".$val2.") "
                                              .$strop2." ".$val3.") "
                                              .$strop3." ".$val4.") "
                                              .$strop4." ".$val5.").<br />";
               }
              }
             }
            }
           }
          }
         }
        }
       }
      }
     }
    }
   }
  }
 }

 function twothree()
 {
  global $vals, $ans, $return;

  foreach($vals as $key => $val)
  {
   foreach($vals as $key2 => $val2)
   {
    if($key != $key2)
    {
     foreach($vals as $key3 => $val3)
     {
      if(($key != $key3) && ($key2 != $key3))
      {
       foreach($vals as $key4 => $val4)
       {
        if(($key != $key4) && ($key2 != $key4) && ($key3 != $key4))
        {
         foreach($vals as $key5 => $val5)
         {
          if(($key != $key5) && ($key2 != $key5) && ($key3 != $key5)
             && ($key4 != $key5))
          {
           $temparray = operators($val, $val2);
           foreach($temparray as $strop => $caop)
           {
            $temparray2 = operators($caop, $val3);
            foreach($temparray2 as $strop2 => $caop2)
            {
             $temparray3 = operators($val4, $val5);
             foreach($temparray3 as $strop3 => $caop3)
             {
              $temparray4 = operators($caop2, $caop3);
              foreach($temparray4 as $strop4 => $caop4)
              {
               if($caop4 == $ans)
               {
                $return = "";
                echo "A solution is (((".$val." ".$strop." ".$val2.") "
                                              .$strop2." ".$val3.") "
                                              .$strop4." (".$val4." "
                                              .$strop3." ".$val5.").<br />";
               }
              }
             }
            }
           }
          }
         }
        }
       }
      }
     }
    }
   }
  }
 }

 function hex()
 {
  global $vals, $ans, $return;

  foreach($vals as $key => $val)
  {
   foreach($vals as $key2 => $val2)
   {
    if($key != $key2)
    {
     foreach($vals as $key3 => $val3)
     {
      if(($key != $key3) && ($key2 != $key3))
      {
       foreach($vals as $key4 => $val4)
       {
        if(($key != $key4) && ($key2 != $key4) && ($key3 != $key4))
        {
         foreach($vals as $key5 => $val5)
         {
          if(($key != $key5) && ($key2 != $key5) && ($key3 != $key5)
             && ($key4 != $key5))
          {
           foreach($vals as $key6 => $val6)
           {
            if(($key != $key6) && ($key2 != $key6) && ($key3 != $key6)
               && ($key4 != $key6) && ($key5 != $key6))
            {
             $temparray = operators($val, $val2);
             foreach($temparray as $strop => $caop)
             {
              $temparray2 = operators($caop, $val3);
              foreach($temparray2 as $strop2 => $caop2)
              {
               $temparray3 = operators($caop2, $val4);
               foreach($temparray3 as $strop3 => $caop3)
               {
                $temparray4 = operators($caop3, $val5);
                foreach($temparray4 as $strop4 => $caop4)
                {
                 $temparray5 = operators($caop4, $val6);
                 foreach($temparray5 as $strop5 => $caop5)
                 {
                  if($caop5 == $ans)
                  {
                   $return = "";
                   echo "A solution, using all the numbers, is
                              ((((".$val." ".$strop." ".$val2.") "
                                  .$strop2." ".$val3.") "
                                  .$strop3." ".$val4.") "
                                  .$strop4." ".$val5.") "
                                  .$strop5." ".$val6.").<br />";
                  }
                 }
                }
               }
              }
             }
            }
           }
          }
         }
        }
       }
      }
     }
    }
   }
  }
 }

 function twotwotwo()
 {
  global $vals, $ans, $return;

  foreach($vals as $key => $val)
  {
   foreach($vals as $key2 => $val2)
   {
    if($key != $key2)
    {
     foreach($vals as $key3 => $val3)
     {
      if(($key != $key3) && ($key2 != $key3))
      {
       foreach($vals as $key4 => $val4)
       {
        if(($key != $key4) && ($key2 != $key4) && ($key3 != $key4))
        {
         foreach($vals as $key5 => $val5)
         {
          if(($key != $key5) && ($key2 != $key5) && ($key3 != $key5)
             && ($key4 != $key5))
          {
           foreach($vals as $key6 => $val6)
           {
            if(($key != $key6) && ($key2 != $key6) && ($key3 != $key6)
               && ($key4 != $key6) && ($key5 != $key6))
            {
             $temparray = operators($val, $val2);
             foreach($temparray as $strop => $caop)
             {
              $temparray2 = operators($val3, $val4);
              foreach($temparray2 as $strop2 => $caop2)
              {
               $temparray3 = operators($val5, $val6);
               foreach($temparray3 as $strop3 => $caop3)
               {
                $temparray4 = operators($caop, $caop2);
                foreach($temparray4 as $strop4 => $caop4)
                {
                 $temparray5 = operators($caop4, $caop3);
                 foreach($temparray5 as $strop5 => $caop5)
                 {
                  if($caop5 == $ans)
                  {
                   $return = "";
                   echo "A solution, using all the numbers, is
                              (((".$val." ".$strop." ".$val2.") "
                                  .$strop4." (".$val3." "
                                  .$strop2." ".$val4.")) "
                                  .$strop5." (".$val5." "
                                  .$strop3." ".$val6.").<br />";
                  }
                 }
                }
               }
              }
             }
            }
           }
          }
         }
        }
       }
      }
     }
    }
   }
  }
 }

 function threethree()
 {
  global $vals, $ans, $return;

  foreach($vals as $key => $val)
  {
   foreach($vals as $key2 => $val2)
   {
    if($key != $key2)
    {
     foreach($vals as $key3 => $val3)
     {
      if(($key != $key3) && ($key2 != $key3))
      {
       foreach($vals as $key4 => $val4)
       {
        if(($key != $key4) && ($key2 != $key4) && ($key3 != $key4))
        {
         foreach($vals as $key5 => $val5)
         {
          if(($key != $key5) && ($key2 != $key5) && ($key3 != $key5)
             && ($key4 != $key5))
          {
           foreach($vals as $key6 => $val6)
           {
            if(($key != $key6) && ($key2 != $key6) && ($key3 != $key6)
               && ($key4 != $key6) && ($key5 != $key6))
            {
             $temparray = operators($val, $val2);
             foreach($temparray as $strop => $caop)
             {
              $temparray2 = operators($caop, $val3);
              foreach($temparray2 as $strop2 => $caop2)
              {
               $temparray3 = operators($val4, $val5);
               foreach($temparray3 as $strop3 => $caop3)
               {
                $temparray4 = operators($caop3, $val6);
                foreach($temparray4 as $strop4 => $caop4)
                {
                 $temparray5 = operators($caop2, $caop4);
                 foreach($temparray5 as $strop5 => $caop5)
                 {
                  if($caop5 == $ans)
                  {
                   $return = "";
                   echo "A solution, using all the numbers, is
                              (((".$val." ".$strop." ".$val2.") "
                                  .$strop2." ".$val3.") "
                                  .$strop5." ((".$val4." "
                                  .$strop3." ".$val5.") "
                                  .$strop4." ".$val6.")).<br />";
                  }
                 }
                }
               }
              }
             }
            }
           }
          }
         }
        }
       }
      }
     }
    }
   }
  }
 }

 function twofour()
 {
  global $vals, $ans, $return;

  foreach($vals as $key => $val)
  {
   foreach($vals as $key2 => $val2)
   {
    if($key != $key2)
    {
     foreach($vals as $key3 => $val3)
     {
      if(($key != $key3) && ($key2 != $key3))
      {
       foreach($vals as $key4 => $val4)
       {
        if(($key != $key4) && ($key2 != $key4) && ($key3 != $key4))
        {
         foreach($vals as $key5 => $val5)
         {
          if(($key != $key5) && ($key2 != $key5) && ($key3 != $key5)
             && ($key4 != $key5))
          {
           foreach($vals as $key6 => $val6)
           {
            if(($key != $key6) && ($key2 != $key6) && ($key3 != $key6)
               && ($key4 != $key6) && ($key5 != $key6))
            {
             $temparray = operators($val, $val2);
             foreach($temparray as $strop => $caop)
             {
              $temparray2 = operators($caop, $val3);
              foreach($temparray2 as $strop2 => $caop2)
              {
               $temparray3 = operators($caop2, $val4);
               foreach($temparray3 as $strop3 => $caop3)
               {
                $temparray4 = operators($val5, $val6);
                foreach($temparray4 as $strop4 => $caop4)
                {
                 $temparray5 = operators($caop3, $caop4);
                 foreach($temparray5 as $strop5 => $caop5)
                 {
                  if($caop5 == $ans)
                  {
                   $return = "";
                   echo "A solution, using all the numbers, is
                              (((".$val." ".$strop." ".$val2.") "
                                  .$strop2." ".$val3.") "
                                  .$strop3." ".$val4.") "
                                  .$strop5." (".$val5." "
                                  .$strop4." ".$val6.")).<br />";
                  }
                 }
                }
               }
              }
             }
            }
           }
          }
         }
        }
       }
      }
     }
    }
   }
  }
 }

?>

<html>
 <head><title>Countdown Numbers Solver</title></head>

 <body>
  <form action="calculator.php" method="post">
   <table>
    <tr>
     <td colspan=6 align="center">
      <input type="text" name="answer" maxlength=3 size=4
             value = "<?php echo $_POST['answer']?>" />
     </td>
    </tr>
    <tr>
     <td align="center">
      <input type="text" name="b1" maxlength=3 size=4
             value = "<?php echo $_POST['b1']?>" />
     </td>
     <td align="center">
      <input type="text" name="b2" maxlength=3 size=4
             value = "<?php echo $_POST['b2']?>" />
     </td>
     <td align="center">
      <input type="text" name="b3" maxlength=3 size=4
             value = "<?php echo $_POST['b3']?>" />
     </td>
     <td align="center">
      <input type="text" name="b4" maxlength=3 size=4
             value = "<?php echo $_POST['b4']?>" />
     </td>
     <td align="center">
      <input type="text" name="b5" maxlength=3 size=4
             value = "<?php echo $_POST['b5']?>" />
     </td>
     <td align="center">
      <input type="text" name="b6" maxlength=3 size=4
             value = "<?php echo $_POST['b6']?>" />
     </td>
    </tr>
   </table>
   <br />

   <input type="submit" name="submit" Value="Submit">
  </form>

  <p>
   You are trying to obtain an answer of <?php echo $_POST['answer'];?> with the
   values:
  </p>
  <p>
   <?php

    $ans = $_POST['answer'];
    $vals = array($_POST['b1'], $_POST['b2'], $_POST['b3'], $_POST['b4'],
                  $_POST['b5'], $_POST['b6']);

    $i = 1;
    foreach($vals as $key => $value)
    {
     $temp = "b".$i;
     echo $value." ";
     $i++;
    }
   ?>
  </p>

  <p>
   <?php
    $return = "<br />That is all the possible solutions.";

    single();
    pairs();
    triple();
    quad();
    twotwo();
    quint();
    twothree();
    hex();
    twotwotwo();
    twofour();
    threethree();

    if($return != "")
    {
     $return = "Unfortunately there is no solution to this problem.";
    }

    echo $return;
   ?>
  </p>
 </body>
</html>
