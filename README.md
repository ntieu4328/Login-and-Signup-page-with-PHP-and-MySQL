<h1>Login and Signup page with PHP and MySQL</h1>

<h2>Description:</h2>

This project consists of creating a Login and Signup page using PHP and MySQL. I will also create a database where the user information will be stored using XAMPP and phpMyAdmin. XAMPP is a free open-source cross-platform web server solution that uses the PHP programming language.

<h2>Environments Used:</h2>

   - XAMPP
   - phpMyAdmin

<h2>Walk-through:</h2>

<h3>Set-Up:</h3>

1. Download [XAMPP](https://www.apachefriends.org/)

2. Import all of the files listed above, other than the README.md, into the file path:

   HardDrive/XAMPP/htdocs/FolderName

![where to create files](https://github.com/ntieu4328/Login-and-Signup-page-with-PHP-and-MySQL/assets/156137990/9b93f9e0-9e29-4b40-a222-a111c38ee75c)

I added lots of comments in the code that explain what it does. If you want to edit or add things to the code after you have put it into the file path, make sure to run your IDE as administrator.

3. <b>IMPORTANT:</b> Launch XAMPP as administrator
  
4. Start Apache and MySQL:

![start apache   mysql](https://github.com/ntieu4328/Login-and-Signup-page-with-PHP-and-MySQL/assets/156137990/f928890b-c0a2-4a94-b2a0-cadd235e8ed5)

5. Go into the XAMPP dashboard by searching localhost in a web browser:

![XAMPP dashboard](https://github.com/ntieu4328/Login-and-Signup-page-with-PHP-and-MySQL/assets/156137990/a8c6bf28-4cb0-47ca-9d65-0e0e2f15d576)

6. Go into phpMyAdmin
  
7. Start creating the database:

![create and name new database](https://github.com/ntieu4328/Login-and-Signup-page-with-PHP-and-MySQL/assets/156137990/e0d2ae03-dd98-4f7c-b6da-1ab290b452fc)

8. Name the table:

![table name](https://github.com/ntieu4328/Login-and-Signup-page-with-PHP-and-MySQL/assets/156137990/1594c2fe-6c05-40b5-998e-cf8a0895b265)

<b>IMPORTANT:</b> If you change the name of the database and table, then you will need to change it in the code.

9. Create the table with the exact settings:

![database creation](https://github.com/ntieu4328/Login-and-Signup-page-with-PHP-and-MySQL/assets/156137990/9fb40e53-07dd-41d1-a4f8-0be1636695be)

<b>Everything has been set up for the Login and Signup page!!!</b>

<h2>Generate User Information:</h2>

1. Go to localhost/TestWebsite/RegistrationForm.html and signup a user:

Information I put in:
Username -> nathan
Password -> qwer1122!!@@

![registering information](https://github.com/ntieu4328/Login-and-Signup-page-with-PHP-and-MySQL/assets/156137990/81a50ec8-667e-4614-aaac-3c8102c4e50c)

![successful sign up](https://github.com/ntieu4328/Login-and-Signup-page-with-PHP-and-MySQL/assets/156137990/0fca53a8-463e-4a90-9058-52af2c2cb563)

The user login information is now added to the database. The password looks a lot different because the ProcessSignup.php file hashes the password. This is done, so that if a threat actor gains access to the database they can't login because they don't have the password. This is also done so the database admin can't see the real password as well. Imagine if the database admin, for some reason, wants to do malicious activity and the passwords aren't hashed. Also, imagine if a threat actor gains access to the system that the database admin uses and the passwords aren't hashed.

![Login information shows in database nathan qwer1122!!@@](https://github.com/ntieu4328/Login-and-Signup-page-with-PHP-and-MySQL/assets/156137990/d1e85d0b-4467-4914-9b52-e5864ffc8ea3)

2. Go to the login page either by clicking the Login link or going to localhost/TestWebsite/LoginPage.php:

![logging in](https://github.com/ntieu4328/Login-and-Signup-page-with-PHP-and-MySQL/assets/156137990/3c8f5393-bfad-4a77-8e2b-a7a32e6b58f2)

![successful login](https://github.com/ntieu4328/Login-and-Signup-page-with-PHP-and-MySQL/assets/156137990/33caa556-45fd-415f-a34a-f009f24437c1)

<b>You have finished adding a user!!!</b>

<h2>What if another user has the same password?</h2>

1. Add another user with the same password by doing the same process:

Other user information:
Username -> user1
Password -> qwer1122!!@@

![other user same password different hash](https://github.com/ntieu4328/Login-and-Signup-page-with-PHP-and-MySQL/assets/156137990/3733403d-7129-4a64-9bff-d6e62df776e0)

In the signup form, I inputted the same password. In the database, the hashed password looks different. This is because the password is salted. This makes all of the passwords unique.

<b>This project is finished!!!</b>
