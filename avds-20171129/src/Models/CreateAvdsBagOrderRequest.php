<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\Tea\Model;

class CreateAvdsBagOrderRequest extends Model
{
    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var bool
     */
    public $autoUseCoupon;

    /**
     * @var string
     */
    public $flowoutSpec;

    /**
     * @var string
     */
    public $pack;
    protected $_name = [
        'period'        => 'Period',
        'periodUnit'    => 'PeriodUnit',
        'autoPay'       => 'AutoPay',
        'autoUseCoupon' => 'AutoUseCoupon',
        'flowoutSpec'   => 'FlowoutSpec',
        'pack'          => 'Pack',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }
        if (null !== $this->flowoutSpec) {
            $res['FlowoutSpec'] = $this->flowoutSpec;
        }
        if (null !== $this->pack) {
            $res['Pack'] = $this->pack;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAvdsBagOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }
        if (isset($map['FlowoutSpec'])) {
            $model->flowoutSpec = $map['FlowoutSpec'];
        }
        if (isset($map['Pack'])) {
            $model->pack = $map['Pack'];
        }

        return $model;
    }
}
