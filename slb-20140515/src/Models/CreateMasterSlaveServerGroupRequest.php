<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\CreateMasterSlaveServerGroupRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateMasterSlaveServerGroupRequest extends Model
{
    /**
     * @description The ID of the Classic Load Balancer (CLB) instance.
     *
     * @example lb-bp1hv944r69al4j******
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The list of backend servers in the primary/secondary server group.
     *
     * The value of this parameter must be a STRING list in the JSON format. You can specify up to 20 elements in each request.
     *
     *   **ServerId**: This parameter is required. Specify the ID of the backend server. This parameter must be of the STRING type.
     *
     *   **Port**: This parameter is required. Specify the port that is used by the backend server. This parameter must be of the INTEGER type. Valid values: **1** to **65535**.
     *
     *   **Weight**: This parameter is required. Specify the weight of the backend server. This parameter must be of the INTEGER type. Valid values: **0** to **100**.
     *
     *   **Description**: This parameter is optional. Specify the description of the backend server. This parameter must be of the STRING type. The description must be 1 to 80 characters in length, and can contain letters, digits, hyphens (-), forward slashes (/), periods (.),and underscores (\_).
     *
     *   **ServerType**: Specify the type of the backend server. This parameter must be of the STRING type. Valid values:
     *
     *   **Master**: primary server
     *
     * <!---->
     *
     *   **Slave**: secondary server
     *
     *   **Type**: Specify the type of backend server. This parameter must be of the STRING type. Valid values:
     *
     *   **ecs**: an ECS instance
     *   **eni**: an elastic network interface (ENI)
     *
     *   **ServerIp**: the IP address of the ECS instance or ENI
     *
     * Examples:
     *
     *   ECS: `[{ "ServerId": "i-xxxxxxxxx", "Weight": "100", "Type": "ecs", "Port":"82","ServerType":"Master","Description":"test-112" }, { "ServerId": "i-xxxxxxxxx", "Weight": "100", "Type": "ecs", "Port":"84","ServerType":"Slave","Description":"test-112" }]`
     *
     * <!---->
     *
     *   ENI: `[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "Port":"80","ServerType":"Master","Description":"test-112" }, { "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","ServerType":"Slave","Description":"test-112" }]`
     *   ENI with multiple IP addresses: `[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni","ServerIp": "192.168.**.**", "Port":"80","ServerType":"Master","Description":"test-112" }, { "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni","ServerIp": "192.168.**.**", "Port":"80","ServerType":"Slave","Description":"test-112" }]`
     *
     * @example [{ "ServerId": "i-xxxxxxxxx", "Weight": "100", "Type": "ecs",  "Port":"82","ServerType":"Master","Description":"test-112" },  { "ServerId": "i-xxxxxxxxx", "Weight": "100", "Type": "ecs",  "Port":"84","ServerType":"Slave","Description":"test-112" }]
     *
     * @var string
     */
    public $masterSlaveBackendServers;

    /**
     * @description The name of the primary/secondary server group.
     *
     * @example Group1
     *
     * @var string
     */
    public $masterSlaveServerGroupName;

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

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'loadBalancerId'             => 'LoadBalancerId',
        'masterSlaveBackendServers'  => 'MasterSlaveBackendServers',
        'masterSlaveServerGroupName' => 'MasterSlaveServerGroupName',
        'ownerAccount'               => 'OwnerAccount',
        'ownerId'                    => 'OwnerId',
        'regionId'                   => 'RegionId',
        'resourceOwnerAccount'       => 'ResourceOwnerAccount',
        'resourceOwnerId'            => 'ResourceOwnerId',
        'tag'                        => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->masterSlaveBackendServers) {
            $res['MasterSlaveBackendServers'] = $this->masterSlaveBackendServers;
        }
        if (null !== $this->masterSlaveServerGroupName) {
            $res['MasterSlaveServerGroupName'] = $this->masterSlaveServerGroupName;
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMasterSlaveServerGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['MasterSlaveBackendServers'])) {
            $model->masterSlaveBackendServers = $map['MasterSlaveBackendServers'];
        }
        if (isset($map['MasterSlaveServerGroupName'])) {
            $model->masterSlaveServerGroupName = $map['MasterSlaveServerGroupName'];
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
