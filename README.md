##  1.- Clonar este repositorio
	git clone https://github.com/carlos-asm/pruebablog.git
## 2.- Ingresar a la carpeta del proyecto
	cd pruebablog
## 3.- Instalar composer
	composer install
## 4.- Instalar npm
	npm install 
## 5.- Copiar el archivo .env 
	cp .env.example .env
## 6.- Generar el key
	php artisan key:generate
## 7.- Habilitar las siguientes opciones en el .env
	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=blog
	DB_USERNAME=root
	DB_PASSWORD=
## 8.- Copiar las credenciales en el .env
	APP_ENDPOINT_NEW=https://newsapi.org/v2/everything?q=keyword&apiKey=
	API_KEY=05e8a3e2aee1440199991a6c854b281c
	APP_ENDPOINT_USERS_RANDOM=https://randomuser.me/api/?results=100
## 9.- Correr las migraciones
	php artisan migrate
## 10.- Correr el siguiente comando
	npm run dev
## 11.- Visitar la siguiente pagina
	http://localhost/pruebablog/public/