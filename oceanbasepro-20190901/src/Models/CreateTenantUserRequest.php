<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class CreateTenantUserRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $encryptionType;

    /**
     * @var string
     */
    public $globalPermissions;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $roles;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $userPassword;

    /**
     * @var string
     */
    public $userType;
    protected $_name = [
        'description' => 'Description',
        'encryptionType' => 'EncryptionType',
        'globalPermissions' => 'GlobalPermissions',
        'instanceId' => 'InstanceId',
        'roles' => 'Roles',
        'tenantId' => 'TenantId',
        'userName' => 'UserName',
        'userPassword' => 'UserPassword',
        'userType' => 'UserType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->encryptionType) {
            $res['EncryptionType'] = $this->encryptionType;
        }

        if (null !== $this->globalPermissions) {
            $res['GlobalPermissions'] = $this->globalPermissions;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->roles) {
            $res['Roles'] = $this->roles;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->userPassword) {
            $res['UserPassword'] = $this->userPassword;
        }

        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EncryptionType'])) {
            $model->encryptionType = $map['EncryptionType'];
        }

        if (isset($map['GlobalPermissions'])) {
            $model->globalPermissions = $map['GlobalPermissions'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Roles'])) {
            $model->roles = $map['Roles'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['UserPassword'])) {
            $model->userPassword = $map['UserPassword'];
        }

        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
