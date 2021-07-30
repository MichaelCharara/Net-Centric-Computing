/* code goes here */

var isCanadian = true;
/*
function taxRate() {
    // remember : variables defined outside of a function have global scope
    if (isCanadian) {
        return 0.05;
    } else {
        return 0.0;
    }
}
*/

function calculateTax(amount, tax) {
    // return amount * taxRate();
    // define a function as an object
    var tax = function () {
        if (isCanadian) {
            return 0.05;
        } else {
            return 0.0;
        }
    };
    // now invoke the function using the object
    return amount * tax();
}

function calculateTotal(price, quantity) {
    var amount = price * quantity;
    return amount + calculateTax(amount, function () {
        if (isCanadian) {
            return 0.05;
        } else {
            return 0.0;
        }
    });
}

