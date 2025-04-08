<section id="contact-form">
            <h2>Leave Us a Message</h2>
            <form action="submit_form.php" method="POST">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>

                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>

                <label for="message">Your Message:</label>
                <textarea id="message" name="message" placeholder="Write your message here" rows="5" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </section>