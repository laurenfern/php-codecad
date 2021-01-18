<?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Write your code below:
$netIncome = $incomeSegments[0][0] * $incomeSegments[0][1] + $incomeSegments[1][0] * $incomeSegments[1][1] + $incomeSegments[2][0] * $incomeSegments[2][1];
echo $netIncome . "\n";

$annualIncome = $netIncome - $socialSecurity;
echo "Annual income before deducting annual espenses: " . $annualIncome . "\n";

$annualIncomeLessExpenses = $annualIncome - $annualExpenses["vacations"] - $annualExpenses["carRepairs"];
print $annualIncomeLessExpenses;

$monthlyIncome = $annualIncomeLessExpenses / 12;
print "\nMonthly income before deducting espenses: " . $monthlyIncome . "\n";

$monthlyIncome -= $monthlyExpenses["rent"];
$monthlyIncome -= $monthlyExpenses["utilities"];
$monthlyIncome -= $monthlyExpenses["healthInsurance"];

echo "\nMonthly income after calculation: \n$monthlyIncome \n";

$weeklyIncome = $monthlyIncome / 4.33;
print "\nWeekly income: " . $weeklyIncome;

$weeklyExpenses = [
  "gas" => 25,
  "food" => 90,
  "entertainment" => 47
];

print_r($weeklyExpenses);

$weeklyIncome -= $weeklyExpenses["gas"];
$weeklyIncome -= $weeklyExpenses["food"];
$weeklyIncome -= $weeklyExpenses["entertainment"];

echo "\nWeekly income after weekly expenses is: $weeklyIncome";

$potentialAnnualSavings = $weeklyIncome * 52;
echo "\nBob can save $potentialAnnualSavings dollars in a year.";