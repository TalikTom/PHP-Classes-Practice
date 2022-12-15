<?php
class Account
{
    public int $number;
    public string $type;
    public float $balance;

    public function __construct($number, $type, $balance)
    {
        $this->number = $number;
        $this->type = $type;
        $this->balance = $balance;
    }

    public function deposit (float $amount): float
    {
        $this->balance += $amount;
        return $this->balance;
    }

    public function withdraw(float $amount): float
    {
        $this->balance -= $amount;
        return $this->balance;
    }

}

class Customer 
{
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;
}
$account = new Account(134251, 'Checking', 2000);
$account2 = new Account(123451, 'Saving', 1000);
$customer = new Customer();

$customer->email = 'luka@gmail.com';
$account->balance = 3000;




?>
<?php require 'includes/header.php'; ?>
<h1>Hello World</h1>

<p>Original ammount <?= $account->balance ?>kn</p>
<!-- call a method to deposit 50 more to the balance property -->
<p>Current ammount <?= $account->deposit(50) ?>kn</p>
<!-- call a method to withdraw 100 from the balance property -->
<p>Current ammount <?= $account->withdraw(100) ?>kn</p>
<p>Current ammount account2 <?= $account2->balance ?></p>


<p><?= $customer->email; ?></p>

<?php require 'includes/footer.php'; ?>