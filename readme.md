db
|user_db|user_name|user_id|user_pw|
|---|---|---|---|
||배수아|bsa|1234

## db conn
```php
$conn = mysqli_connect("localhost:3306","아이디","비밀번호","db이름",/*"3306"*/);
```
## db run
```php
$id = $_POST[$id]; //post 방식은 배열형태로 전달해주기 때문에 인덱싱이 가능하다.
$sql = "SELECT * FROM user_db WHERE user_id ='{$id}'";
$result = mysqli_query($conn, $sql);
```
## db getDATA
```php
$row = mysqli_fetch_array($result);
// $hashedPassword = $row['pw'];
$row['id'];
$passwordResult = $row['user_pw'];
```