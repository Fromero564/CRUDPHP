<?php

app()->get('/', 'ContactosController@index');

app()->get('/contactos/editar/{id}', 'ContactosController@editar');

app()->get('/contactos/crear', 'ContactosController@crear');

app()->post('/contactos', 'ContactosController@agregar');

app()->get('/contactos/{id}', 'ContactosController@borrar');

app()->post('/contactos/{id}', 'ContactosController@actualizar');


app()->get('/home', 'TestsController@index');

app()->get('/test', 'TestsController@test');
