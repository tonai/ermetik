# Ermetik

Connect to mysql:
```sh
sudo mysql
```

Then create database and user:
```sql
CREATE DATABASE ermetik;
CREATE USER 'ermetik'@'localhost' IDENTIFIED BY 'kitemre';
GRANT ALL ON ermetik.* TO 'ermetik'@'localhost';
```
