# php 변수앞 $ 사용하는거와 if문 for문만 알고있는채로 맨땅에 해딩식 코딩하기

## 사용 
m1 , docker ,php, mysql

<details>
<summary>tMI</summary>

```bash
docker run --platform linux/amd64 -p 3306:3306 --name [컨테이너 이름] -e MYSQL_ROOT_PASSWORD=[루트 유저 비밀번호] -e MYSQL_DATABASE=[데이터베이스 이름] -e MYSQL_PASSWORD=[비밀번호] -d mysql

docker exec -it mysql bash

mysql -u root -p
# 이후 password 입력
```
dbeaver 에서 allowPublicKey = true 로 해줘야함.
</details>

## db
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
## 첫째날 
1. 회원가입 (아이디 중복검사) : 
  > $result = mysqli_query 를 사용하여 num_rows 값을 얻어왔다.  
  > $res_cnt = $result["num_rows"] 를 사용하여 같은값이 있는지 if문으로 단순히 확인하고 중복처리를하였다.
2. 로그인(단순구현) :
   1.  로그인을 한상태인지 확인은 안되는상태.
   2. 세션 ? 이 필요하다고 생각됨
> 내일 할것 세션으로 로그인유지하는걸 해보도록해보고 

## 둘째날 
1. 로그인(쿠키세션)
   1. 쿠키세션을 이용한 로그인 유지기능 
2. 로그아웃 세션 destroy를 사용한 세션날리기.

```php
implode(사이의값,배열) 배열을 하나의 문자열로 만드는 함수
settype(변수명, "자료형") 자료형 영구변환

mysqli_real_escape_string($conn, $_POST['id']) 스트링을 이스케이프한 형태로 바꾼다
```