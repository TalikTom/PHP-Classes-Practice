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

class Customer 
{
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;
}
$account = new Account();
$customer = new Customer();

$customer->email = 'luka@gmail.com';

$account->balance = 1000.00;


?>
<?php require 'includes/header.php'; ?>
<h1>Hello World</h1>
<p><?= $account->balance ?></p>
<p><?= $customer->email; ?></p>

<?php require 'includes/footer.php'; ?>