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
     *
     * @example EntryDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The destination CIDR block of the route entry. Only IPv4 CIDR blocks, IPv6 CIDR blocks, and prefix lists are supported.
     *
     * @example 192.168.0.0/24
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs a dry run. The system checks the request for potential issues, including the AccessKey pair, the permissions of the RAM user, and the required parameters. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

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
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
     *
     * This parameter is required.
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
     *
     * @example EntryName
     *
     * @var string
     */
    public $routeEntryName;

    /**
     * @description The ID of the route table to which the route entry belongs.
     *
     * @example vtb-bp1nk7zk65du3pni8z9td
     *
     * @var string
     */
    public $routeTableId;
    protected $_name = [
        'description' => 'Description',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'dryRun' => 'DryRun',
        'newNextHopId' => 'NewNextHopId',
        'newNextHopType' => 'NewNextHopType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'routeEntryId' => 'RouteEntryId',
        'routeEntryName' => 'RouteEntryName',
        'routeTableId' => 'RouteTableId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
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
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
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
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
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
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        return $model;
    }
}
