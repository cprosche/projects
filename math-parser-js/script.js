//Selectors
const parseInput = document.getElementById("parse-input"); //gets the input box
const parseButton = document.getElementById("parse-submit"); //gets the button
const parseOutput = document.getElementById("parse-result"); //get the output element

//event listeners
parseButton.addEventListener("click", parse);

//math parsing function
//currently built to handle:
//wont handle: + - / * () (yet)
function parse(e) {
  e.preventDefault();
  let stringToParse = parseInput.value;
  //remove white space
  stringToParse = stringToParse.replace(/\s+/g, "").trim();

  //check for forbidden characters and return error

  //Order of operations: parenthases, exponents, Multiplcation, Division, Addition, Subtraction
  let parsedValue = parseSubtraction(stringToParse);
  //output to html
  printResult(parsedValue);
}

function parseSubtraction(string) {
  //input "5-10-20"
  string = string.split("-"); //['5', '10', '20']
  string = string.map((arrayValue) => parseAddition(arrayValue)); //[5, 10, 20], converts string to number
  string = string.reduce((accumulator, currentValue) => {
    return accumulator - currentValue;
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

function printResult(parsed) {
  parseOutput.innerHTML = parsed;
}
