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
  //Order of operations: parenthases, exponents, Multiplcation, Division, Addition, Subtraction
  parseOutput.innerHTML = stringToParse;
}
