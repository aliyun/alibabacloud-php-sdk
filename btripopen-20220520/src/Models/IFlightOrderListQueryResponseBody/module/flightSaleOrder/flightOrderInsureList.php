<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module\flightSaleOrder;

use AlibabaCloud\Dara\Model;

class flightOrderInsureList extends Model
{
    /**
     * @var string
     */
    public $insOrderId;

    /**
     * @var string
     */
    public $insPayType;

    /**
     * @var int
     */
    public $insTotalPrice;

    /**
     * @var string
     */
    public $tradeAction;
    protected $_name = [
        'insOrderId' => 'ins_order_id',
        'insPayType' => 'ins_pay_type',
        'insTotalPrice' => 'ins_total_price',
        'tradeAction' => 'trade_action',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->insOrderId) {
            $res['ins_order_id'] = $this->insOrderId;
        }

        if (null !== $this->insPayType) {
            $res['ins_pay_type'] = $this->insPayType;
        }

        if (null !== $this->insTotalPrice) {
            $res['ins_total_price'] = $this->insTotalPrice;
        }

        if (null !== $this->tradeAction) {
            $res['trade_action'] = $this->tradeAction;
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
        if (isset($map['ins_order_id'])) {
            $model->insOrderId = $map['ins_order_id'];
        }

        if (isset($map['ins_pay_type'])) {
            $model->insPayType = $map['ins_pay_type'];
        }

        if (isset($map['ins_total_price'])) {
            $model->insTotalPrice = $map['ins_total_price'];
        }

        if (isset($map['trade_action'])) {
            $model->tradeAction = $map['trade_action'];
        }

        return $model;
    }
}
