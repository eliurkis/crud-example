<?php

namespace App\Http\Controllers;

use App\Entities\Doctor;
use Eliurkis\Crud\CrudController;

class DoctorController extends CrudController
{
    protected $route = 'doctors';
    protected $fields = [
        'first_name' => [
            'type'  => 'text',
            'label' => 'First Name',
        ],
        'last_name'  => [
            'type'  => 'text',
            'label' => 'Last Name',
        ],
        'gender'     => [
            'type'   => 'select',
            'label'  => 'Gender',
            'config' => [
                'options' => [
                    1 => 'Male',
                    2 => 'Female',
                ],
            ],
        ],
    ];
    protected $columns = [
        'first_name',
        'last_name',
        'gender',
    ];

    public function __construct(Doctor $entity)
    {
        parent::__construct($entity);
    }
}
