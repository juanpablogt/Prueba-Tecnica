Prueba Técnica: Symfony API + Vue.js <br>
Por: Juan Pablo Gonzalez Trejos

Instrucciones de Instalacion:

--------Symfony-------------

1.clonar el proyecto:
  git clone https://github.com/juanpablogt/Prueba-Tecnica.git
  cd Prueba-Tecnica/api-books

2.Instalar las dependencias de PHP
  composer install

3. Crear la base de datos y ejecuta migraciones
  php bin/console doctrine:database:create
  php bin/console doctrine:migrations:migrate

4. Cargar datos de prueba (fixtures)
   php bin/console doctrine:fixtures:load

5. Arrancar el servidor
    symfony server:start

-----------Frontend Vue--------------

1. Ir a la carpeta del frontend
   cd ../frontend-books
2. Instalar dependencias si es necesario
   Node.js y npm.
3. Configurar la URL de la API
    Por defecto apunta a http://127.0.0.1:8000/api/books desde localhost:8080.
    Si la cambias, asegúrate de editar en el código en el archivo donde Axios.
4. npm run serve

Capturas del sistema funcionando

Respuesta de api/books

![image](https://github.com/user-attachments/assets/4c493fe6-8ebb-4645-a367-18eb04a84ba4)

Api consumiendo el backend

![image](https://github.com/user-attachments/assets/82c0bf58-844c-42b9-91a7-bd9acc9ef55c)

Registros en la base de datos books:

![image](https://github.com/user-attachments/assets/ac1868f8-2110-410a-83cd-5570ee043550)

registros en la base de datos reviws:

![image](https://github.com/user-attachments/assets/e60cf81e-d6be-401b-bbea-f91c416ec784)

Validacion del metodo Post para los reviews:

![image](https://github.com/user-attachments/assets/556d94d7-90c7-44fb-ad09-79f6a555da35)
