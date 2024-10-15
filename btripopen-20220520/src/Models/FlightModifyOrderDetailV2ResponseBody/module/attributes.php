<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOrderDetailV2ResponseBody\module;

use AlibabaCloud\Tea\Model;

class attributes extends Model
{
    /**
     * @var string
     */
    public $baggageRule;

    /**
     * @var string
     */
    public $changeRule;

    /**
     * @var mixed
     */
    public $latestPayTime;

    /**
     * @var string
     */
    public $latestPayTimeStr;

    /**
     * @var string
     */
    public $refundRule;
    protected $_name = [
        'baggageRule'      => 'baggage_rule',
        'changeRule'       => 'change_rule',
        'latestPayTime'    => 'latest_pay_time',
        'latestPayTimeStr' => 'latest_pay_time_str',
        'refundRule'       => 'refund_rule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baggageRule) {
            $res['baggage_rule'] = $this->baggageRule;
        }
        if (null !== $this->changeRule) {
            $res['change_rule'] = $this->changeRule;
        }
        if (null !== $this->latestPayTime) {
            $res['latest_pay_time'] = $this->latestPayTime;
        }
        if (null !== $this->latestPayTimeStr) {
            $res['latest_pay_time_str'] = $this->latestPayTimeStr;
        }
        if (null !== $this->refundRule) {
            $res['refund_rule'] = $this->refundRule;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['baggage_rule'])) {
            $model->baggageRule = $map['baggage_rule'];
        }
        if (isset($map['change_rule'])) {
            $model->changeRule = $map['change_rule'];
        }
        if (isset($map['latest_pay_time'])) {
            $model->latestPayTime = $map['latest_pay_time'];
        }
        if (isset($map['latest_pay_time_str'])) {
            $model->latestPayTimeStr = $map['latest_pay_time_str'];
        }
        if (isset($map['refund_rule'])) {
            $model->refundRule = $map['refund_rule'];
        }

        return $model;
    }
}
