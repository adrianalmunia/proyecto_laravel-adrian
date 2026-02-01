<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# 🎓 Sistema de Gestión de Alumnos - Laravel

Este es un proyecto académico desarrollado en **Laravel 11** para la gestión integral de alumnos. El sistema incluye autenticación de usuarios, operaciones CRUD, paginación, carga de datos de prueba y soporte multiidioma.

## 🚀 Requisitos Cubiertos (Basado en el PDF)

- **CRUD Completo:** Gestión de alumnos con operaciones de Crear, Leer, Actualizar y Eliminar.
- **Autenticación:** Sistema de acceso seguro implementado con Laravel Breeze.
- **Internacionalización (i18n):** Traducción dinámica de toda la interfaz y mensajes de validación a **Español, Inglés y Francés**.
- **Validación Avanzada:** Feedback visual de errores en los formularios y persistencia de datos mediante la función `old()`.
- **UX/UI:** Mensajes de confirmación y alertas integradas para mejorar la experiencia de usuario.
- **Base de Datos:** Estructura mediante migraciones y carga de datos masiva con Seeders y Factories.
- **Paginación:** Configurada para mostrar 5 registros por página, facilitando la navegación.

## 🛠️ Instalación y Configuración

Sigue estos pasos para poner en marcha el proyecto en tu entorno local:

1. **Clonar el repositorio:**
   ```bash
   git clone <https://github.com/adrianalmunia/proyecto_laravel-adrian.git>
   cd <proyecto_laravel-adrian>
   ```
2. **Instalar dependencias:**


  ```bash
    composer install
    npm install && npm run build
  ```
3. **Configurar el entorno:**

Duplicar el archivo de ejemplo: 
``` cp .env.example .env ```

Generar la clave única de la aplicación:
```php artisan key:generate ``` 

Configurar los parámetros de tu base de datos local en el archivo .env.

Ejecutar Migraciones y Seeders: Este comando preparará las tablas y cargará 21 registros de alumnos (1 manual y 20 aleatorios) más un usuario administrador.


``` php artisan migrate:fresh --seed ```

Iniciar el servidor:
``` php artisan serve ```

 ## 🔐 Acceso al Sistema
Para acceder rápidamente al panel de gestión, utiliza las credenciales por defecto generadas por el Seeder:

Email: admin@admin.com

Password: password 

 ## 📂 Estructura de Idiomas
El sistema detecta el idioma seleccionado y consulta los siguientes diccionarios:

lang/es/: Castellano

lang/en/: Inglés

lang/fr/: Francés

Desarrollado por: Adrián Almunia

Fecha de finalización: 1 de febrero de 2026
