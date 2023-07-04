<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class PublishVpnRouteEntryRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** may be different for each API request.
     * @example d7d24a21-f4ba-4454-9173-b382****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The next hop of the VPN gateway route.
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
     * @description Specifies whether to advertise the VPN gateway route to the VPC route table. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $publishVpc;

    /**
     * @description The ID of the region where the VPN gateway is created.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
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
     * @description The destination CIDR block of the VPN gateway route.
     *
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $routeDest;

    /**
     * @description The type of the VPN gateway route. Valid values:
     *
     *   **pbr**: policy-based route
     *   **dbr**: destination-based route
     *
     * @example pbr
     *
     * @var string
     */
    public $routeType;

    /**
     * @description The ID of the VPN gateway.
     *
     * @example vpn-bp1a3kqjiiq9legfx****
     *
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'nextHop'              => 'NextHop',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'publishVpc'           => 'PublishVpc',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'routeDest'            => 'RouteDest',
        'routeType'            => 'RouteType',
        'vpnGatewayId'         => 'VpnGatewayId',
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
        if (null !== $this->nextHop) {
            $res['NextHop'] = $this->nextHop;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->publishVpc) {
            $res['PublishVpc'] = $this->publishVpc;
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
        if (null !== $this->routeType) {
            $res['RouteType'] = $this->routeType;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishVpnRouteEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
        if (isset($map['PublishVpc'])) {
            $model->publishVpc = $map['PublishVpc'];
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
        if (isset($map['RouteType'])) {
            $model->routeType = $map['RouteType'];
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }

        return $model;
    }
}
