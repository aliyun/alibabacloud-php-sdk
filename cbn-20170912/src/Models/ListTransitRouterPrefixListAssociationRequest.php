<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;

class ListTransitRouterPrefixListAssociationRequest extends Model
{
    /**
     * @var string
     */
    public $nextHop;

    /**
     * @var string
     */
    public $nextHopInstanceId;

    /**
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
     * @var int
     */
    public $ownerUid;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $prefixListId;

    /**
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
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $transitRouterId;

    /**
     * @var string
     */
    public $transitRouterTableId;
    protected $_name = [
        'nextHop' => 'NextHop',
        'nextHopInstanceId' => 'NextHopInstanceId',
        'nextHopType' => 'NextHopType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'ownerUid' => 'OwnerUid',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'prefixListId' => 'PrefixListId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'status' => 'Status',
        'transitRouterId' => 'TransitRouterId',
        'transitRouterTableId' => 'TransitRouterTableId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextHop) {
            $res['NextHop'] = $this->nextHop;
        }

        if (null !== $this->nextHopInstanceId) {
            $res['NextHopInstanceId'] = $this->nextHopInstanceId;
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

        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->prefixListId) {
            $res['PrefixListId'] = $this->prefixListId;
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }

        if (null !== $this->transitRouterTableId) {
            $res['TransitRouterTableId'] = $this->transitRouterTableId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextHop'])) {
            $model->nextHop = $map['NextHop'];
        }

        if (isset($map['NextHopInstanceId'])) {
            $model->nextHopInstanceId = $map['NextHopInstanceId'];
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

        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PrefixListId'])) {
            $model->prefixListId = $map['PrefixListId'];
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        if (isset($map['TransitRouterTableId'])) {
            $model->transitRouterTableId = $map['TransitRouterTableId'];
        }

        return $model;
    }
}
