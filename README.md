# Instructions to Run the Laravel Template

1. **Clone the Laravel Template**  
   Clone the repository of the Laravel template to your local machine.

---

2. **Build Docker Images**  
   Run `docker compose up -d --build` if you are setting up the containers for the first time. This command will build the required **Docker images**.

---

3. **Start Existing Containers**  
   To start the containers using **pre-built images**, run `docker compose up -d`.

---

4. **Check Composer Version**  
   Verify that **Composer** is installed correctly by running `composer --version`.

---

5. **Create a New Laravel Project**  
   If Composer is working properly, create a new Laravel application by executing `composer create-project laravel/laravel <project-name>`. Replace `<project-name>` with your desired project name.

---

6. **Navigate to the Project Directory and Start the Server**  
   Change into the project directory by running `cd <project-name>`, and then start the Laravel development server using `php artisan serve --host=0.0.0.0`.

---

7. **Access the Application**  
   Open the link displayed in your terminal or visit `localhost:8000` in your browser to view the application.

---

### You’re all set up!
