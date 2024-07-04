# Vulnerable Web Application to LFI

This is a vulnerable web application to Local File Inclusion (LFI) attacks. 

It is made to explain how LFI attacks work and is used in the following YouTube video: 

## Disclaimer

This is a vulnerable web application. Do not use it in a production environment.

## Install and run

This application is written in PHP and is really simple to install. You just need to clone the repository and start a PHP server.

For demonstration, you can use the built-in PHP server.

First, clone the repository:

```bash
git clone 
cd VulnerableLFI
```

Then, start the PHP server:

```bash
php -S localhost:8000 -t public
```

Now, you can access the application at [http://localhost:8000](http://localhost:8000).

## How to use

This application uses a weak file inclusion mechanism to access different pages with the GET `page` parameter. 

Example: http://localhost:8000/?page=contact.php

The `page` parameter is vulnerable to LFI attacks. You can try to access the `/etc/passwd` file with the following URL:

http://localhost:8000/?page=../../../../../../../etc/passwd

## License

MIT License

Copyright (c) 2024 Secureaks

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
