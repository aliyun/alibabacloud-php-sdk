<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class ModifyTenantUserRolesRequest extends Model
{
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
    public $modifyType;

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
    public $userRole;

    /**
     * @var string
     */
    public $userType;
    protected $_name = [
        'globalPermissions' => 'GlobalPermissions',
        'instanceId' => 'InstanceId',
        'modifyType' => 'ModifyType',
        'tenantId' => 'TenantId',
        'userName' => 'UserName',
        'userRole' => 'UserRole',
        'userType' => 'UserType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->globalPermissions) {
            $res['GlobalPermissions'] = $this->globalPermissions;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->modifyType) {
            $res['ModifyType'] = $this->modifyType;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->userRole) {
            $res['UserRole'] = $this->userRole;
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
        if (isset($map['GlobalPermissions'])) {
            $model->globalPermissions = $map['GlobalPermissions'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ModifyType'])) {
            $model->modifyType = $map['ModifyType'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['UserRole'])) {
            $model->userRole = $map['UserRole'];
        }

        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
