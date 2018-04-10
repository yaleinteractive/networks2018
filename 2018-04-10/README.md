# Enable PHP error reporting in MAMP

1. In MAMP click `Open WebStart page`
2. At the top of that page, click `phpinfo`
3. On the php info, find where it says `Loaded Configuration File`
4. Edit that `php.ini` file in your text editor. Only editing lines that don't begin with `;` (the semicolon lines are just comment examples), edit as follows:
5. Change `error_reporting` to `E_ALL`
6. Change `display_errors` to `On`
7. In MAMP, stop and start the servers

# CRUD

Create a record
Read record(s) - index page, single record page
Update a record
Destroy a record

Our database system:

MySQL
Other popular ones: Postgresql, Sqlite
These all use a query language called SQL
And they are all relational database

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
