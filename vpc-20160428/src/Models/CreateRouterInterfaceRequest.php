<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouterInterfaceRequest\tags;
use AlibabaCloud\Tea\Model;

class CreateRouterInterfaceRequest extends Model
{
    /**
     * @description The ID of the access point to which the VBR belongs.
     *
     * >  This parameter is required if the VBR is connected to an Express Connect circuit.
     * @example ap-cn-hangzhou-yh-ts-A
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @description Specifies whether to enable automatic payment. Valid values:
     *
     *   **false** (default): The automatic payment is disabled. If you select this option, you must go to the Order Center to complete the payment after an order is generated.
     *   **true**: The automatic payment is enabled. Payments are automatically complete after an order is generated.
     *
     * >  This parameter is required if **InstanceChargeType** is set to **PrePaid**.
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Specifies whether to enable auto-renewal. Valid values:
     *
     *   **false** (default)
     *   **true**
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * >  If you do not specify this parameter, the system automatically uses the request ID as the client token. The request ID may be different for each request.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the router interface.
     *
     * The description must be 2 to 256 characters in length. It must start with a letter but cannot start with `http://` or `https://`.
     * @example abcabc
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether the VBR that is created in the Fast Link mode is uplinked to the router interface. The Fast Link mode helps automatically connect router interfaces that are created for the VBR and its peer VPC. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >
     *
     *   This parameter takes effect only if **RouterType** is set to **VBR** and **OppositeRouterType** is set to **VRouter**.
     *
     *   If **FastLinkMode** is set to **true**, **Role** must be set to **InitiatingSide**. In this case, **AccessPointId**, **OppositeRouterType**, **OpppsiteRouterId**, and **OppositeInterfaceOwnerId** are required.
     *
     * @example false
     *
     * @var bool
     */
    public $fastLinkMode;

    /**
     * @description The source IP address that is used to perform health checks. The source IP address must be an idle IP address of the local virtual private cloud (VPC).
     *
     * >  You can set this parameter when an Express Connect circuit is used.
     * @example 192.168.0.6
     *
     * @var string
     */
    public $healthCheckSourceIp;

    /**
     * @description The destination IP address that is used to perform health checks.
     *
     * >  This parameter is required if you specify **HealthCheckSourceIp**
     * @example 192.168.0.8
     *
     * @var string
     */
    public $healthCheckTargetIp;

    /**
     * @description The billing method of the router interface. Valid values:
     *
     *   **PrePaid**: subscription
     *   **PostPaid**: pay-as-you-go
     *
     * @example PrePaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The name of the router interface.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (\_), and hyphens (-).
     * @example abc
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the access point to which the peer belongs.
     *
     * >  This parameter is required if the peer router interface is associated with a VBR. The specified value cannot be changed after the router interface is created.
     * @example ap-cn-shanghai-nt-aligroup-C
     *
     * @var string
     */
    public $oppositeAccessPointId;

    /**
     * @description The ID of the peer router interface.
     *
     * @example ri-2zeo3xzyf38r4urzd****
     *
     * @var string
     */
    public $oppositeInterfaceId;

    /**
     * @description The ID of the Alibaba Cloud account to which the peer router interface belongs.
     *
     * @example 253460731706911258
     *
     * @var string
     */
    public $oppositeInterfaceOwnerId;

    /**
     * @description The ID of the region in which the acceptor is deployed.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $oppositeRegionId;

    /**
     * @description The ID of the peer router.
     *
     * @example vrt-bp1lhl0taikrteen8****
     *
     * @var string
     */
    public $oppositeRouterId;

    /**
     * @description The type of router that is associated with the peer router interface. Valid values:
     *
     *   **VRouter**
     *   **VBR**
     *
     * @example VRouter
     *
     * @var string
     */
    public $oppositeRouterType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The subscription duration. Valid values:
     *
     *   Valid values when PricingCycle is set to Month: **1 to 9**.
     *   Valid values when PricingCycle is set to Year: **1 to 3**.
     *
     * >  This parameter is required if **InstanceChargeType** is set to **PrePaid**.
     * @example 3
     *
     * @var int
     */
    public $period;

    /**
     * @description The billing cycle of the subscription. Valid values:
     *
     *   **Month** (default)
     *   **Year**
     *
     * >  This parameter is required if **InstanceChargeType** is set to **PrePaid**.
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description The ID of the region to which the router interface belongs.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to obtain the region ID.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * For more information about resource group, see [What is Resource Management?](~~94475~~)
     * @example rg-acfmxazb4ph6aiy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The role of the router interface. Valid values:
     *
     *   **InitiatingSide**: requester
     *   **AcceptingSide**: acceptor
     *
     * @example InitiatingSide
     *
     * @var string
     */
    public $role;

    /**
     * @description The ID of the router that is associated with the router interface.
     *
     * @example vbr-m5ebm6g9ptc9mly1c****
     *
     * @var string
     */
    public $routerId;

    /**
     * @description The type of router that is associated with the router interface. Valid values:
     *
     *   **VRouter**
     *   **VBR**
     *
     * @example VRouter
     *
     * @var string
     */
    public $routerType;

