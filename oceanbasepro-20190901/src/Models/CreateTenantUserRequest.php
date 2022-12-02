<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateTenantUserRequest extends Model
{
    /**
     * @var string
     */
    public $description;

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
        'description'  => 'Description',
        'instanceId'   => 'InstanceId',
        'roles'        => 'Roles',
        'tenantId'     => 'TenantId',
        'userName'     => 'UserName',
        'userPassword' => 'UserPassword',
        'userType'     => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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

    /**
     * @param array $map
     *
     * @return CreateTenantUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
