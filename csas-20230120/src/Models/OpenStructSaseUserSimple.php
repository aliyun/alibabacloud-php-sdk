<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\OpenStructSaseUserSimple\departments;

class OpenStructSaseUserSimple extends Model
{
    /**
     * @var departments[]
     */
    public $departments;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $idpConfigId;

    /**
     * @var string
     */
    public $saseUserId;

    /**
     * @var string
     */
    public $telephone;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'departments' => 'Departments',
        'email' => 'Email',
        'idpConfigId' => 'IdpConfigId',
        'saseUserId' => 'SaseUserId',
        'telephone' => 'Telephone',
        'username' => 'Username',
    ];

    public function validate()
    {
        if (\is_array($this->departments)) {
            Model::validateArray($this->departments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->departments) {
            if (\is_array($this->departments)) {
                $res['Departments'] = [];
                $n1 = 0;
                foreach ($this->departments as $item1) {
                    $res['Departments'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->idpConfigId) {
            $res['IdpConfigId'] = $this->idpConfigId;
        }

        if (null !== $this->saseUserId) {
            $res['SaseUserId'] = $this->saseUserId;
        }

        if (null !== $this->telephone) {
            $res['Telephone'] = $this->telephone;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Departments'])) {
            if (!empty($map['Departments'])) {
                $model->departments = [];
                $n1 = 0;
                foreach ($map['Departments'] as $item1) {
                    $model->departments[$n1++] = departments::fromMap($item1);
                }
            }
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['IdpConfigId'])) {
            $model->idpConfigId = $map['IdpConfigId'];
        }

        if (isset($map['SaseUserId'])) {
            $model->saseUserId = $map['SaseUserId'];
        }

        if (isset($map['Telephone'])) {
            $model->telephone = $map['Telephone'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
