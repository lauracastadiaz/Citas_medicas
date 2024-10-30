# Sistema de Gestión de Citas

url: https://pidecita.eu/

El Sistema de Gestión de Citas Médicas es una aplicación desarrollada con Laravel que permite gestionar la agenda de citas médicas de una manera eficiente. La aplicación está diseñada para que los administradores puedan gestionar médicos, centros de salud, especialidades, horarios de atención y más.

El sistema utiliza una API CRUD para realizar operaciones de creación, eliminación y edición de médicos, garantizando una gestión flexible y adaptativa.


# De qué trata 

La aplicación web es un sistema de gestión de citas diseñado para facilitar la organización de centros que trabajan con citas y reservas, como clínicas, centros de salud, consultorías, entre otros. Aquí te detallo su funcionamiento y características clave:
1. Elección de Suscripción:
Al acceder a la plataforma, el usuario (en este caso, el administrador del centro) selecciona un plan de suscripción que mejor se adapte a las necesidades de su centro, permitiendo flexibilidad en función de la cantidad de profesionales, pacientes y servicios que desean gestionar.
2. Registro y Creación del Centro:
Una vez suscrito, el usuario se registra y configura su centro en la plataforma. Esto incluye personalizar el perfil del centro con información relevante, como la ubicación, horarios de atención, servicios ofrecidos, y políticas de cita.
3. Gestión de Profesionales:
El usuario puede añadir a su equipo de profesionales (doctores, asesores, terapeutas, etc.), cada uno con su propio perfil que incluye su especialidad, disponibilidad y horarios. Esto permite asignar citas de forma organizada y verificada.
4. Administración de Pacientes:
La plataforma permite registrar y gestionar a los pacientes del centro, manteniendo un historial de sus citas, datos personales, y preferencias. Esto facilita el seguimiento de cada paciente y permite brindar una atención más personalizada y eficiente.
5. Programación y Gestión de Citas:
La herramienta ofrece un calendario donde se pueden agendar, modificar y cancelar citas de manera ágil y organizada. Los usuarios tienen la posibilidad de ver las citas programadas, asignarlas a un profesional específico y recibir notificaciones o recordatorios para minimizar ausencias o cancelaciones de último minuto.
Esta plataforma no solo optimiza el flujo de trabajo dentro del centro, sino que también mejora la experiencia del usuario final, creando una interfaz sencilla y eficiente para la administración de citas y la comunicación entre pacientes y profesionales.

## Funcionalidades 🚀

_Autenticación de Administrador: Los usuarios pueden iniciar sesión como administradores para acceder a la aplicación y pueden:_.
1. Gestión de Médicos: Permite crear, editar y eliminar médicos.
2. Gestión de Centros: Administrar centros de salud, incluyendo la configuración de horarios.
3. Gestión de Especialidades: Añadir y modificar especialidades médicas.
4. Horarios de Atención: Configurar horarios para centros y profesionales médicos.

## Uso 
### Iniciar Sesión 

1. Navegue a http://localhost:8000/login.
2. Ingrese las credenciales de administrador para iniciar sesión.

### Gestión API
- Crear: Envíe una solicitud POST a api/x con los datos.
- Editar: Envíe una solicitud PUT a api/x/{id} con los datos actualizados.
- Eliminar: Envíe una solicitud DELETE a api/x/{id}.

Igual con el resto de secciones. Estas funcionalidades están disponibles a través de la interfaz de administración de la aplicación, accesible después de iniciar sesión.

## Endpoints de la API

#### Médicos
- GET /api/medicos: Lista todos los médicos.
- POST /api/medicos: Crea un nuevo médico.
- GET /api/medicos/{id}: Muestra la información de un médico específico.
- PUT /api/medicos/{id}: Actualiza la información de un médico específico.
- DELETE /api/medicos/{id}: Elimina un médico específico.
#### Centros
- GET /api/centros: Lista todos los centros.
- POST /api/centros: Crea un nuevo centro.
- GET /api/centros/{id}: Muestra la información de un centro específico.
- PUT /api/centros/{id}: Actualiza la información de un centro específico.
- DELETE /api/centros/{id}: Elimina un centro específico.
#### Especialidades
- GET /api/especialidades: Lista todas las especialidades.
- POST /api/especialidades: Crea una nueva especialidad.
- GET /api/especialidades/{id}: Muestra la información de una especialidad específica.
- PUT /api/especialidades/{id}: Actualiza la información de una especialidad específica.
- DELETE /api/especialidades/{id}: Elimina una especialidad específica.

## Construido con 🛠️

* [Laravel](https://laravel.com/docs/8.x/releases) - El framework web usado
* [Maven](https://mariadb.org/) - Manejador de dependencias
* [MariaDB]() - Gestión de base de datos

## Requisitos del sistema 
- PHP >= 8.3
- Composer
- MySQL
- Laravel >= 8.4

## Autores ✒️


* **Laura Castaño** - *Trabajo Inicial* - [Laura Castaño](https://github.com/lauracastadiaz)


## Licencia 📄

Este proyecto está bajo la Licencia (Tu Licencia) - mira el archivo [LICENSE.md](LICENSE.md) para detalles

## Contribuciones

Si deseas contribuir a este proyecto, por favor sigue los siguientes pasos:

1. Haz un fork del proyecto.
2. Crea una nueva rama (git checkout -b feature/nueva-funcionalidad).
3. Realiza los cambios necesarios y realiza un commit (git commit -am 'Añadir nueva funcionalidad').
4. Envía los cambios a tu rama (git push origin feature/nueva-funcionalidad).
5. Crea un Pull Request.

## Expresiones de Gratitud 🎁

* Espero que os guste, si tienes alguna pregunta, no dudes en preguntarme 📢
* Y por último, muchas gracias a mis tutores de prácticas, que sin ellos esto no hubiera sido posible, ya que es mi primera aplicación oficial realizada exclusivamente por mí 🤓



---
⌨️ con ❤️ por [Laura](https://github.com/lauracastadiaz) 😊


























<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
