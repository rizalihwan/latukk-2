<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use Uuid;
    protected $primaryKey = "id";
    protected $keyType = 'string';
    public $incrementing = false;
    public $guarded = [];

    public function getGenderDefinitionAttribute()
    {
        return $this->jk == 0 ? 'Laki - laki' : 'Perempuan';
    }
}
