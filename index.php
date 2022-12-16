<?php
class Account
{
    public  $number;
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

//created account2 for the purpose of storing object in a property of an object
class Account2
{
    public AccountNumber $numberOiO;
    public string $type;
    protected float $balance;

    public function __construct(AccountNumber $numberOiO, $type, $balance = 0)
    {
        $this->numberOiO = $numberOiO;
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


class AccountNumber 
{
    public int $accountNumber;
    public int $routingNumber;

    public function __construct(int $accountNumber,
    int $routingNumber)
    {
        $this->accountNumber = $accountNumber;
        $this->routingNumber = $routingNumber;
    }
}


$checking = new Account(134251, 'Checking', 2000);
$savings = new Account(123451, 'Savings');
$highYield = new Account(123123, 'High Yield', 5000);
$customer = new Customer();

$customer->email = 'luka@gmail.com';

$numbers =
    [
        'account_number' => 123456789,
        'routing_number' => 987654321,
    ];

$account = new Account($numbers, 'Savings', 10);

$numbersOiO = new AccountNumber(1122334455, 9988776655);
$accountOiO = new Account2($numbersOiO, 'Checking')



?>
<?php require 'includes/header.php'; ?>
<h1>Hello World</h1>

<p>Original ammount <?= $checking->getBalance() ?>kn</p>
<!-- call a method to deposit 50 more to the balance property -->
<p>Current ammount <?= $checking->deposit(50) ?>kn</p>
<!-- call a method to withdraw 100 from the balance property -->
<p>Current ammount <?= $checking->withdraw(100) ?>kn</p>
<p>Current ammount savings <?= $savings->getBalance() ?></p>
<p>This is where i stored an array into property of an object: <?= $account->number['account_number'] ?></p>
<p>This is where i stored an array into property of an object: <?= $account->number['routing_number'] ?></p>
<p>This is where i stored an object into property of an object: <?= $accountOiO->numberOiO->accountNumber ?></p>
<p>This is where i stored an object into property of an object: <?= $accountOiO->numberOiO->routingNumber ?></p>

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