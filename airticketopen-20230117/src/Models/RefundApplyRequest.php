<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundApplyRequest\refundJourneys;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundApplyRequest\refundPassengerList;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundApplyRequest\refundType;
use AlibabaCloud\Tea\Model;

class RefundApplyRequest extends Model
{
    /**
     * @example 4966***617111
     *
     * @var int
     */
    public $orderNum;

    /**
     * @var refundJourneys[]
     */
    public $refundJourneys;

    /**
     * @var refundPassengerList[]
     */
    public $refundPassengerList;

    /**
     * @var refundType
     */
    public $refundType;
    protected $_name = [
        'orderNum'            => 'order_num',
        'refundJourneys'      => 'refund_journeys',
        'refundPassengerList' => 'refund_passenger_list',
        'refundType'          => 'refund_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderNum) {
            $res['order_num'] = $this->orderNum;
        }
        if (null !== $this->refundJourneys) {
            $res['refund_journeys'] = [];
            if (null !== $this->refundJourneys && \is_array($this->refundJourneys)) {
                $n = 0;
                foreach ($this->refundJourneys as $item) {
                    $res['refund_journeys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->refundPassengerList) {
            $res['refund_passenger_list'] = [];
            if (null !== $this->refundPassengerList && \is_array($this->refundPassengerList)) {
                $n = 0;
                foreach ($this->refundPassengerList as $item) {
                    $res['refund_passenger_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->refundType) {
            $res['refund_type'] = null !== $this->refundType ? $this->refundType->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefundApplyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['order_num'])) {
            $model->orderNum = $map['order_num'];
        }
        if (isset($map['refund_journeys'])) {
            if (!empty($map['refund_journeys'])) {
                $model->refundJourneys = [];
                $n                     = 0;
                foreach ($map['refund_journeys'] as $item) {
                    $model->refundJourneys[$n++] = null !== $item ? refundJourneys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['refund_passenger_list'])) {
            if (!empty($map['refund_passenger_list'])) {
                $model->refundPassengerList = [];
                $n                          = 0;
                foreach ($map['refund_passenger_list'] as $item) {
                    $model->refundPassengerList[$n++] = null !== $item ? refundPassengerList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['refund_type'])) {
            $model->refundType = refundType::fromMap($map['refund_type']);
        }

        return $model;
    }
}
