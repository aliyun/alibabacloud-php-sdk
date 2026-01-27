<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ModifyRCDiskChargeTypeRequest extends Model
{
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
    public $instanceId;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $promotionCode;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'autoRenew' => 'AutoRenew',
        'autoUseCoupon' => 'AutoUseCoupon',
        'businessInfo' => 'BusinessInfo',
        'clientToken' => 'ClientToken',
        'instanceId' => 'InstanceId',
        'payType' => 'PayType',
        'promotionCode' => 'PromotionCode',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->promotionCode) {
            $res['PromotionCode'] = $this->promotionCode;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['PromotionCode'])) {
            $model->promotionCode = $map['PromotionCode'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
