<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalResponseBody\module\multiRefundCalList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalResponseBody\module\returnReason;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $flightChange;

    /**
     * @example FlightItem_996677504
     *
     * @var string
     */
    public $itemUnitId;

    /**
     * @var multiRefundCalList[]
     */
    public $multiRefundCalList;

    /**
     * @example 1000
     *
     * @var int
     */
    public $preRefundMoney;

    /**
     * @example 1000
     *
     * @var int
     */
    public $refundFee;

    /**
     * @var returnReason[]
     */
    public $returnReason;

    /**
     * @example 882sudu23s923j9d2
     *
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $tips;
    protected $_name = [
        'flightChange'       => 'flight_change',
        'itemUnitId'         => 'item_unit_id',
        'multiRefundCalList' => 'multi_refund_cal_list',
        'preRefundMoney'     => 'pre_refund_money',
        'refundFee'          => 'refund_fee',
        'returnReason'       => 'return_reason',
        'sessionId'          => 'session_id',
        'tips'               => 'tips',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flightChange) {
            $res['flight_change'] = $this->flightChange;
        }
        if (null !== $this->itemUnitId) {
            $res['item_unit_id'] = $this->itemUnitId;
        }
        if (null !== $this->multiRefundCalList) {
            $res['multi_refund_cal_list'] = [];
            if (null !== $this->multiRefundCalList && \is_array($this->multiRefundCalList)) {
                $n = 0;
                foreach ($this->multiRefundCalList as $item) {
                    $res['multi_refund_cal_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->preRefundMoney) {
            $res['pre_refund_money'] = $this->preRefundMoney;
        }
        if (null !== $this->refundFee) {
            $res['refund_fee'] = $this->refundFee;
        }
        if (null !== $this->returnReason) {
            $res['return_reason'] = [];
            if (null !== $this->returnReason && \is_array($this->returnReason)) {
                $n = 0;
                foreach ($this->returnReason as $item) {
                    $res['return_reason'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sessionId) {
            $res['session_id'] = $this->sessionId;
        }
        if (null !== $this->tips) {
            $res['tips'] = $this->tips;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['flight_change'])) {
            $model->flightChange = $map['flight_change'];
        }
        if (isset($map['item_unit_id'])) {
            $model->itemUnitId = $map['item_unit_id'];
        }
        if (isset($map['multi_refund_cal_list'])) {
            if (!empty($map['multi_refund_cal_list'])) {
                $model->multiRefundCalList = [];
                $n                         = 0;
                foreach ($map['multi_refund_cal_list'] as $item) {
                    $model->multiRefundCalList[$n++] = null !== $item ? multiRefundCalList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['pre_refund_money'])) {
            $model->preRefundMoney = $map['pre_refund_money'];
        }
        if (isset($map['refund_fee'])) {
            $model->refundFee = $map['refund_fee'];
        }
        if (isset($map['return_reason'])) {
            if (!empty($map['return_reason'])) {
                $model->returnReason = [];
                $n                   = 0;
                foreach ($map['return_reason'] as $item) {
                    $model->returnReason[$n++] = null !== $item ? returnReason::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['session_id'])) {
            $model->sessionId = $map['session_id'];
        }
        if (isset($map['tips'])) {
            $model->tips = $map['tips'];
        }

        return $model;
    }
}
