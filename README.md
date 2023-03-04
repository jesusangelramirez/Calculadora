# Calculadora en Symfony
Este es un proyecto en Symfony que implementa una calculadora básica con las operaciones de suma, resta, multiplicación, división, raíz cuadrada y porcentaje.

## Requisitos
Para poder ejecutar este proyecto necesitas tener instalado lo siguiente:

* PHP 7.2.5 o superior
* Composer
* Symfony CLI
 ## Instalación
1. Clona este repositorio en tu máquina local:
```bash

git clone https://github.com/tu-usuario/calculadora-symfony.git
```
2. Instala las dependencias del proyecto con Composer:
```bash
cd calculadora-symfony
composer install
```
3. Arranca el servidor web de Symfony:
```bash
symfony server:start
```
4. Accede a la calculadora en tu navegador web:
```bash
http://localhost:8000/
```
## Uso
La calculadora tiene una interfaz web simple donde puedes seleccionar la operación que deseas realizar y proporcionar los operandos necesarios. También puedes acceder directamente a las operaciones a través de las siguientes rutas URL:

* Suma: /suma/{operatorA}/{operatorB}
* Resta: /resta/{operatorA}/{operatorB}
* Multiplicación: /multiplicacion/{operatorA}/{operatorB}
* División: /division/{operatorA}/{operatorB}
* Raíz enesima: /raiz/{operatorA}/{operatorB}
* Porcentaje: /percentaje/{operatorA}/{operatorB}
* Potencia: /potencia/{operatorA}/{operatorB}
## Licencia
Este proyecto está licenciado bajo la Licencia MIT. Puedes leer el archivo LICENSE para más detalles.
