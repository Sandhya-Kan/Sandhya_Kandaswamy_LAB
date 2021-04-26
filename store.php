<?php
if(isset($_POST['submit'])) {
            
            $quantity1=$_POST["quantity1"];
            $quantity2=$_POST["quantity2"];
            $quantity3=$_POST["quantity3"];
            $quantity4=$_POST["quantity4"];
            $shipping1=$_POST["ship1"];
            $shipping2=$_POST["ship2"];
            $shipping3=$_POST["ship3"];

            $Total=0;
            $shippingcost=0;

            if($quantity1>0){
              $Total=$quantity1*23;
            } else {
              $Total=$Total;
            }
            if($quantity2>0){
              $Total=$Total+($quantity2*56);
            }
            if($quantity3>0){
              $Total=$Total+($quantity3*80);
            }
            if($quantity4>0){
              $Total=$Total+($quantity4*99);
            }

            if($shipping1=="Free 7 day"){
              $shippingcost=0;
              $shipname="Free 7 day";
            }
            if($shipping2=="$50.00 over night"){
              $shippingcost=50;
              $shipname="$50.00 over night";
            }
            if($shipping3=="$5.00 three day"){
              $shippingcost=5;
              $shipname="$5.00 three day";
            }
            $q1=($quantity1*23);
            $q2=($quantity2*56);
            $q3=($quantity3*80);
            $q4=($quantity4*99);
            $TotalCost=$Total+$shippingcost;
            echo "<h1><b>Your Recepit</b></h1>";
            echo "<table border='1'>

            <tr>

            <th>Item</th>
            <th>Quantity</th>
            <th>Cost Per Item</th>
            <th>Sub Total</th>

            </tr>
            <tr>

            <th>Toy</th>
            <th>$quantity1</th>
            <th>23</th>
            <th>$q1</th>
            </tr>
            <tr>

            <th>Instant Pot</th>
            <th>$quantity2</th>
            <th>56</th>
            <th>$q2</th>

            </tr>
            <tr>
            <th>Tennis Racquet</th>
            <th>$quantity3</th>
            <th>80</th>
            <th>$q3</th>

            </tr>
            <tr>
            <th>Ear Phone</th>
            <th>$quantity4</th>
            <th>99</th>
            <th>$q4</th>

            </tr>
            <tr>
            <th>Shipping</th>
            <th colspan='2'>$shipname</th>
            <th>$shippingcost</th>

            </tr>
            </tr>
            <tr>
            <th colspan='3'>Total Cost</th>
            <th>$TotalCost</th>

            </tr>";

        }
?>
