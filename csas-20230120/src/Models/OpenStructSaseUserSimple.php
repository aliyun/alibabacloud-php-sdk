<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\OpenStructSaseUserSimple\departments;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->departments) {
            $res['Departments'] = [];
            if (null !== $this->departments && \is_array($this->departments)) {
                $n = 0;
                foreach ($this->departments as $item) {
                    $res['Departments'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return OpenStructSaseUserSimple
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Departments'])) {
            if (!empty($map['Departments'])) {
                $model->departments = [];
                $n = 0;
                foreach ($map['Departments'] as $item) {
                    $model->departments[$n++] = null !== $item ? departments::fromMap($item) : $item;
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
