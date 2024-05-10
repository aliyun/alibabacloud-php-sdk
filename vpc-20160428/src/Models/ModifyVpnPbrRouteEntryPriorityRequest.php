<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyVpnPbrRouteEntryPriorityRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The client token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example d7d24a21-f4ba-4454-9173-b3****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The new priority of the policy-based route. Valid values: **1** to **100**.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $newPriority;

    /**
     * @description The next hop of the policy-based route.
     *
     * This parameter is required.
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
     * @description The ID of the region where the VPN gateway is created.
     *
     * This parameter is required.
     * @example cn-henyuan
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
     * This parameter is required.
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $routeDest;

    /**
     * @description The source CIDR block of the policy-based route.
     *
     * This parameter is required.
     * @example 192.168.1.0/24
     *
     * @var string
     */
    public $routeSource;

    /**
     * @description The ID of the VPN gateway.
     *
     * This parameter is required.
     * @example vpn-bp1a3kqjiiq9legfx****
     *
     * @var string
     */
    public $vpnGatewayId;

    /**
     * @description The weight of the policy-based route. Valid values:
     *
     * This parameter is required.
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'newPriority'          => 'NewPriority',
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
     * @return ModifyVpnPbrRouteEntryPriorityRequest
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