    /**
     * @description The specification of the router interface and the corresponding bandwidth. Valid values:
     *
     *   **Mini.2**: 2 Mbit/s
     *   **Mini.5**: 5 Mbit/s
     *   **Small.1**: 10 Mbit/s
     *   **Small.2**: 20 Mbit/s
     *   **Small.5**: 50 Mbit/s
     *   **Middle.1**: 100 Mbit/s
     *   **Middle.2**: 200 Mbit/s
     *   **Middle.5**: 500 Mbit/s
     *   **Large.1**: 1,000 Mbit/s
     *   **Large.2**: 2,000 Mbit/s
     *   **Large.5**: 5,000 Mbit/s
     *   **Xlarge.1**: 10,000 Mbit/s
     *
     * >  If **Role** is set to **AcceptingSide**, set **Spec** to **Negative**. This indicates that you do not need to specify the specification when you create an acceptor router interface.
     * @example Mini.2
     *
     * @var string
     */
    public $spec;

    /**
     * @description The tag to add to the resource.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'accessPointId'            => 'AccessPointId',
        'autoPay'                  => 'AutoPay',
        'autoRenew'                => 'AutoRenew',
        'clientToken'              => 'ClientToken',
        'description'              => 'Description',
        'fastLinkMode'             => 'FastLinkMode',
        'healthCheckSourceIp'      => 'HealthCheckSourceIp',
        'healthCheckTargetIp'      => 'HealthCheckTargetIp',
        'instanceChargeType'       => 'InstanceChargeType',
        'name'                     => 'Name',
        'oppositeAccessPointId'    => 'OppositeAccessPointId',
        'oppositeInterfaceId'      => 'OppositeInterfaceId',
        'oppositeInterfaceOwnerId' => 'OppositeInterfaceOwnerId',
        'oppositeRegionId'         => 'OppositeRegionId',
        'oppositeRouterId'         => 'OppositeRouterId',
        'oppositeRouterType'       => 'OppositeRouterType',
        'ownerAccount'             => 'OwnerAccount',
        'ownerId'                  => 'OwnerId',
        'period'                   => 'Period',
        'pricingCycle'             => 'PricingCycle',
        'regionId'                 => 'RegionId',
        'resourceGroupId'          => 'ResourceGroupId',
        'resourceOwnerAccount'     => 'ResourceOwnerAccount',
        'resourceOwnerId'          => 'ResourceOwnerId',
        'role'                     => 'Role',
        'routerId'                 => 'RouterId',
        'routerType'               => 'RouterType',
        'spec'                     => 'Spec',
        'tags'                     => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fastLinkMode) {
            $res['FastLinkMode'] = $this->fastLinkMode;
        }
        if (null !== $this->healthCheckSourceIp) {
            $res['HealthCheckSourceIp'] = $this->healthCheckSourceIp;
        }
        if (null !== $this->healthCheckTargetIp) {
            $res['HealthCheckTargetIp'] = $this->healthCheckTargetIp;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->oppositeAccessPointId) {
            $res['OppositeAccessPointId'] = $this->oppositeAccessPointId;
        }
        if (null !== $this->oppositeInterfaceId) {
            $res['OppositeInterfaceId'] = $this->oppositeInterfaceId;
        }
        if (null !== $this->oppositeInterfaceOwnerId) {
            $res['OppositeInterfaceOwnerId'] = $this->oppositeInterfaceOwnerId;
        }
        if (null !== $this->oppositeRegionId) {
            $res['OppositeRegionId'] = $this->oppositeRegionId;
        }
        if (null !== $this->oppositeRouterId) {
            $res['OppositeRouterId'] = $this->oppositeRouterId;
        }
        if (null !== $this->oppositeRouterType) {
            $res['OppositeRouterType'] = $this->oppositeRouterType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }
        if (null !== $this->routerType) {
            $res['RouterType'] = $this->routerType;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRouterInterfaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FastLinkMode'])) {
            $model->fastLinkMode = $map['FastLinkMode'];
        }
        if (isset($map['HealthCheckSourceIp'])) {
            $model->healthCheckSourceIp = $map['HealthCheckSourceIp'];
        }
        if (isset($map['HealthCheckTargetIp'])) {
            $model->healthCheckTargetIp = $map['HealthCheckTargetIp'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OppositeAccessPointId'])) {
            $model->oppositeAccessPointId = $map['OppositeAccessPointId'];
        }
        if (isset($map['OppositeInterfaceId'])) {
            $model->oppositeInterfaceId = $map['OppositeInterfaceId'];
        }
        if (isset($map['OppositeInterfaceOwnerId'])) {
            $model->oppositeInterfaceOwnerId = $map['OppositeInterfaceOwnerId'];
        }
        if (isset($map['OppositeRegionId'])) {
            $model->oppositeRegionId = $map['OppositeRegionId'];
        }
        if (isset($map['OppositeRouterId'])) {
            $model->oppositeRouterId = $map['OppositeRouterId'];
        }
        if (isset($map['OppositeRouterType'])) {
            $model->oppositeRouterType = $map['OppositeRouterType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }
        if (isset($map['RouterType'])) {
            $model->routerType = $map['RouterType'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
