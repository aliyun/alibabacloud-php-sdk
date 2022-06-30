<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\Tea\Model;

class ListSupportResourceTypesRequest extends Model
{
    /**
     * @var int
     */
    public $maxResult;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $resourceTye;

    /**
     * @var bool
     */
    public $showItems;

    /**
     * @var string
     */
    public $supportCode;
    protected $_name = [
        'maxResult'            => 'MaxResult',
        'nextToken'            => 'NextToken',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'productCode'          => 'ProductCode',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceTye'          => 'ResourceTye',
        'showItems'            => 'ShowItems',
        'supportCode'          => 'SupportCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResult) {
            $res['MaxResult'] = $this->maxResult;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceTye) {
            $res['ResourceTye'] = $this->resourceTye;
        }
        if (null !== $this->showItems) {
            $res['ShowItems'] = $this->showItems;
        }
        if (null !== $this->supportCode) {
            $res['SupportCode'] = $this->supportCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSupportResourceTypesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResult'])) {
            $model->maxResult = $map['MaxResult'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceTye'])) {
            $model->resourceTye = $map['ResourceTye'];
        }
        if (isset($map['ShowItems'])) {
            $model->showItems = $map['ShowItems'];
        }
        if (isset($map['SupportCode'])) {
            $model->supportCode = $map['SupportCode'];
        }

        return $model;
    }
}
