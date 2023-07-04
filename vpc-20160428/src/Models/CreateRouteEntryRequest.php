<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouteEntryRequest\nextHopList;
use AlibabaCloud\Tea\Model;

class CreateRouteEntryRequest extends Model
{
    /**
     * @description The type of next hop of the custom route entry. Valid values:
     *
     *   **Instance**: an Elastic Compute Service (ECS) instance. This is the default value.
     *   **HaVip**: a high-availability virtual IP address (HAVIP).
     *   **RouterInterface**: a router interface.
     *   **NetworkInterface**: an elastic network interface (ENI).
     *   **VpnGateway**: a VPN gateway.
     *   **IPv6Gateway**: an IPv6 gateway.
     *   **NatGateway**: a NAT gateway.
     *   **Attachment**: a transit router.
     *   **VpcPeer**: a VPC peering connection.
     *
     * @example 02fb3da4-130e-11e9-8e44-001****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The weight of the next hop of the ECMP route entry.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the custom route entry that you want to add.
     *
     * The name must be 1 to 128 characters in length, and cannot start with `http://` or `https://`.
     * @example 192.168.0.0/24
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description The description of the custom route entry.
     *
     * The description must be 1 to 256 characters in length, and cannot start with `http://` or `https://`.
     * @example i-j6c2fp57q8rr4jlu****
     *
     * @var string
     */
    public $nextHopId;

    /**
     * @var nextHopList[]
     */
    public $nextHopList;

    /**
     * @description The type of next hop of the ECMP route entry. Set the value to **RouterInterface**.
     *
     * @example RouterInterface
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the next hop.
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
     * @description The ID of the next hop of the ECMP route.
     *
     * @example test
     *
     * @var string
     */
    public $routeEntryName;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that the value is unique among different requests. The ClientToken value can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** for each API request may be different.
     * @example vtb-bp145q7glnuzd****
     *
     * @var string
     */
    public $routeTableId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'description'          => 'Description',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'nextHopId'            => 'NextHopId',
        'nextHopList'          => 'NextHopList',
        'nextHopType'          => 'NextHopType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'routeEntryName'       => 'RouteEntryName',
        'routeTableId'         => 'RouteTableId',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->nextHopId) {
            $res['NextHopId'] = $this->nextHopId;
        }
        if (null !== $this->nextHopList) {
            $res['NextHopList'] = [];
            if (null !== $this->nextHopList && \is_array($this->nextHopList)) {
                $n = 0;
                foreach ($this->nextHopList as $item) {
                    $res['NextHopList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
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
        if (null !== $this->routeEntryName) {
            $res['RouteEntryName'] = $this->routeEntryName;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRouteEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
        }
        if (isset($map['NextHopList'])) {
            if (!empty($map['NextHopList'])) {
                $model->nextHopList = [];
                $n                  = 0;
                foreach ($map['NextHopList'] as $item) {
                    $model->nextHopList[$n++] = null !== $item ? nextHopList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
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
        if (isset($map['RouteEntryName'])) {
            $model->routeEntryName = $map['RouteEntryName'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        return $model;
    }
}
