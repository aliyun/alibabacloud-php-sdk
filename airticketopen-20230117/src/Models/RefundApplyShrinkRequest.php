<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class RefundApplyShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $orderNum;

    /**
     * @var string
     */
    public $refundJourneysShrink;

    /**
     * @var string
     */
    public $refundPassengerListShrink;

    /**
     * @var string
     */
    public $refundTypeShrink;
    protected $_name = [
        'orderNum' => 'order_num',
        'refundJourneysShrink' => 'refund_journeys',
        'refundPassengerListShrink' => 'refund_passenger_list',
        'refundTypeShrink' => 'refund_type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderNum) {
            $res['order_num'] = $this->orderNum;
        }

        if (null !== $this->refundJourneysShrink) {
            $res['refund_journeys'] = $this->refundJourneysShrink;
        }

        if (null !== $this->refundPassengerListShrink) {
            $res['refund_passenger_list'] = $this->refundPassengerListShrink;
        }

        if (null !== $this->refundTypeShrink) {
            $res['refund_type'] = $this->refundTypeShrink;
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
            $model->refundJourneysShrink = $map['refund_journeys'];
        }

        if (isset($map['refund_passenger_list'])) {
            $model->refundPassengerListShrink = $map['refund_passenger_list'];
        }

        if (isset($map['refund_type'])) {
            $model->refundTypeShrink = $map['refund_type'];
        }

        return $model;
    }
}
