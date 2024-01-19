<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internal Marks Calculator</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 20px;
            background-color: #f4f4f4;
        }

        #calculator {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            box-sizing: border-box;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #555;
            text-align: left;
        }

        input {
            padding: 10px;
            margin-bottom: 15px;
            width: 100%;
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
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        #result {
            font-size: 18px;
            margin-top: 15px;
            color: #333;
        }
    </style>
</head>
<body>

<div id="calculator">
    <h2>Internal Marks Calculator</h2>

    <label for="cat1">Your CAT1 marks:</label>
    <input type="number" id="cat1">

    <label for="cat2">Your CAT2 marks:</label>
    <input type="number" id="cat2">

    <label for="at3">Your CAT3 marks:</label>
    <input type="number" id="at3">

    <label for="assignment1">Assignment1 marks:</label>
    <input type="number" id="assignment1">

    <label for="assignment2">Assignment2 marks:</label>
    <input type="number" id="assignment2">

    <label for="assignment3">Assignment3 marks:</label>
    <input type="number" id="assignment3">

    <button onclick="calculateInternalMarks()">Calculate Internal Marks</button>

    <p id="result"></p>
</div>

<script>
    function calculateInternalMarks() {
        var cat1 = parseFloat(document.getElementById("cat1").value) || 0;
        var cat2 = parseFloat(document.getElementById("cat2").value) || 0;
        var at3 = parseFloat(document.getElementById("at3").value) || 0;
        var assignment1 = parseFloat(document.getElementById("assignment1").value) || 0;
        var assignment2 = parseFloat(document.getElementById("assignment2").value) || 0;
        var assignment3 = parseFloat(document.getElementById("assignment3").value) || 0;

        var internalMarks = (0.7 * (cat1 + cat2 + at3)) + (0.3 * (assignment1 + assignment2 + assignment3));
        internalMarks = (internalMarks / 3) * 0.8;

        var resultElement = document.getElementById("result");
        resultElement.innerHTML = "Internal Marks: " + internalMarks.toFixed(2);
    }
</script>

</body>
</html>
