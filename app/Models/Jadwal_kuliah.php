<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EnrollMataKuliah;

class Jadwal_kuliah extends Model
{
    use HasFactory;
    protected $table = 'jadwal_kuliah';
    protected $fillable = [
        'jam_mulai',
        'jam_selesai',
        'hari',
        'enroll_matkul_id'
    ];

    public function matkul(){
        return $this->hasMany(EnrollMataKuliah::class, 'enroll_matkul_id');
    }
}
