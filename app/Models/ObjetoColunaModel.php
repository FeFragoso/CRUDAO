<?php

namespace App\Models;

use CodeIgniter\Model;

class ObjetoColunaModel extends Model
{
    protected $table      = 'OBJETO_COLUNAS';
    protected $primaryKey = 'OBJETO_COLUNA_PK';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = [
        'OBJETO_FK',
        'OBJETO_COLUNA_NOME',
        'OBJETO_COLUNA_DESCRICAO',
        'OBJETO_COLUNA_TIPAGEM',
        'OBJETO_COLUNA_NULL',
        'OBJETO_COLUNA_CHAVE'
    ];

    // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}