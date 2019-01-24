// the function which handles the input field logic
function getUserName() {
     var price1 = document.getElementById('price1');
    var field1 = document.getElementById('university').value;
    document.getElementById('university2').value = field1;
    
    var field2 = document.getElementById('destination').value;
    document.getElementById('destination2').value = field2;
    
    var field3 = document.getElementById('date').value;
    document.getElementById('date2').value = field3;
    
    
    // show prices
    if (field2 == "Lagos") {
     price1.textContent = '7000';
     price2.textContent = 9000;
     price3.textContent = '55000';
     price4.textContent = '70000';
    }
    else if (field2 == "Abuja") {
     price1.textContent = '9000';
     price2.textContent = '11000';
     price3.textContent = '60000';
     price4.textContent = '100000';
    }
    
    else if (field2 == "Port Harcourt") {
     price1.textContent = '9000';
     price2.textContent = '11000';
     price3.textContent = '60000';
    price4.textContent = '100000';
    }
    
    else if (field2 == "Akwa Ibom") {
     price1.textContent = '10000';
     price2.textContent = '12000';
     price3.textContent = '60000';
     price4.textContent = '110000';
    }
    
    else if (field2 == "Calabar") {
     price1.textContent = '10000';
     price2.textContent = '12000';
     price3.textContent = '70000';
     price4.textContent = '120000';
    }
    
    else if (field2 == "Ibadan") {
     price1.textContent = '7000';
     price2.textContent = '9000';
     price3.textContent = '55000';
     price4.textContent = '80000';
    }
    
    else if (field2 == "Ilorin") {
     price1.textContent = '7000';
     price2.textContent = '9000';
     price3.textContent = '50000';
     price4.textContent = '70000';
    }
    
    else if (field2 == "Benin") {
     price1.textContent = '7000';
     price2.textContent = '9000';
     price3.textContent = '60000';
     price4.textContent = '100000';
    }
    
    else if (field2 == "Delta") {
     price1.textContent = '7000';
     price2.textContent = '9000';
     price3.textContent = '60000';
     price4.textContent = '100000';
    }
    
    else if (field2 == "Kaduna") {
     price1.textContent = '11000';
     price2.textContent = '13000';
     price3.textContent = '70000';
     price4.textContent = '110000';
    }
    
    else if (field2 == "Jos") {
     price1.textContent = '11000';
     price2.textContent = '13000';
     price3.textContent = '70000';
     price4.textContent = '110000';
    }
    

    
    //example
     var nameField = document.getElementById('nameField').value;
    var result = document.getElementById('result');
    
    if (nameField.length < 3) {
        result.textContent = 'Username must contain at least 3 characters';
        //alert('Username must contain at least 3 characters');
    } else {
        result.textContent = 'Your username is: ' + nameField;
        document.getElementById('myField').value = nameField;
        //alert(nameField);
    }
    
}

//select1
function select1() {
document.getElementById('class').value = 'Classic';      
}

//select2
function select2() {
document.getElementById('class').value = 'Luxury';      
}


//select3
function select3() {
document.getElementById('class').value = 'Sienna';      
}

//select4
function select4() {
document.getElementById('class').value = 'Hiace';      
}

// Background photos
function bookback() {
    document.body.style.backgroundImage = "url('images/book2.jpg')";
    document.body.style.backgroundSize = "cover";
    document.body.style.backgroundRepeat = "no-repeat";
}                             

function workback() {
    document.body.style.backgroundImage = "url('images/workback.jpg')";
    document.body.style.backgroundSize = "cover";
    document.body.style.backgroundRepeat = "no-repeat";
}

function aboutback() {
    document.body.style.backgroundImage = "url('images/aboutback.jpg')";
    document.body.style.backgroundSize = "cover";
    document.body.style.backgroundRepeat = "no-repeat";
}

function contactback() {
    document.body.style.backgroundImage = "url('images/contactback.jpg')";
    document.body.style.backgroundSize = "cover";
    document.body.style.backgroundRepeat = "no-repeat";
}

function homeback() {
    document.body.style.backgroundImage = "url('images/page1.jpeg')";
    document.body.style.backgroundSize = "cover";
    document.body.style.backgroundRepeat = "no-repeat";
}


// use an eventlistener for the event
var subButton = document.getElementById('subButton');
subButton.addEventListener('click', getUserName, false);

var subvalues = document.getElementById('book');
subvalues.addEventListener('click', getUserName, false);

var subclass1 = document.getElementById('classic');
subclass1.addEventListener('click', select1, false);

var subclass2 = document.getElementById('luxury');
subclass2.addEventListener('click', select2, false);

var subclass3 = document.getElementById('charter');
subclass3.addEventListener('click', select3, false);





