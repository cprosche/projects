//Selectors
const parseInput = document.getElementById("parse-input"); //gets the input box
const parseButton = document.getElementById("parse-submit"); //gets the button
const parseOutput = document.getElementById("parse-result"); //get the output element, will output as innerHTML

//event listeners
parseButton.addEventListener("click", parse);

//math parsing function
//currently built to handle: + -(both subtraction and negative numbers)
//wont handle: / * () (yet)

//Order of operations:
// Parentheses
// Exponents
// Multiplcation/Division (goes left to right)
// Addition/Subtraction (goes left to right)

function parse(e) {
  e.preventDefault();
  let stringToParse = parseInput.value;
  //remove white space
  stringToParse = stringToParse.replace(/\s+/g, "").trim();

  //check for forbidden characters and return error

  //send to actual parser
  let parsedValue = parseSubtraction(stringToParse);
  //output to html
  printResult(parsedValue);
}

function parseSubtraction(string) {
  //input "5-10-20"
  string = string.split("-"); //['5', '10', '20']

  //this is needed to have the correct order of operations. Doing this like the parseAddition function leads to wrong order of operations
  //also allows it to handle negative numbers
  let i;
  for (i = 1; i < string.length; i++) {
    string[i] = "-" + string[i];
  }
  string = string.map((arrayValue) => parseAddition(arrayValue));
  string = string.reduce((accumulator, currentValue) => {
    return accumulator + currentValue; //addition because string holds negative values AKA [5, -10, -20]
  });
  //5-10-20=-25
  return string;
}

function parseAddition(value) {
  value = value.split("+");
  value = value.map((arrayValue) => +arrayValue);

  value = value.reduce((accumulator, currentValue) => {
    return accumulator + currentValue;
  });

  return value;
}

function parseMultiplication(value) {}

function printResult(parsed) {
  parseOutput.innerHTML = parsed;
}
