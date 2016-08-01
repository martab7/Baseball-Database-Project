# Baseball League Web Application

This is the first of a series of exercises to illustrate how to relate the interface of a CRUD application
with their corresponding SQL statements. You will write the queries for a small application to keep track
of the results of the MLB games.

In this first step, you will create the `INSERT` statement that PHP will execute against your MySQL server.
This first web page consist of a form to add a new baseball team to your database.

You will need to organize the source files using the following structure inside of your folder `Database_Exercises`.

```
├── database
│   └── migration.sql
├── partials
│   ├── head.phtml
│   └── scripts.phtml
├── public
│   └── new-team.php
└── src
    └── Input.php
```

In order to see the output of these files you'll need to run the following 3 commands to create a new PHP site.

First create a new folder `database.dev` in your `sites` folder in your MAC.

Create a PHP site using `database.dev` as name using the ansible script.

```
ansible-playbook ansible/playbooks/vagrant/site/php.yml
```

Add the following line at the end of your `/etc/hosts` file.

```
192.168.77.77 database.dev
```

Browse to http://database.dev/new-team.php

Read the comments in the source code of the file `new-team.php` for more details. 

**Important note** In all of these exercises you will be either concatenating or interpolating strings in SQL queries,
which is a major [security vulnerability](https://www.owasp.org/index.php/SQL_Injection) and you should NEVER do it in
a real application. We will teach you how to query a database properly later.
