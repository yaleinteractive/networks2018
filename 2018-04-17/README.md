# Interactive PHP

Tip: From the Terminal, type `php -a` to get an interactive PHP prompt where
you can try things out.

# CRUD

Create a record - often divided into NEW (fill out the form) and CREATE (save the data)
Read record(s) - INDEX page, and single record page (also called SHOW)
Update a record - often divided into EDIT (fill out the form) and UPDATE (save the data)
Destroy a record - DESTROY page

Our database system:

MySQL
Other popular ones: Postgresql, Sqlite
These all use a query language called SQL
And they are all relational database

# These are the PHP files and user flow

1. index.php: View all upcoming events. Enter date to get a new event started.
2. new.php: Fill out the form for a new event, which may be past or future.
3. create.php: Add the event to the database and thank the user.
4. event.php: Show an individual event. (Could often be called show.php.)

Shared code:

1. connect.php: Connect to the Database
2. track_session.php: Record sessions in the database

# Installation

1. Define your table structure

Database: calendar
 |_ Table: events
      |_ id: integer (auto-increment)
      |_ title: string - MySQL calls this VARCHAR(255)
      |_ date: date
      |_ time: time
      |_ description: text
      |_ image: VARCHAR(255)

2. Add some records using PHPMyAdmin

3. Make an index page. What's the design? What's the logic? How does it change?

4. Make a single record view page if you want one. What's the design?
How does it transform the data?

5. Make create/update pages if you want one. What affordances do they have?
What do they encourage? What are the prompts?

https://www.w3schools.com/php/php_mysql_intro.asp
