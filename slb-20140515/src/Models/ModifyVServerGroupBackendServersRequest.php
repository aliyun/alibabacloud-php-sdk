<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class ModifyVServerGroupBackendServersRequest extends Model
{
    /**
     * @description The list of new backend servers that you want to use to replace those in the vServer group. You can specify at most 20 backend servers for a vServer group in each call.
     *
     *   **ServerId**: required. The ID of the ECS instance or ENI that serves as a backend server. This parameter must be of the STRING type.
     *
     *   **Port**: required. The port that is used by the backend server. This parameter must be of the INTEGER type. Valid values: **1 to 65535**.
     *
     *   **Weight**: required. The weight of the backend server. This parameter must be of the INTEGER type. Valid values: **0 to 100**.
     *
     *   **Description**: optional. The description of the backend server. This parameter must be of the STRING type. The description can contain letters, digits, hyphens (-), forward slashes (/), periods (.),and underscores (\_).
     *
     *   **Type**: the type of backend server. This parameter must be of the STRING type. Valid values:
     *
     *   **ecs**: an ECS instance. This is the default value.
     *   **eni**: an ENI.
     *
     *   **ServerIp**: the IP address of the ECS instance or ENI.
     *
     * Examples:
     *
     *   An ECS instance: `[{ "ServerId": "i-xxxxxxxxx", "Weight": "100", "Type": "ecs", "Port":"80","Description":"test-112" }]`
     *   An ENI: `[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-112" }]`
     *   An ENI with multiple IP addresses: `[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-112" },{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "172.166.**.**", "Port":"80","Description":"test-113" }]`
     *
     * @example [{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-112" },{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "172.166.**.**", "Port":"80","Description":"test-113" }]
     *
     * @var string
     */
    public $newBackendServers;

    /**
     * @description The list of backend servers that you want to replace in the vServer group. You can specify at most 20 backend servers for a vServer group in each call.
     *
     *   **ServerId**: required. The ID of the Elastic Compute Service (ECS) instance or elastic network interface (ENI) that serves as a backend server. This parameter must be of the STRING type.
     *
     *   **Port**: required. The port that is used by the backend server. This parameter must be of the INTEGER type. Valid values: **1 to 65535**.
     *
     *   **Weight**: required. The weight of the backend server. This parameter must be of the INTEGER type. Valid values: **0 to 100**.
     *
     *   **Description**: optional. The description of the backend server. This parameter must be of the STRING type. The description must be 1 to 80 characters in length, and can contain letters, digits, hyphens (-), forward slashes (/), periods (.),and underscores (\_).
     *
     *   **Type**: the type of backend server. This parameter must be of the STRING type. Valid values:
     *
     *   **ecs**: an ECS instance. This is the default value.
     *   **eni**: an ENI.
     *
     *   **ServerIp**: the IP address of the ECS instance or ENI.
     *
     * Examples:
     *
     *   An ECS instance: `[{ "ServerId": "i-xxxxxxxxx", "Weight": "100", "Type": "ecs", "Port":"80","Description":"test-112" }]`
     *   An ENI: `[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-112" }]`
     *   An ENI with multiple IP addresses: `[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-112" },{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "172.166.**.**", "Port":"80","Description":"test-113" }]`
     *
     * @example [{ "ServerId": "i-xxxxxxxxx", "Weight": "100", "Type": "ecs",  "Port":"80","Description":"test-112" }]
     *
     * @var string
     */
    public $oldBackendServers;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region where the Classic Load Balancer (CLB) instance is deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the vServer group.
     *
     * @example rsp-cige6j****
     *
     * @var string
     */
    public $VServerGroupId;
    protected $_name = [
        'newBackendServers'    => 'NewBackendServers',
        'oldBackendServers'    => 'OldBackendServers',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'VServerGroupId'       => 'VServerGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newBackendServers) {
            $res['NewBackendServers'] = $this->newBackendServers;
        }
        if (null !== $this->oldBackendServers) {
            $res['OldBackendServers'] = $this->oldBackendServers;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVServerGroupBackendServersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewBackendServers'])) {
            $model->newBackendServers = $map['NewBackendServers'];
        }
        if (isset($map['OldBackendServers'])) {
            $model->oldBackendServers = $map['OldBackendServers'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }

        return $model;
    }
}
