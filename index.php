<?php
class Account
{
    public int $number;
    public string $type;
    public float $balance;

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
$account = new Account();
$customer = new Customer();

$customer->email = 'luka@gmail.com';

$account->balance = 1000.00;


?>
<?php require 'includes/header.php'; ?>
<h1>Hello World</h1>

<p>Original ammount <?= $account->balance ?>kn</p>
<!-- call a method to deposit 50 more to the balance property -->
<p>Current ammount <?= $account->deposit(50) ?>kn</p>
<!-- call a method to withdraw 100 from the balance property -->
<p>Current ammount <?= $account->withdraw(100) ?>kn</p>


<p><?= $customer->email; ?></p>

<?php require 'includes/footer.php'; ?>