# Regular-expressions
Expressions used for ensuring security in websites form filling by clients

Name : /^[A-Za-z\. ]*$/
Email : /[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{3,}/
Website : /(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/ 


The above expressions are used to ensure security when clients are filling forms that have the names with above fields.
Client cannot give false information.
