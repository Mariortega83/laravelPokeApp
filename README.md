# Pokémon Laravel Management System

Este proyecto es una aplicación Laravel para gestionar una base de datos de Pokémon. La aplicación permite a los usuarios realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) en los registros de Pokémon.

## Funcionalidades

### Listar Pokémon

La aplicación muestra una lista de todos los Pokémon almacenados en la base de datos. Cada registro de Pokémon incluye los siguientes atributos:
- **ID**: Identificador único del Pokémon.
- **Nombre**: Nombre del Pokémon.
- **Tipo**: Tipo del Pokémon (por ejemplo, Agua, Fuego, Planta, etc.).
- **Ataque**: Valor de ataque del Pokémon.
- **Defensa**: Valor de defensa del Pokémon.

### Crear Pokémon

Los usuarios pueden añadir nuevos Pokémon a la base de datos proporcionando la siguiente información:
- **Nombre**: Nombre del Pokémon (requerido, único, entre 2 y 100 caracteres).
- **Tipo**: Tipo del Pokémon (requerido, entre 2 y 50 caracteres).
- **Ataque**: Valor de ataque del Pokémon (requerido, entero entre 0 y 999).
- **Defensa**: Valor de defensa del Pokémon (requerido, entero entre 0 y 999).

### Editar Pokémon

Los usuarios pueden editar la información de un Pokémon existente. Los campos editables son:
- **Nombre**
- **Tipo**
- **Ataque**
- **Defensa**

### Ver Detalles de un Pokémon

Los usuarios pueden ver los detalles de un Pokémon específico, incluyendo todos sus atributos.

### Eliminar Pokémon

Los usuarios pueden eliminar un Pokémon de la base de datos. Se muestra una confirmación antes de proceder con la eliminación.

## Instalación

1. Clona el repositorio.
2. Instala las dependencias con Composer:
    ```sh
    composer install
    ```
3. Configura tu archivo `.env` con los detalles de tu base de datos.
4. Ejecuta las migraciones para crear las tablas necesarias:
    ```sh
    php artisan migrate
    ```
5. Inicia el servidor de desarrollo:
    ```sh
    php artisan serve
    ```

## Imagenes

Esta es la interfaz de los Pokemons

![Interfaz Pokemon](/img/pokemonLaravel1.png)

<hr></hr>

Aqui se visualizan los Pokemons

![Vista Pokemon](/img/vistaPokemonLaravel.png)

<hr></hr>

Aqui se crean los Pokemons

![Crear Pokemon](/img/crearPokemonLaravel.png)

<hr></hr>

Aqui edito los Pokemons

![Editar Pokemon](/img/editarPokemonLaravel.png)

<hr></hr>

Aqui elimino los Pokemons

![Eliminar Pokemon](/img/eliminoPokemonLaravel.png)

## Uso

Navega a `http://localhost:8000/pokemon` para ver la lista de Pokémon y acceder a las funcionalidades de gestión.

## Licencia

Este proyecto está licenciado bajo la Licencia MIT. Consulta el archivo `LICENSE` para más detalles.