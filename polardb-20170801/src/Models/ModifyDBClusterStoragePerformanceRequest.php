<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBClusterStoragePerformanceRequest extends Model
{
    /**
     * @var bool
     */
    public $autoUseCoupon;

    /**
     * @var string
     */
    public $burstingEnabled;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $modifyType;

    /**
     * @var string
     */
    public $promotionCode;

    /**
     * @var int
     */
    public $provisionedIops;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $storageType;
    protected $_name = [
        'autoUseCoupon' => 'AutoUseCoupon',
        'burstingEnabled' => 'BurstingEnabled',
        'clientToken' => 'ClientToken',
        'DBClusterId' => 'DBClusterId',
        'modifyType' => 'ModifyType',
        'promotionCode' => 'PromotionCode',
        'provisionedIops' => 'ProvisionedIops',
        'resourceOwnerId' => 'ResourceOwnerId',
        'storageType' => 'StorageType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }

        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->modifyType) {
            $res['ModifyType'] = $this->modifyType;
        }

        if (null !== $this->promotionCode) {
            $res['PromotionCode'] = $this->promotionCode;
        }

        if (null !== $this->provisionedIops) {
            $res['ProvisionedIops'] = $this->provisionedIops;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }

        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['ModifyType'])) {
            $model->modifyType = $map['ModifyType'];
        }

        if (isset($map['PromotionCode'])) {
            $model->promotionCode = $map['PromotionCode'];
        }

        if (isset($map['ProvisionedIops'])) {
            $model->provisionedIops = $map['ProvisionedIops'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
