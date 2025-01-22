<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class CreateClientUserRequest extends Model
{
    /**
     * @var string
     */
    public $departmentId;
    /**
     * @var string
     */
    public $description;
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
    public $mobileNumber;
    /**
     * @var string
     */
    public $password;
    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'departmentId' => 'DepartmentId',
        'description'  => 'Description',
        'email'        => 'Email',
        'idpConfigId'  => 'IdpConfigId',
        'mobileNumber' => 'MobileNumber',
        'password'     => 'Password',
        'username'     => 'Username',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->idpConfigId) {
            $res['IdpConfigId'] = $this->idpConfigId;
        }

        if (null !== $this->mobileNumber) {
            $res['MobileNumber'] = $this->mobileNumber;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
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
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['IdpConfigId'])) {
            $model->idpConfigId = $map['IdpConfigId'];
        }

        if (isset($map['MobileNumber'])) {
            $model->mobileNumber = $map['MobileNumber'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
