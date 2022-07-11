<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfacePermissionResponseBody;

use AlibabaCloud\Tea\Model;

class networkInterfacePermission extends Model
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var string
     */
    public $networkInterfacePermissionId;

    /**
     * @var string
     */
    public $permission;

    /**
     * @var string
     */
    public $permissionState;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'accountId'                    => 'AccountId',
        'networkInterfaceId'           => 'NetworkInterfaceId',
        'networkInterfacePermissionId' => 'NetworkInterfacePermissionId',
        'permission'                   => 'Permission',
        'permissionState'              => 'PermissionState',
        'serviceName'                  => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->networkInterfacePermissionId) {
            $res['NetworkInterfacePermissionId'] = $this->networkInterfacePermissionId;
        }
        if (null !== $this->permission) {
            $res['Permission'] = $this->permission;
        }
        if (null !== $this->permissionState) {
            $res['PermissionState'] = $this->permissionState;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInterfacePermission
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['NetworkInterfacePermissionId'])) {
            $model->networkInterfacePermissionId = $map['NetworkInterfacePermissionId'];
        }
        if (isset($map['Permission'])) {
            $model->permission = $map['Permission'];
        }
        if (isset($map['PermissionState'])) {
            $model->permissionState = $map['PermissionState'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
