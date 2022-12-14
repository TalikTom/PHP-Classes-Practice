<?php
class Account
{
    public int $number;
    public string $type;
    public float $balance;

    public function deposit (float $amount): float
    {

    }

    public function withdraw(float $amount): float
    {

    }

}

$account = new Account();

$account->balance = 1000.00;

echo $account->balance;

?>
<?php require 'includes/header.php'; ?>
<h1>Hello World</h1>

<?php require 'includes/footer.php'; ?>