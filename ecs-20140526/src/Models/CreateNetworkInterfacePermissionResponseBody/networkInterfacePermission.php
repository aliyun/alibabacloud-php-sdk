<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfacePermissionResponseBody;

use AlibabaCloud\Tea\Model;

class networkInterfacePermission extends Model
{
    /**
     * @var string
     */
    public $permission;

    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $networkInterfacePermissionId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $permissionState;
    protected $_name = [
        'permission'                   => 'Permission',
        'networkInterfaceId'           => 'NetworkInterfaceId',
        'accountId'                    => 'AccountId',
        'networkInterfacePermissionId' => 'NetworkInterfacePermissionId',
        'serviceName'                  => 'ServiceName',
        'permissionState'              => 'PermissionState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->permission) {
            $res['Permission'] = $this->permission;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->networkInterfacePermissionId) {
            $res['NetworkInterfacePermissionId'] = $this->networkInterfacePermissionId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->permissionState) {
            $res['PermissionState'] = $this->permissionState;
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
        if (isset($map['Permission'])) {
            $model->permission = $map['Permission'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['NetworkInterfacePermissionId'])) {
            $model->networkInterfacePermissionId = $map['NetworkInterfacePermissionId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['PermissionState'])) {
            $model->permissionState = $map['PermissionState'];
        }

        return $model;
    }
}
