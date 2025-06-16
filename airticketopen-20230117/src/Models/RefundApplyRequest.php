<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundApplyRequest\refundJourneys;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundApplyRequest\refundPassengerList;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundApplyRequest\refundType;

class RefundApplyRequest extends Model
{
    /**
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
        'orderNum' => 'order_num',
        'refundJourneys' => 'refund_journeys',
        'refundPassengerList' => 'refund_passenger_list',
        'refundType' => 'refund_type',
    ];

    public function validate()
    {
        if (\is_array($this->refundJourneys)) {
            Model::validateArray($this->refundJourneys);
        }
        if (\is_array($this->refundPassengerList)) {
            Model::validateArray($this->refundPassengerList);
        }
        if (null !== $this->refundType) {
            $this->refundType->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderNum) {
            $res['order_num'] = $this->orderNum;
        }

        if (null !== $this->refundJourneys) {
            if (\is_array($this->refundJourneys)) {
                $res['refund_journeys'] = [];
                $n1 = 0;
                foreach ($this->refundJourneys as $item1) {
                    $res['refund_journeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->refundPassengerList) {
            if (\is_array($this->refundPassengerList)) {
                $res['refund_passenger_list'] = [];
                $n1 = 0;
                foreach ($this->refundPassengerList as $item1) {
                    $res['refund_passenger_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->refundType) {
            $res['refund_type'] = null !== $this->refundType ? $this->refundType->toArray($noStream) : $this->refundType;
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
        if (isset($map['order_num'])) {
            $model->orderNum = $map['order_num'];
        }

        if (isset($map['refund_journeys'])) {
            if (!empty($map['refund_journeys'])) {
                $model->refundJourneys = [];
                $n1 = 0;
                foreach ($map['refund_journeys'] as $item1) {
                    $model->refundJourneys[$n1] = refundJourneys::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['refund_passenger_list'])) {
            if (!empty($map['refund_passenger_list'])) {
                $model->refundPassengerList = [];
                $n1 = 0;
                foreach ($map['refund_passenger_list'] as $item1) {
                    $model->refundPassengerList[$n1] = refundPassengerList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['refund_type'])) {
            $model->refundType = refundType::fromMap($map['refund_type']);
        }

        return $model;
    }
}
