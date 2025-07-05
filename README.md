Prueba Técnica: Symfony API + Vue.js <br>
Por: Juan Pablo Gonzalez Trejos

<br>
Instrucciones de Instalacion:
<br>
<br>
--------Symfony-------------
<br>
1.clonar el proyecto:<br>
git clone https://github.com/juanpablogt/Prueba-Tecnica.git<br>
cd Prueba-Tecnica/api-books<br>
<br>
2.Instalar las dependencias de PHP<br>
composer install<br>
<br>
3.Crear la base de datos y ejecuta migraciones<br>
php bin/console doctrine:database:create<br>
php bin/console doctrine:migrations:migrate<br>
<br>
4.Cargar datos de prueba (fixtures)<br>
php bin/console doctrine:fixtures:load<br>
<br>
5.Arrancar el servidor<br>
symfony server:start<br>
<br>
<br>
-----------Frontend Vue--------------
<br>
1. Ir a la carpeta del frontend<br>
   cd ../frontend-books<br>
2. Instalar dependencias si es necesario<br>
   Node.js y npm.<br>
3. Configurar la URL de la API<br>
    Por defecto apunta a http://127.0.0.1:8000/api/books desde localhost:8080.<br>
    Si la cambias, asegúrate de editar en el código en el archivo donde Axios.<br>
4. npm run serve<br>
<br>
<br>
-------------Capturas del sistema funcionando---------------<br>
<br>
Respuesta de api/books<br>
<br>

![image](https://github.com/user-attachments/assets/4c493fe6-8ebb-4645-a367-18eb04a84ba4)<br>
<br>

Api consumiendo el backend<br>
<br>

![image](https://github.com/user-attachments/assets/82c0bf58-844c-42b9-91a7-bd9acc9ef55c)<br>
<br>

Registros en la base de datos books:<br>
<br>

![image](https://github.com/user-attachments/assets/ac1868f8-2110-410a-83cd-5570ee043550)<br>
<br>

registros en la base de datos reviews:<br>
<br>

![image](https://github.com/user-attachments/assets/e60cf81e-d6be-401b-bbea-f91c416ec784)<br>
<br>

Validacion del metodo Post para los reviews:<br>
<br>

![image](https://github.com/user-attachments/assets/556d94d7-90c7-44fb-ad09-79f6a555da35)
