<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifyTenantUserStatusRequest extends Model
{
    /**
     * @description The operation that you want to perform.
     * Set the value to **ModifyTenantUserStatus**.
     *
     * This parameter is required.
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the tenant.
     *
     * This parameter is required.
     * @example ob2mr3oae0****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The list of database accounts in the tenant.
     *
     * This parameter is required.
     * @example pay_test
     *
     * @var string
     */
    public $userName;

    /**
     * @description The status of the database account. Valid values:
     * This parameter is required.
     * @example The ID of the tenant.
     *
     * @var string
     */
    public $userStatus;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'tenantId'   => 'TenantId',
        'userName'   => 'UserName',
        'userStatus' => 'UserStatus',
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
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userStatus) {
            $res['UserStatus'] = $this->userStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTenantUserStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserStatus'])) {
            $model->userStatus = $map['UserStatus'];
        }

        return $model;
    }
}
