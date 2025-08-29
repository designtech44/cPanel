<?php
echo "<h2>Form Data Test</h2>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>POST Data Received:</h3>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    
    echo "<h3>Individual Fields:</h3>";
    echo "Name: " . (isset($_POST['name']) ? $_POST['name'] : 'NOT FOUND') . "<br>";
    echo "Email: " . (isset($_POST['email']) ? $_POST['email'] : 'NOT FOUND') . "<br>";
    echo "Message: " . (isset($_POST['message']) ? $_POST['message'] : 'NOT FOUND') . "<br>";
} else {
    echo "No form data submitted yet.";
}
?>

<h3>Test Form:</h3>
<form method="POST" action="form-test.php">
    <p>Name: <input type="text" name="name" value="Test Name"></p>
    <p>Email: <input type="email" name="email" value="test@test.com"></p>
    <p>Message: <textarea name="message">This is a test message with multiple lines.</textarea></p>
    <p><button type="submit">Test Submit</button></p>
</form>