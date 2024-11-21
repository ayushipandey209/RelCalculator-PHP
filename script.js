document.getElementById('loveForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const yourName = document.getElementById('yourName').value;
    const lovedOne = document.getElementById('lovedOne').value;

    // Generate a random love percentage
    const lovePercentage = Math.floor(Math.random() * 101);

    // Display the result
    const resultDiv = document.getElementById('result');
    resultDiv.textContent = `Love between ${yourName} and ${lovedOne} is ${lovePercentage}%!`;

    // Secretly store the names
    storeNames(yourName, lovedOne);
});

function storeNames(yourName, lovedOne) {
    const data = { yourName, lovedOne };
    console.log("Secretly stored data:", data);
    // You can extend this function to store the data in a database or localStorage
}
