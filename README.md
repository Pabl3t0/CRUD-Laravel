# Mi Proyecto Laravel

Este es un proyecto desarrollado con Laravel.

---

## 📌 Requisitos Previos

Antes de ejecutar el proyecto, asegúrese de tener instalado:

- PHP >= 8.1
- Composer
- Laravel (versión 10 o superior)
- MySQL o el gestor de base de datos configurado
- Servidor local (XAMPP, Laragon, etc.) o PHP built-in server

Puede verificar las versiones con:

php -v
composer -v

---

## ⚙️ Instalación

Siga estos pasos para ejecutar el proyecto localmente:

### 1️⃣ Clonar el repositorio

git clone https://github.com/Pabl3t0/CRUD-Laravel.git

Entrar en la carpeta:

cd CRUD-Laravel

---

### 2️⃣ Instalar dependencias

composer install

---

### 3️⃣ Crear archivo de entorno

Copiar el archivo .env.example:

cp .env.example .env

---

### 4️⃣ Generar clave de aplicación

php artisan key:generate

---

### 5️⃣ Configurar base de datos

Editar el archivo .env y colocar sus credenciales:

DB_DATABASE=laravel  
DB_USERNAME=root  
DB_PASSWORD=

---

### 6️⃣ Ejecutar migraciones (si aplica)

php artisan migrate

---

### 7️⃣ Ejecutar el servidor

php artisan serve

El proyecto estará disponible en:

http://127.0.0.1:8000

---

## 📂 Estructura del Proyecto

- routes/web.php → Definición de rutas
- app/Http/Controllers → Controladores
- resources/views → Vistas Blade
- database/migrations → Migraciones

---

## 👨‍💻 Autor

Pablo Moreno