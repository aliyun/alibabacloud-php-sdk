<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalV2Request\passengerSegmentRelations;
use AlibabaCloud\Tea\Model;

class FlightRefundPreCalV2Request extends Model
{
    /**
     * @example cheshiapi
     *
     * @var string
     */
    public $isvName;

    /**
     * @example 3454043907950204159
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 1017002195370467137
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @var passengerSegmentRelations[]
     */
    public $passengerSegmentRelations;

    /**
     * @example 2
     *
     * @var int
     */
    public $preCalType;

    /**
     * @var string[]
     */
    public $ticketNos;

    /**
     * @example true
     *
     * @var bool
     */
    public $voluntary;
    protected $_name = [
        'isvName'                   => 'isv_name',
        'orderId'                   => 'order_id',
        'outOrderId'                => 'out_order_id',
        'passengerSegmentRelations' => 'passenger_segment_relations',
        'preCalType'                => 'pre_cal_type',
        'ticketNos'                 => 'ticket_nos',
        'voluntary'                 => 'voluntary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }
        if (null !== $this->passengerSegmentRelations) {
            $res['passenger_segment_relations'] = [];
            if (null !== $this->passengerSegmentRelations && \is_array($this->passengerSegmentRelations)) {
                $n = 0;
                foreach ($this->passengerSegmentRelations as $item) {
                    $res['passenger_segment_relations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->preCalType) {
            $res['pre_cal_type'] = $this->preCalType;
        }
        if (null !== $this->ticketNos) {
            $res['ticket_nos'] = $this->ticketNos;
        }
        if (null !== $this->voluntary) {
            $res['voluntary'] = $this->voluntary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FlightRefundPreCalV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }
        if (isset($map['passenger_segment_relations'])) {
            if (!empty($map['passenger_segment_relations'])) {
                $model->passengerSegmentRelations = [];
                $n                                = 0;
                foreach ($map['passenger_segment_relations'] as $item) {
                    $model->passengerSegmentRelations[$n++] = null !== $item ? passengerSegmentRelations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['pre_cal_type'])) {
            $model->preCalType = $map['pre_cal_type'];
        }
        if (isset($map['ticket_nos'])) {
            if (!empty($map['ticket_nos'])) {
                $model->ticketNos = $map['ticket_nos'];
            }
        }
        if (isset($map['voluntary'])) {
            $model->voluntary = $map['voluntary'];
        }

        return $model;
    }
}
