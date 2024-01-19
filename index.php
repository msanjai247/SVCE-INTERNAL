<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internal Marks Calculator</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #calculator {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: #333;
        }

        img {
            max-width: 100%;
            border-radius: 8px 8px 0 0;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #555;
        }

        input {
            padding: 10px;
            margin-bottom: 15px;
            width: 80%;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        #result {
            font-size: 18px;
            margin-top: 15px;
            color: #333;
        }

        .failure {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div id="calculator">
    <img src="https://th.bing.com/th/id/OIP.dG-GnywLVXch65pwySa4CQAAAA?rs=1&pid=ImgDetMain" alt="Banner Image">

    <h2>Internal Marks Calculator</h2>

    <label for="cat1">Your CAT1 marks:</label>
    <input type="number" id="cat1">

    <label for="cat2">Your CAT2 marks:</label>
    <input type="number" id="cat2">

    <label for="at3">Your CAT3 marks:</label>
    <input type="number" id="at3">

    <label for="assignment1">Your Assignment1 marks:</label>
    <input type="number" id="assignment1">

    <label for="assignment2">Your Assignment2 marks:</label>
    <input type="number" id="assignment2">

    <label for="assignment3">Your Assignment3 marks:</label>
    <input type="number" id="assignment3">

    <button onclick="calculateInternalMarks()">Calculate Internal Marks</button>

    <p id="result"></p>
</div>

<script>
    function calculateInternalMarks() {
        // Get input values
        var cat1 = parseFloat(getInputValue("cat1"));
        var cat2 = parseFloat(getInputValue("cat2"));
        var cat3 = parseFloat(getInputValue("at3")); // Using "Your CAT3 marks" label
        var assignment1 = parseFloat(getInputValue("assignment1"));
        var assignment2 = parseFloat(getInputValue("assignment2"));
        var assignment3 = parseFloat(getInputValue("assignment3"));

        // Calculate internal marks
        var internalMarks = calculateAverage(cat1, cat2, cat3) * 0.7 + calculateAverage(assignment1, assignment2, assignment3) * 0.3;
        internalMarks = (internalMarks / 3) * 0.8;

        // Display the result
        var resultElement = document.getElementById("result");
        resultElement.innerHTML = "Internal Marks: " + internalMarks.toFixed(2);

        // Display failure message if applicable
        if (internalMarks < 23) {
            resultElement.innerHTML += "<br><span class='failure'>You failed!</span>";
        }
    }

    function getInputValue(id) {
        return document.getElementById(id).value || 0;
    }

    function calculateAverage(value1, value2, value3) {
        return (value1 + value2 + value3) / 3;
    }
</script>

</body>
</html>
