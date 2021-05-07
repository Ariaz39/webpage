<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nombre
 * @property string $created_at
 * @property string $updated_at
 * @property Usuario[] $usuarios
 */
class Tipodoc extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tipodoc';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nombre', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarios()
    {
        return $this->hasMany('App\Usuario');
    }
}
