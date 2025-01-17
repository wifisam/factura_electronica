<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    // aqui llamamos a la tabla
    protected $table = 'categoria';

    // declaramos una variable para la PK
    protected $primaryKey = 'id_categoria';

    // registro de auditoria 
    public $timestamps =true;

    protected $fillable = [
        'categoria',
        'descripcion',
        'estatus'
    ];
// buscar para que sirve 
    protected $guarded = [

    ];


}
