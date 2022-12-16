<?php
class Account
{
    public int $number;
    public string $type;
    protected float $balance;

    public function __construct($number, $type, $balance = 0)
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

    public function getBalance(): float
    {
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
$checking = new Account(134251, 'Checking', 2000);
$savings = new Account(123451, 'Savings');
$highYield = new Account(123123, 'High Yield', 5000);
$customer = new Customer();

$customer->email = 'luka@gmail.com';





?>
<?php require 'includes/header.php'; ?>
<h1>Hello World</h1>

<p>Original ammount <?= $checking->getBalance() ?>kn</p>
<!-- call a method to deposit 50 more to the balance property -->
<p>Current ammount <?= $checking->deposit(50) ?>kn</p>
<!-- call a method to withdraw 100 from the balance property -->
<p>Current ammount <?= $checking->withdraw(100) ?>kn</p>
<p>Current ammount savings <?= $savings->getBalance() ?></p>

<h2>Account balances</h2>

<table>
    <tr>
        <th>Date</th>
        <th><?= $checking->type ?></th>
        <th><?= $savings->type ?></th>
        <th><?= $highYield->type ?></th>
    </tr>
    <tr>
        <td><?= date("Y/m/d") ?></td>
        <td><?= $checking->getBalance() ?></td>
        <td><?= $savings->getBalance() ?></td>
        <td><?= $highYield->getBalance() ?></td>
    </tr>
    <tr>
        <td><?= date("Y/m/d") ?></td>
        <td><?= $checking->deposit(50) ?></td>
        <td><?= $savings->withdraw(50) ?></td>
        <td><?= $highYield->deposit(1000) ?></td>
    </tr>
    <tr>
        <td><?= date("Y/m/d") ?></td>
        <td><?= $checking->withdraw(1000) ?></td>
        <td><?= $savings->deposit(1000) ?></td>
        <td><?= $highYield->deposit(1000) ?></td>
    </tr>
</table>

<p><?= $customer->email; ?></p>

<?php require 'includes/footer.php'; ?>