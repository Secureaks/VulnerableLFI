<h2>Contact Us</h2>

<p>
    You can contact us by phone at 123-456-7890 or by email at <a href="mailto:mail@example.com">mail@example.com</a>,
    or by filling out the form below:
</p>

<form action="?page=contact.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>
    <br>
    <input type="submit" value="Send">
</form>

<p>
    <?= $_SERVER['REQUEST_METHOD'] === 'POST' ? 'Message sent!' : '' ?>
</p>
