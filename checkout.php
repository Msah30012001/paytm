<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <title>Merchant Check Out Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <meta name="GENERATOR" content="Evrsoft First Page">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>Merchant Check Out Page</h1>
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="PaytmKit/pgRedirect.php">
                        <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000, 99999999) ?>">
                        <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001">
                        <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
                        <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">City</label>
                                <input type="text" name="city" class="form-control" id="exampleFormControlInput1" placeholder="Enter your city">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Amount</label>
                                <input title="TXN_AMOUNT" class="form-control" tabindex="10" type="text" name="TXN_AMOUNT" value="100">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <input value="CheckOut" type="submit" onclick="" class="btn btn-primary">
                            <!-- <table border="1">
                                <tbody>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Label</th>
                                        <th>Value</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><label>ORDER_ID::*</label></td>
                                        <td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000, 99999999) ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><label>CUSTID ::*</label></td>
                                        <td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><label>INDUSTRY_TYPE_ID ::*</label></td>
                                        <td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><label>Channel ::*</label></td>
                                        <td><input id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><label>txnAmount*</label></td>
                                        <td><input title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="1">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><input value="CheckOut" type="submit" onclick=""></td>
                                    </tr>
                                </tbody>
                            </table>
                            * - Mandatory Fields -->
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>