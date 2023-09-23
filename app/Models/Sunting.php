<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sunting extends Model
{
    use HasFactory;
    protected $fillable = ['posisi', 'nama_agency', 'lokasi', 'kriteria', 'jobdesk', 'benefit', 'link_form', 'kuota', 'telepon', 'email', 'instagram'];
}
