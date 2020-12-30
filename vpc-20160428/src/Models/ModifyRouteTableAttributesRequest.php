<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyRouteTableAttributesRequest extends Model
{
    /**
     * @var string
     */
    public $routeTableId;

    /**
     * @var string
     */
    public $routeTableName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $kbpsBandwidth;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $resourceBid;

    /**
     * @var int
     */
    public $resourceUid;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'routeTableId'         => 'RouteTableId',
        'routeTableName'       => 'RouteTableName',
        'description'          => 'Description',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'bandwidth'            => 'Bandwidth',
        'kbpsBandwidth'        => 'KbpsBandwidth',
        'ownerAccount'         => 'OwnerAccount',
        'resourceBid'          => 'ResourceBid',
        'resourceUid'          => 'ResourceUid',
        'regionId'             => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }
        if (null !== $this->routeTableName) {
            $res['RouteTableName'] = $this->routeTableName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->kbpsBandwidth) {
            $res['KbpsBandwidth'] = $this->kbpsBandwidth;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->resourceBid) {
            $res['ResourceBid'] = $this->resourceBid;
        }
        if (null !== $this->resourceUid) {
            $res['ResourceUid'] = $this->resourceUid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyRouteTableAttributesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }
        if (isset($map['RouteTableName'])) {
            $model->routeTableName = $map['RouteTableName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['KbpsBandwidth'])) {
            $model->kbpsBandwidth = $map['KbpsBandwidth'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['ResourceBid'])) {
            $model->resourceBid = $map['ResourceBid'];
        }
        if (isset($map['ResourceUid'])) {
            $model->resourceUid = $map['ResourceUid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
