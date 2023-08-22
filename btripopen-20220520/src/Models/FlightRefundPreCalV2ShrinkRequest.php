<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class FlightRefundPreCalV2ShrinkRequest extends Model
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
     * @var string
     */
    public $passengerSegmentRelationsShrink;

    /**
     * @example 2
     *
     * @var int
     */
    public $preCalType;

    /**
     * @var string
     */
    public $ticketNosShrink;

    /**
     * @example true
     *
     * @var bool
     */
    public $voluntary;
    protected $_name = [
        'isvName'                         => 'isv_name',
        'orderId'                         => 'order_id',
        'outOrderId'                      => 'out_order_id',
        'passengerSegmentRelationsShrink' => 'passenger_segment_relations',
        'preCalType'                      => 'pre_cal_type',
        'ticketNosShrink'                 => 'ticket_nos',
        'voluntary'                       => 'voluntary',
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
        if (null !== $this->passengerSegmentRelationsShrink) {
            $res['passenger_segment_relations'] = $this->passengerSegmentRelationsShrink;
        }
        if (null !== $this->preCalType) {
            $res['pre_cal_type'] = $this->preCalType;
        }
        if (null !== $this->ticketNosShrink) {
            $res['ticket_nos'] = $this->ticketNosShrink;
        }
        if (null !== $this->voluntary) {
            $res['voluntary'] = $this->voluntary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FlightRefundPreCalV2ShrinkRequest
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
            $model->passengerSegmentRelationsShrink = $map['passenger_segment_relations'];
        }
        if (isset($map['pre_cal_type'])) {
            $model->preCalType = $map['pre_cal_type'];
        }
        if (isset($map['ticket_nos'])) {
            $model->ticketNosShrink = $map['ticket_nos'];
        }
        if (isset($map['voluntary'])) {
            $model->voluntary = $map['voluntary'];
        }

        return $model;
    }
}
