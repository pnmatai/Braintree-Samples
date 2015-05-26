<?php
require_once "lib/Braintree.php";
$clientToken = Braintree_ClientToken::generate();
?>

<!DOCTYPE html>
<html>

<h1>Basic Dropin </h1>
<body>

<form id="checkout" method="post" action="transaction.php">
  <div id="dropin"></div>
  <input type="submit" value="Pay $10">
</form>

</body>
</html>
<script src="https://js.braintreegateway.com/v2/braintree.js"></script>
<script type="text/javascript">
    braintree.setup("<?php echo $clientToken?>", "dropin", {
        container: 'dropin',
		
    });
</script>
