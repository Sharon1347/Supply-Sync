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

?>

<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
           Party List</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">

        <form class="form-inline" action="" name="form1" method="post">
                    <div class="form-group">
                        <label for="email">Select Company Name</label>
                        <select class="form-control" name="company_name">
                              <?php
                              $res=mysqli_query($link, "select * from party_info");
                              while($row=mysqli_fetch_array($res))
                              {
                                 echo "<option>";
                                 echo  $row["businessname"];
                                 echo "</option>";

                              }
                              ?>
                        </select>
                    </div>
                    <button type="submit" name="submit1" class="btn btn-success">Show Purchase From This Company</button>
                    <button type="button" name="submit2" class="btn btn-warning" onclick="window.location.href=window.location.href">Clear Search</button>
                </form>

                <br>

                <?php
                if(isset($_POST["submit1"]))
                {
                    ?>
                     <table class="table table-bordered">
                <tr>
                    <th>company_name</th>
                    <th>product_name</th>
                    <th>unit</th>
                    <th>packing_size</th>
                    <th>quantity</th>
                    <th>price</th>
                    <th>party_name</th>
                    <th>purchase_type</th>
                    <th>expiry_date</th>
                    <th>purchase_date</th>
                    <th>username</th>
                </tr>
                <?php 
                $res=mysqli_query($link, "select * from purchase_master where party_name='$_POST[company_name]' ");
                while ($row=mysqli_fetch_array($res))
                {
                    echo "<tr>";
                    echo "<td>"; echo $row["company_name"]; echo "</td>";
                    echo "<td>"; echo $row["product_name"]; echo "</td>";
                    echo "<td>"; echo $row["unit"]; echo "</td>";
                    echo "<td>"; echo $row["packing_size"]; echo "</td>";
                    echo "<td>"; echo $row["quantity"]; echo "</td>";
                    echo "<td>"; echo $row["price"]; echo "</td>";
                    echo "<td>"; echo $row["party_name"]; echo "</td>";
                    echo "<td>"; echo $row["purchase_type"]; echo "</td>";
                    echo "<td>"; echo $row["expiry_date"]; echo "</td>";
                    echo "<td>"; echo $row["purchase_date"]; echo "</td>";
                    echo "<td>"; echo $row["username"]; echo "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
                    
                    <?php
                    }
                ?>
           
        </div>

    </div>
</div>

<?php
include "footer.php";
?>




