<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalRequest\passengerSegmentInfoList;

class FlightRefundPreCalRequest extends Model
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
     * @var passengerSegmentInfoList[]
     */
    public $passengerSegmentInfoList;
    protected $_name = [
        'disOrderId' => 'dis_order_id',
        'isVoluntary' => 'is_voluntary',
        'passengerSegmentInfoList' => 'passenger_segment_info_list',
    ];

    public function validate()
    {
        if (\is_array($this->passengerSegmentInfoList)) {
            Model::validateArray($this->passengerSegmentInfoList);
        }
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

        if (null !== $this->passengerSegmentInfoList) {
            if (\is_array($this->passengerSegmentInfoList)) {
                $res['passenger_segment_info_list'] = [];
                $n1 = 0;
                foreach ($this->passengerSegmentInfoList as $item1) {
                    $res['passenger_segment_info_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['passenger_segment_info_list'])) {
                $model->passengerSegmentInfoList = [];
                $n1 = 0;
                foreach ($map['passenger_segment_info_list'] as $item1) {
                    $model->passengerSegmentInfoList[$n1] = passengerSegmentInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
