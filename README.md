
# Backend de Gestión de Productos - Laravel

Este proyecto es el backend de la aplicación de gestión de productos, desarrollado con Laravel. La API permite gestionar productos (creación, visualización, edición y eliminación) a través de varios endpoints RESTful.

## Requisitos Previos

Antes de empezar, asegúrate de tener instalados los siguientes programas en tu entorno de desarrollo:

- PHP (versión 7.4 o superior)
- Composer
- MySQL
- Node.js (versión 14.x o superior para npm scripts)

## Instalación

Sigue los siguientes pasos para configurar y ejecutar el proyecto:

1. Clona el repositorio:

   ```bash
   git clone https://github.com/Daniel349167/Crud_Productos_Backend.git
   ```

2. Entra en la carpeta del proyecto:

   ```bash
   cd Crud_Productos_Backend
   ```

3. Instala las dependencias del proyecto con Composer:

   ```bash
   composer install
   ```

4. Copia el archivo de configuración `.env.example` y renómbralo como `.env`:

   ```bash
   cp .env.example .env
   ```

5. Genera una nueva clave de aplicación:

   ```bash
   php artisan key:generate
   ```

6. Configura las variables de entorno para la base de datos en el archivo `.env`. Aquí un ejemplo de configuración:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nombre_de_tu_base_de_datos
   DB_USERNAME=tu_usuario
   DB_PASSWORD=tu_contraseña
   ```

7. Ejecuta las migraciones para crear las tablas en la base de datos:

   ```bash
   php artisan migrate
   ```

8. (Opcional) Si deseas poblar la base de datos con algunos datos de ejemplo, ejecuta los seeders:

   ```bash
   php artisan db:seed
   ```

## Ejecución del Servidor de Desarrollo

Para ejecutar el servidor de desarrollo, usa el siguiente comando:

```bash
php artisan serve
```

El backend estará disponible en `http://localhost:8000`.

## Endpoints de la API

Los principales endpoints para gestionar los productos son los siguientes:

- **GET /products**: Listar todos los productos.
- **GET /products/{id}**: Mostrar un producto específico por su ID.
- **POST /products**: Crear un nuevo producto.
- **PUT /products/{id}**: Actualizar un producto existente.
- **DELETE /products/{id}**: Eliminar un producto.

## Pruebas de la API

Puedes utilizar herramientas como Postman o curl para probar los endpoints de la API. Aquí algunos ejemplos:

### Listar todos los productos (GET)

```bash
curl -X GET http://localhost:8000/api/products
```

### Crear un nuevo producto (POST)

```bash
curl -X POST http://localhost:8000/api/products -d 'name=Producto de Ejemplo&description=Descripción del producto&price=100&stock=10'
```

### Actualizar un producto existente (PUT)

```bash
curl -X PUT http://localhost:8000/api/products/1 -d 'name=Producto Actualizado&price=150'
```

### Eliminar un producto (DELETE)

```bash
curl -X DELETE http://localhost:8000/api/products/1
```

