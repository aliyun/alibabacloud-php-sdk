<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyVpnPbrRouteEntryAttributeRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not set this parameter, the system sets **ClientToken** to the value of **RequestId**. The value of **RequestId** may be different for each API request.
     * @example d7d24a21-f4ba-4454-9173-b3****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The new priority of the policy-based route. Valid values: **1** to **100**.
     *
     * If you do not set this parameter, the priority of the policy-based route is not modified.
     * @example 10
     *
     * @var int
     */
    public $newPriority;

    /**
     * @description The new weight of the policy-based route. Valid values:
     *
     *   **100**: The IPsec-VPN connection associated with the policy-based route serves as an active connection.
     *   **0**: The IPsec-VPN connection associated with the policy-based route serves as a standby connection.
     *
     * If you do not set this parameter, the weight of the policy-based route is not modified.
     * @example 0
     *
     * @var int
     */
    public $newWeight;

    /**
     * @description The next hop of the policy-based route.
     *
     * @example vco-bp15oes1py4i66rmd****
     *
     * @var string
     */
    public $nextHop;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The original priority of the policy-based route. Valid values: **1** to **100**.
     *
     * A smaller value indicates a higher priority.
     * @example 5
     *
     * @var int
     */
    public $priority;

    /**
     * @description The region ID of the VPN gateway.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example cn-heyuan
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
     * @description The destination CIDR block of the policy-based route.
     *
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $routeDest;

    /**
     * @description The source CIDR block of the policy-based route.
     *
     * @example 192.168.1.0/24
     *
     * @var string
     */
    public $routeSource;

    /**
     * @description The ID of the VPN gateway.
     *
     * @example vpn-bp1a3kqjiiq9legfx****
     *
     * @var string
     */
    public $vpnGatewayId;

    /**
     * @description The original weight of the policy-based route. Valid values:
     *
     *   **100**: The IPsec-VPN connection associated with the policy-based route serves as an active connection.
     *   **0**: The IPsec-VPN connection associated with the policy-based route serves as a standby connection.
     *
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'newPriority'          => 'NewPriority',
        'newWeight'            => 'NewWeight',
        'nextHop'              => 'NextHop',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'priority'             => 'Priority',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'routeDest'            => 'RouteDest',
        'routeSource'          => 'RouteSource',
        'vpnGatewayId'         => 'VpnGatewayId',
        'weight'               => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->newPriority) {
            $res['NewPriority'] = $this->newPriority;
        }
        if (null !== $this->newWeight) {
            $res['NewWeight'] = $this->newWeight;
        }
        if (null !== $this->nextHop) {
            $res['NextHop'] = $this->nextHop;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
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
        if (null !== $this->routeDest) {
            $res['RouteDest'] = $this->routeDest;
        }
        if (null !== $this->routeSource) {
            $res['RouteSource'] = $this->routeSource;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVpnPbrRouteEntryAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['NewPriority'])) {
            $model->newPriority = $map['NewPriority'];
        }
        if (isset($map['NewWeight'])) {
            $model->newWeight = $map['NewWeight'];
        }
        if (isset($map['NextHop'])) {
            $model->nextHop = $map['NextHop'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
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
        if (isset($map['RouteDest'])) {
            $model->routeDest = $map['RouteDest'];
        }
        if (isset($map['RouteSource'])) {
            $model->routeSource = $map['RouteSource'];
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
