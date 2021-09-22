<?php
include 'mechanical_admin/config.php';

error_reporting(0);

if (!empty($_POST["action"])) {
    switch ($_POST["action"]) {
        case "add":
            if (!empty($_POST["quantity"])) {
                $sql = "SELECT * FROM tbl_servicecharge where id='" . $_POST["id"] . "' ";
                $result = mysqli_query($con, $sql);
                $productByid = mysqli_fetch_array($result);
                $itemArray = array($productByid["id"] => array('brand' => $productByid["brand"], 'id' => $productByid["id"], 'quantity' => 1, 'model' => $productByid["model"], 'service' => $productByid["service"], 'variant' => $productByid["variant"], 'selling_price' => $productByid["selling_price"]));

                if (!empty($_SESSION["cart_item"])) {
                    if (in_array($productByid["id"], $_SESSION["cart_item"])) {
                        foreach ($_SESSION["cart_item"] as $k => $v) {
                            if ($productByid["id"] == $k)
                                $_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
                        }
                    } else {
                        $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
                    }
                } else {
                    $_SESSION["cart_item"] = $itemArray;
                }
            }
            break;
        case "remove":

            foreach ($_SESSION["cart_item"] as $k) {
                if ($_POST["id"] = $k)
                    unset($_SESSION["cart_item"][$k]);
                if (empty($_SESSION["cart_item"]))
                    unset($_SESSION["cart_item"]);
            }

            break;
        case "empty":
            unset($_SESSION["cart_item"]);
            break;
    }
}
