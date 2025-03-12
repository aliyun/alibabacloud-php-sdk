<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifyTenantUserRolesRequest extends Model
{
    /**
     * @var string
     */
    public $globalPermissions;

    /**
     * @description The type of the privilege modification operation.
     * This parameter is required.
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the table.
     *
     * @example update
     *
     * @var string
     */
    public $modifyType;

    /**
     * @description The operation that you want to perform.
     * Set the value to **ModifyTenantUserRoles**.
     *
     * This parameter is required.
     * @example ob2mr3oae0****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The role of the database account.
     *
     * This parameter is required.
     * @example pay_test
     *
     * @var string
     */
    public $userName;

    /**
     * @description The type of the account. Valid values:
     * This parameter is required.
     * @example [{"Database":"20210824160559","Role":"readwrite"}]
     *
     * @var string
     */
    public $userRole;

    /**
     * @example Normal
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'globalPermissions' => 'GlobalPermissions',
        'instanceId'        => 'InstanceId',
        'modifyType'        => 'ModifyType',
        'tenantId'          => 'TenantId',
        'userName'          => 'UserName',
        'userRole'          => 'UserRole',
        'userType'          => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ModifyTenantUserRolesRequest
     */
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
