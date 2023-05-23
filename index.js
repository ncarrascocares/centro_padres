$(document).ready(function() {
    let funcion = '';
    $('logeo').submit(e => {
        funcion = 'logeo';
        let $correo;
    })

    /**Esta funcion debere realizar lo siguinte: 
     * 1. Al recibir el correo desde el login, validar que el correo exista en la bd.
     * si en existe: validar que sea un correo valido y realizar la solciitud de nuevo usurio y cargo. Pero esto debe hacerlo un usuario con permisos.
     * Si el usuario que esta ingresando el nuevo correo es un usuario sin permisos, el sistema enviara un mensaje indicando que el ingreso del nuevo user
     * debe hacerlo una cuenta con permisos.
     * Si el usuario que esta ingresando es una usuario con permisos para ingresar nuevas cuentas, el sistema validara que el correo sea valido y mostrara un firmulario
     * para crear un nuevo usuario.
     * 
     */
})