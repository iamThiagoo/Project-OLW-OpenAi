<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## How do I run this project?

- There are a few ways you can run this project on your machine (through containers using Docker/Podman or having the resources already installed). In this tutorial I'm going to take the simplest path to explain that you already have the resources installed. They are: `` Laravel, PostgreSQL and Node ``;

- For the application to run it is necessary to have an active OpenAi API key, you can create an account through `` https://beta.openai.com/signup ``, with the created account and API key in hand we can follow to the next step;

- With everything installed and configured, run the command in your terminal: `` git clone https://github.com/iamThiagoo/Project-OLW-OpenAi.git `` and go to the root of the project;

- Go to your `` .env.example `` file and rename it to `` .env `` and define the OPENAI_API_KEY field with your API key

- Run the command: `` composer install `` to install the project dependencies

- Run the migrations with the seeders with the command: `` php artisan migrate ``  and   `` php artisan db:seed `` to populate your database

- Run the command: `` npm install `` and then ``php artisan serve && npm run dev `` to run the project

- Accessing the project, you will see the default Laravel screen, create an account and you will be redirected to the project dashboard. At this point, create a question for the artificial intelligence like "Generate a graph of last year's sales" and it will answer you 🙂

- ** Be aware that your artificial intelligence may return inconsistent results **

Credits to [Beer and Code](https://github.com/beerandcodeteam) to show this great project ❤️