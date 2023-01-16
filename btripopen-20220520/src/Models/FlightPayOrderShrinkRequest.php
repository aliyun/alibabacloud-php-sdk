<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class FlightPayOrderShrinkRequest extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $corpPayPrice;

    /**
     * @example dis123
     *
     * @var string
     */
    public $disOrderId;

    /**
     * @var string
     */
    public $extraShrink;

    /**
     * @example 100
     *
     * @var int
     */
    public $personalPayPrice;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalPayPrice;
    protected $_name = [
        'corpPayPrice'     => 'corp_pay_price',
        'disOrderId'       => 'dis_order_id',
        'extraShrink'      => 'extra',
        'personalPayPrice' => 'personal_pay_price',
        'totalPayPrice'    => 'total_pay_price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpPayPrice) {
            $res['corp_pay_price'] = $this->corpPayPrice;
        }
        if (null !== $this->disOrderId) {
            $res['dis_order_id'] = $this->disOrderId;
        }
        if (null !== $this->extraShrink) {
            $res['extra'] = $this->extraShrink;
        }
        if (null !== $this->personalPayPrice) {
            $res['personal_pay_price'] = $this->personalPayPrice;
        }
        if (null !== $this->totalPayPrice) {
            $res['total_pay_price'] = $this->totalPayPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FlightPayOrderShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['corp_pay_price'])) {
            $model->corpPayPrice = $map['corp_pay_price'];
        }
        if (isset($map['dis_order_id'])) {
            $model->disOrderId = $map['dis_order_id'];
        }
        if (isset($map['extra'])) {
            $model->extraShrink = $map['extra'];
        }
        if (isset($map['personal_pay_price'])) {
            $model->personalPayPrice = $map['personal_pay_price'];
        }
        if (isset($map['total_pay_price'])) {
            $model->totalPayPrice = $map['total_pay_price'];
        }

        return $model;
    }
}
