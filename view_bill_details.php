<?php
session_start();
if(!isset($_SESSION["admin"]))
{
  ?>
  <script type="text/javascript">
    window.location="index.php";
  </script>
  <?php
}
?>
<?php
include "header.php";
include "../user/connection.php";
$id = ($_GET['id']);
$full_name="";
$bill_type="";
$date="";
$bill_no="";
$res= mysqli_query($link,"select * from billing_header where id=$id");
while($row=mysqli_fetch_array($res))

{
       $full_name=$row["full_name"];
       $bill_type=$row["bill_type"];
       $date=$row["date"];
       $bill_no=$row["bill_no"];
}
?>

<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Detailed Bills</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
            <center>
                <h4>Detailed Bills</h4>
            </center>
            
            <table>
                <tr>
                    <td>Bill No:</td>
                   <td><?php echo $bill_no; ?></td>
                </tr>
                <tr>
                   <td>Full Name:</td>
                    <td><?php echo $full_name; ?></td>
                </tr>
                <tr>
                    <td>Bill Type:</td>
                    <td><?php echo $bill_type; ?></td>
                 </tr>
                 <td>Bill Date:</td>
                <td><?php echo $date; ?></td> 
          </table>
          <br>
          <table  class="table table-bordered">
            <tr>
                <th>Product Company</th>
                <th>Product Name</th>
                <th>Product Unit</th>
                <th>Packing Size</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Total</th>
                <th>Return</th>
            </tr>
            <?php
            $total=0;
            $res=mysqli_query($link, "select * from billing_details where bill_id=$id");
            while($row=mysqli_fetch_array($res))
            {
                echo "<tr>";
                echo "<td>" . $row["product_company"] . "</td>";
                echo "<td>" . $row["product_name"] . "</td>";
                echo "<td>" . $row["product_unit"] . "</td>";
                echo "<td>" . $row["packing_size"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                echo "<td>" . $row["qty"] . "</td>";
                echo "<td>" . $row["price"] * $row["qty"] . "</td>";
                echo "<td>" ?> <a href="return.php?id=<?php echo $row["id"]; ?>" style="color:red">Return</a> <?php echo "</td>";
                echo "</tr>";
                $total=$total+($row["price"] * $row["qty"]);
                
            }
            ?>
          </table>
         <div align="right" style="font-weight:bold">
            Grand Total:Ksh<?php echo $total; ?>
         </div>

        </div>

    </div>
</div>

<?php
include "footer.php";
?>




