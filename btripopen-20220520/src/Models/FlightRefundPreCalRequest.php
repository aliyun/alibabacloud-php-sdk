<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalRequest\passengerSegmentInfoList;
use AlibabaCloud\Tea\Model;

class FlightRefundPreCalRequest extends Model
{
    /**
     * @example dis123
     *
     * @var string
     */
    public $disOrderId;

    /**
     * @example 1
     *
     * @var string
     */
    public $isVoluntary;

    /**
     * @var passengerSegmentInfoList[]
     */
    public $passengerSegmentInfoList;
    protected $_name = [
        'disOrderId'               => 'dis_order_id',
        'isVoluntary'              => 'is_voluntary',
        'passengerSegmentInfoList' => 'passenger_segment_info_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disOrderId) {
            $res['dis_order_id'] = $this->disOrderId;
        }
        if (null !== $this->isVoluntary) {
            $res['is_voluntary'] = $this->isVoluntary;
        }
        if (null !== $this->passengerSegmentInfoList) {
            $res['passenger_segment_info_list'] = [];
            if (null !== $this->passengerSegmentInfoList && \is_array($this->passengerSegmentInfoList)) {
                $n = 0;
                foreach ($this->passengerSegmentInfoList as $item) {
                    $res['passenger_segment_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FlightRefundPreCalRequest
     */
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
                $n                               = 0;
                foreach ($map['passenger_segment_info_list'] as $item) {
                    $model->passengerSegmentInfoList[$n++] = null !== $item ? passengerSegmentInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
