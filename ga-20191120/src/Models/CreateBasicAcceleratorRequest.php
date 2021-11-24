<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class CreateBasicAcceleratorRequest extends Model
{
    /**
     * @description 自动续费
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description 自动使用优惠券
     *
     * @var string
     */
    public $autoUseCoupon;

    /**
     * @description 客户端Token
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 购买时长
     *
     * @var int
     */
    public $duration;

    /**
     * @description 时长单位
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'autoPay'       => 'AutoPay',
        'autoUseCoupon' => 'AutoUseCoupon',
        'clientToken'   => 'ClientToken',
        'duration'      => 'Duration',
        'pricingCycle'  => 'PricingCycle',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBasicAcceleratorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
