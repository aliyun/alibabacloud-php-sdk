<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models;

use AlibabaCloud\Tea\Model;

class PurchaseResourcesRequest extends Model
{
    /**
     * @var string
     */
    public $billId;

    /**
     * @var int
     */
    public $buyNumber;

    /**
     * @var bool
     */
    public $isDisplayPool;

    /**
     * @var string
     */
    public $noLike;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $prodCode;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var int
     */
    public $resType;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $specId;

    /**
     * @var string
     */
    public $usageScenarios;
    protected $_name = [
        'billId'               => 'BillId',
        'buyNumber'            => 'BuyNumber',
        'isDisplayPool'        => 'IsDisplayPool',
        'noLike'               => 'NoLike',
        'ownerId'              => 'OwnerId',
        'prodCode'             => 'ProdCode',
        'regionName'           => 'RegionName',
        'resType'              => 'ResType',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'specId'               => 'SpecId',
        'usageScenarios'       => 'UsageScenarios',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billId) {
            $res['BillId'] = $this->billId;
        }
        if (null !== $this->buyNumber) {
            $res['BuyNumber'] = $this->buyNumber;
        }
        if (null !== $this->isDisplayPool) {
            $res['IsDisplayPool'] = $this->isDisplayPool;
        }
        if (null !== $this->noLike) {
            $res['NoLike'] = $this->noLike;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->resType) {
            $res['ResType'] = $this->resType;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->specId) {
            $res['SpecId'] = $this->specId;
        }
        if (null !== $this->usageScenarios) {
            $res['UsageScenarios'] = $this->usageScenarios;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PurchaseResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillId'])) {
            $model->billId = $map['BillId'];
        }
        if (isset($map['BuyNumber'])) {
            $model->buyNumber = $map['BuyNumber'];
        }
        if (isset($map['IsDisplayPool'])) {
            $model->isDisplayPool = $map['IsDisplayPool'];
        }
        if (isset($map['NoLike'])) {
            $model->noLike = $map['NoLike'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['ResType'])) {
            $model->resType = $map['ResType'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SpecId'])) {
            $model->specId = $map['SpecId'];
        }
        if (isset($map['UsageScenarios'])) {
            $model->usageScenarios = $map['UsageScenarios'];
        }

        return $model;
    }
}
