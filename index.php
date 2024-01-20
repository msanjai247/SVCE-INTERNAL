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
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #calculator {
            max-width: 400px;
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            box-sizing: border-box;
            background-color: #fff;
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
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            background-color: #4caf50;
            color: #fff;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        #result {
            font-size: 18px;
            margin-top: 15px;
        }

        /* Colors based on result */
        .failed {
            color: red;
        }

        .passed {
            color: green;
        }

        .invalid {
            color: orange;
        }

        /* Comment Section Styles */
        hr {
            margin: 20px 0;
            border: none;
            border-top: 1px solid #ddd;
        }

        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div id="calculator">
    <h2>Internal Marks Calculator</h2>

    <label for="cat1">Your CAT1 marks:</label>
    <input type="number" id="cat1" max="50">

    <label for="cat2">Your CAT2 marks:</label>
    <input type="number" id="cat2" max="50">

    <label for="at3">Your CAT3 marks:</label>
    <input type="number" id="at3" max="50">

    <label for="assignment1">Assignment1 marks:</label>
    <input type="number" id="assignment1" max="50">

    <label for="assignment2">Assignment2 marks:</label>
    <input type="number" id="assignment2" max="50">

    <label for="assignment3">Assignment3 marks:</label>
    <input type="number" id="assignment3" max="50">

    <button onclick="calculateInternalMarks()">Calculate Internal Marks</button>

    <p id="result"></p>

    <hr>

    <h2>Comments</h2>

    <form id="commentForm">
        <label for="comment">Leave a comment (anonymous):</label>
        <textarea id="comment" rows="4" cols="50"></textarea>
        <button type="button" onclick="postComment()">Post Comment</button>
    </form>

    <div id="comments">
        <!-- Comments will be displayed here -->
    </div>
</div>

<script>
    function calculateInternalMarks() {
        var cat1 = parseFloat(document.getElementById("cat1").value) || 0;
        var cat2 = parseFloat(document.getElementById("cat2").value) || 0;
        var at3 = parseFloat(document.getElementById("at3").value) || 0;
        var assignment1 = parseFloat(document.getElementById("assignment1").value) || 0;
        var assignment2 = parseFloat(document.getElementById("assignment2").value) || 0;
        var assignment3 = parseFloat(document.getElementById("assignment3").value) || 0;

        // Validate marks to be less than or equal to 50
        if (cat1 > 50 || cat2 > 50 || at3 > 50 || assignment1 > 50 || assignment2 > 50 || assignment3 > 50) {
            alert("Please enter marks less than or equal to 50.");
            return;
        }

        var internalMarks = (0.7 * (cat1 + cat2 + at3)) + (0.3 * (assignment1 + assignment2 + assignment3));
        internalMarks = (internalMarks / 3) * 0.8;

        var resultElement = document.getElementById("result");
        var resultMessage;

        if (internalMarks < 23) {
            resultMessage = "You Failed";
            resultElement.classList = "failed";
        } else if (internalMarks >= 23 && internalMarks <= 40) {
            resultMessage = "Congratulations!! You Pass";
            resultElement.classList = "passed";
        } else if (internalMarks > 40) {
            resultMessage = "You input is Invalid, Check and Try again";
            resultElement.classList = "invalid";
            // Clear internal marks when invalid
            internalMarks = "";
        }

        resultElement.innerHTML = resultMessage + (internalMarks !== "" ? "<br>Internal Marks: " + internalMarks.toFixed(2) : "");
    }

    function postComment() {
        var commentText = document.getElementById("comment").value.trim();

        if (commentText !== "") {
            var commentsDiv = document.getElementById("comments");
            var commentElement = document.createElement("p");
            commentElement.textContent = "Anonymous: " + commentText;
            commentsDiv.appendChild(commentElement);

            // Clear the textarea after posting the comment
            document.getElementById("comment").value = "";
        } else {
            alert("Please enter a comment before posting.");
        }
    }
</script>

</body>
</html>
