<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteRouteEntryRequest\nextHopList;
use AlibabaCloud\Tea\Model;

class DeleteRouteEntryRequest extends Model
{
    /**
     * @description The destination CIDR block of the route. Only IPv4 CIDR blocks, IPv6 CIDR blocks, and prefix lists are supported.
     *
     * @example 47.100.XX.XX/16
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the next hop.
     *
     *   To delete a route other than an equal-cost multi-path (ECMP) route, set the **NextHopId** parameter and ignore the **NextHopList** parameter.
     *   To delete an ECMP route, set the **NextHopList** parameter and ignore the **NextHopId** parameter.
     *
     * @example ri-2zeo3xzyf38r4urzd****
     *
     * @var string
     */
    public $nextHopId;

    /**
     * @description The list of the next hop of the ECMP route.
     *
     * @var nextHopList[]
     */
    public $nextHopList;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the route table.
     *
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
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
     * @description The ID of the route that you want to delete.
     *
     * @example rte-bp1mnnr2al0naomnpv****
     *
     * @var string
     */
    public $routeEntryId;

    /**
     * @description The ID of the route table to which the route belongs.
     *
     * @example vtb-2ze3jgygk9bmsj23s****
     *
     * @var string
     */
    public $routeTableId;
    protected $_name = [
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'dryRun' => 'DryRun',
        'nextHopId' => 'NextHopId',
        'nextHopList' => 'NextHopList',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'routeEntryId' => 'RouteEntryId',
        'routeTableId' => 'RouteTableId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
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
        if (null !== $this->routeEntryId) {
            $res['RouteEntryId'] = $this->routeEntryId;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRouteEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
        }
        if (isset($map['NextHopList'])) {
            if (!empty($map['NextHopList'])) {
                $model->nextHopList = [];
                $n = 0;
                foreach ($map['NextHopList'] as $item) {
                    $model->nextHopList[$n++] = null !== $item ? nextHopList::fromMap($item) : $item;
                }
            }
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
        if (isset($map['RouteEntryId'])) {
            $model->routeEntryId = $map['RouteEntryId'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        return $model;
    }
}
