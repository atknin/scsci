import pymysql.cursors
import pymysql

# Connect to the database
connection = pymysql.connect(host='localhost',user='scsciru1_school',password='Myagkov_2',db='scsciru1_school',charset='utf8mb4',cursorclass=pymysql.cursors.DictCursor)
sql="SELECT 'photo' FROM 'comand' WHERE 'contact'=%s"
cursor.execute(sql, ('marshallstudio82@gmail.com',))
connection.cursor("SELECT 'photo' FROM 'comand'" )
try:
    with connection.cursor() as cursor:
        # Create a new record
        sql = "INSERT INTO comand (photo, name, task, nametask, contact)" .
        "VALUES ('{$uploadfile}','{$name}','{$task}','{$nametask}','{$contact}');";
        cursor.execute(sql, ('webmaster@python.org', 'very-secret'))

    # connection is not autocommit by default. So you must commit to save
    # your changes.
    connection.commit()

    with connection.cursor() as cursor:
        # Read a single record
        sql = "SELECT `id`, `password` FROM `users` WHERE `email`=%s"
        cursor.execute(sql, ('webmaster@python.org',))
        result = cursor.fetchone()
        print(result)
finally:
    connection.close()
