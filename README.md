# Login & Signup UI with Backend Authentication

## What This Project Does
This project is a simple login and signup system with a backend. It lets users create an account, log in, and stay logged in until they choose to log out. It also includes validation to make sure everything is secure and works properly.

## How Signup Works
- There are three input fields: Username, Password, and Confirm Password.
- If any field is empty, the signup won't work.
- The username must be at least 8 characters long and must not already be taken.
- The password must have at least:
  - One lowercase letter
  - One uppercase letter
  - One special character (like @, #, or !)
- The Confirm Password field must match the Password.
- Errors show up in real-time as the user types.
- If signup is successful, a message appears, and the user is sent to the login page after 2 seconds.
- There's a password strength meter that updates as the user types.

## How Login Works
- There are two input fields: Username and Password.
- If either field is empty, login won't work.
- The same validation rules from signup apply here.
- If the username doesn’t exist or the password is wrong, an error appears.
- Errors show up in real-time as the user types.
- If login is successful, the user is sent to a landing page that says "Hello, <username>!".
- The user stays logged in until they click the logout button.
- Clicking logout sends them back to the login page.

## How to Use It
1. Clone the project to htdocs(if using xampp).
2. Run the backend server on xampp.
3. initiate database and tables in mysql.
4. Start the frontend on browser by localhost/path name....
5. Open the app in a browser and sign up or log in.

## Things to Keep in Mind
- Usernames must be unique, so two people can’t have the same one.
- Passwords must follow the complexity rules for security.
- The system won’t allow invalid inputs, and it will show errors in real time.
- Users can’t log in unless they have already signed up.

## Tech Used
- Frontend: HTML, CSS, JavaScript
- Backend: PHP
- Database: mysql 


