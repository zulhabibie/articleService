## Configure your .env file

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_name
DB_USERNAME=db_username
DB_PASSWORD=db_password

```
    
## Endpoints  
    2. Article
        1 ) Insert -> /api/article/store 
        2 ) Update -> /api/article/{id}/update 
        3 ) Delete -> /api/article/{id}/remove 
        4 ) Show -> /api/article/{id}/show 
        5 ) All -> /api/articles
    

##header format
‘headers’ => [
    ‘Accept’ => ‘application/json’,
    ‘Authorization’ => ‘Bearer ‘.$accessToken,
]

## Thanks
webservice hanya baru endpoint untuk show, akk dan delete saja