var budget = 1500;

function shopDetails(){
    alert("Shop Name: ElectroMArt\n Minimum purchase amount: 1500\nSpecial Discounts: Available");
}

function budgetUser(){
    var userBudget = window.prompt("Enter the budget: ")

    if (userBudget > budget){
        window.alert("Sufficient Budget to shop. Enjoy!!!");
    }
    else{
        window.alert("Insufficient Balance.");
    }
}

function bill(){
    var LEDBulb = window.prompt("Enter LED Bulb count: ");
    var LEDTube = window.prompt("Enter LED Tube Light count: ");
    var ExtensionC = window.prompt("Enter Extension Cord count: ")

    var tot = 1200*LEDBulb + 2500*LEDTube + 1300*ExtensionC;

    if (tot >= 5000){
        tot = tot * 0.85;
    }
    else if (tot >= 3000 && tot < 5000){
        tot = tot*0.90;
    }
    else if (tot >= 1500 && tot < 3000){
        tot = tot*0.95;
    }

    window.alert("Total Amount: "+tot);

}