<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifyTenantUserRolesRequest extends Model
{
    /**
     * @description The ID of the OceanBase cluster.
     *
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the privilege modification operation.
     * delete: deletes a privilege.
     * @example update
     *
     * @var string
     */
    public $modifyType;

    /**
     * @description The ID of the tenant.
     *
     * @example ob2mr3oae0****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The name of the database account.
     * You cannot use reserved keywords, such as SYS and root.
     * @example pay_test
     *
     * @var string
     */
    public $userName;

    /**
     * @description The role of the database account.
     *
     * @example [{"Database":"20210824160559","Role":"readwrite"}]
     *
     * @var string
     */
    public $userRole;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'modifyType' => 'ModifyType',
        'tenantId'   => 'TenantId',
        'userName'   => 'UserName',
        'userRole'   => 'UserRole',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

        return $model;
    }
}
