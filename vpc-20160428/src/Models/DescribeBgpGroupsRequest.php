<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DescribeBgpGroupsRequest extends Model
{
    /**
     * @description The ID of the BGP group.
     *
     * @example bgpg-bp1k25cyp26cllath****
     *
     * @var string
     */
    public $bgpGroupId;

    /**
     * @description Specifies whether the BGP group is the default one. Valid values:
     *
     *   **false**
     *   **true**
     *
     * @example false
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. The maximum value is **50**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region in which the VBR is deployed.
     *
     * This parameter is required.
     * @example cn-shanghai
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
     * @description The ID of the virtual border router (VBR) that is associated with the BGP group.
     *
     * @example vbr-bp1ctxy813985gkuk****
     *
     * @var string
     */
    public $routerId;
    protected $_name = [
        'bgpGroupId'           => 'BgpGroupId',
        'isDefault'            => 'IsDefault',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'routerId'             => 'RouterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bgpGroupId) {
            $res['BgpGroupId'] = $this->bgpGroupId;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBgpGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BgpGroupId'])) {
            $model->bgpGroupId = $map['BgpGroupId'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }

        return $model;
    }
}
