<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class RenewRCInstanceRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;
    /**
     * @var string
     */
    public $autoRenew;
    /**
     * @var bool
     */
    public $autoUseCoupon;
    /**
     * @var string
     */
    public $businessInfo;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $commodityCode;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var string
     */
    public $payType;
    /**
     * @var bool
     */
    public $periodAlign;
    /**
     * @var string
     */
    public $promotionCode;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resource;
    /**
     * @var string
     */
    public $resourceOwnerAccount;
    /**
     * @var string
     */
    public $timeType;
    /**
     * @var string
     */
    public $usedTime;
    protected $_name = [
        'autoPay'              => 'AutoPay',
        'autoRenew'            => 'AutoRenew',
        'autoUseCoupon'        => 'AutoUseCoupon',
        'businessInfo'         => 'BusinessInfo',
        'clientToken'          => 'ClientToken',
        'commodityCode'        => 'CommodityCode',
        'instanceId'           => 'InstanceId',
        'ownerId'              => 'OwnerId',
        'payType'              => 'PayType',
        'periodAlign'          => 'PeriodAlign',
        'promotionCode'        => 'PromotionCode',
        'regionId'             => 'RegionId',
        'resource'             => 'Resource',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'timeType'             => 'TimeType',
        'usedTime'             => 'UsedTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }

        if (null !== $this->businessInfo) {
            $res['BusinessInfo'] = $this->businessInfo;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->periodAlign) {
            $res['PeriodAlign'] = $this->periodAlign;
        }

        if (null !== $this->promotionCode) {
            $res['PromotionCode'] = $this->promotionCode;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->timeType) {
            $res['TimeType'] = $this->timeType;
        }

        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
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
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }

        if (isset($map['BusinessInfo'])) {
            $model->businessInfo = $map['BusinessInfo'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['PeriodAlign'])) {
            $model->periodAlign = $map['PeriodAlign'];
        }

        if (isset($map['PromotionCode'])) {
            $model->promotionCode = $map['PromotionCode'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['TimeType'])) {
            $model->timeType = $map['TimeType'];
        }

        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }

        return $model;
    }
}
