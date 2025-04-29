<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class FlightRefundPreCalShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $disOrderId;

    /**
     * @var string
     */
    public $isVoluntary;

    /**
     * @var string
     */
    public $passengerSegmentInfoListShrink;
    protected $_name = [
        'disOrderId' => 'dis_order_id',
        'isVoluntary' => 'is_voluntary',
        'passengerSegmentInfoListShrink' => 'passenger_segment_info_list',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disOrderId) {
            $res['dis_order_id'] = $this->disOrderId;
        }

        if (null !== $this->isVoluntary) {
            $res['is_voluntary'] = $this->isVoluntary;
        }

        if (null !== $this->passengerSegmentInfoListShrink) {
            $res['passenger_segment_info_list'] = $this->passengerSegmentInfoListShrink;
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
        if (isset($map['dis_order_id'])) {
            $model->disOrderId = $map['dis_order_id'];
        }

        if (isset($map['is_voluntary'])) {
            $model->isVoluntary = $map['is_voluntary'];
        }

        if (isset($map['passenger_segment_info_list'])) {
            $model->passengerSegmentInfoListShrink = $map['passenger_segment_info_list'];
        }

        return $model;
    }
}
