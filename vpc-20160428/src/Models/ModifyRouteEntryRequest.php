<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyRouteEntryRequest extends Model
{
    /**
     * @description The description of the route entry.
     *
     * The description must be 1 to 256 characters in length, and cannot start with `http://` or `https://`.
     * @example EntryDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the new next hop instance.
     *
     * @example eni-bp17y37ytsenqyim****
     *
     * @var string
     */
    public $newNextHopId;

    /**
     * @description The new next hop type of the route.
     *
     * @example NetworkInterface
     *
     * @var string
     */
    public $newNextHopType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region to which the route belongs.
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
     * @description The ID of the custom route entry.
     *
     * @example rte-acfvgfsghfdd****
     *
     * @var string
     */
    public $routeEntryId;

    /**
     * @description The name of the route entry.
     *
     * The name must be 1 to 128 characters in length, and cannot start with `http://` or `https://`.
     * @example EntryName
     *
     * @var string
     */
    public $routeEntryName;
    protected $_name = [
        'description'          => 'Description',
        'newNextHopId'         => 'NewNextHopId',
        'newNextHopType'       => 'NewNextHopType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'routeEntryId'         => 'RouteEntryId',
        'routeEntryName'       => 'RouteEntryName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->newNextHopId) {
            $res['NewNextHopId'] = $this->newNextHopId;
        }
        if (null !== $this->newNextHopType) {
            $res['NewNextHopType'] = $this->newNextHopType;
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
        if (null !== $this->routeEntryName) {
            $res['RouteEntryName'] = $this->routeEntryName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyRouteEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NewNextHopId'])) {
            $model->newNextHopId = $map['NewNextHopId'];
        }
        if (isset($map['NewNextHopType'])) {
            $model->newNextHopType = $map['NewNextHopType'];
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
        if (isset($map['RouteEntryName'])) {
            $model->routeEntryName = $map['RouteEntryName'];
        }

        return $model;
    }
}
