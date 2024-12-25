<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class RemoveBackendServersRequest extends Model
{
    /**
     * @description The backend servers that you want to remove.
     *
     *   **ServerId**: The IDs of the backend servers. Set the value to a string. This parameter is required.
     *
     *   **Type**: the type of the backend server. Valid values:
     *
     *   **ecs** (default): Elastic Compute Service (ECS) instance
     *   **eni**: elastic network interface (ENI)
     *   **eci**: elastic container instance
     *
     *   **Weight**: the weight of the backend server. Valid values: **0** to **100**. Set the value to an integer.
     *
     * You can specify at most 20 backend servers in each call. Examples:
     *
     *   Remove ECS instances:
     *
     * `[{"ServerId":"i-bp1fq61enf4loa5i****", "Type": "ecs","Weight":"100"}]`
     *
     *   Remove ENIs:
     *
     * `[{"ServerId":"eni-2ze1sdp5****","Type": "eni","Weight":"100"}]`
     *
     *   Remove elastic container instances:
     *
     * `[{"ServerId":"eci-2ze1sdp5****","Type": "eci","Weight":"100"}]`
     *
     * This parameter is required.
     * @example [{"ServerId":"i-bp1fq61enf4loa5i****", "Type": "ecs","Weight":"100"}]
     *
     * @var string
     */
    public $backendServers;

    /**
     * @description The ID of the CLB instance.
     *
     * This parameter is required.
     * @example lb-bp15lbk8uja8rvm4a****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region where the CLB instance is deployed.
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
    protected $_name = [
        'backendServers'       => 'BackendServers',
        'loadBalancerId'       => 'LoadBalancerId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendServers) {
            $res['BackendServers'] = $this->backendServers;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveBackendServersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendServers'])) {
            $model->backendServers = $map['BackendServers'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
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

        return $model;
    }
}
