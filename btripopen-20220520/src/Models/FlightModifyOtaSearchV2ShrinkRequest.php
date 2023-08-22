<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class FlightModifyOtaSearchV2ShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $cabinClassShrink;

    /**
     * @var string
     */
    public $depDateShrink;

    /**
     * @example name
     *
     * @var string
     */
    public $isvName;

    /**
     * @example 1017002195370467200
     *
     * @var int
     */
    public $orderId;

    /**
     * @example 1017002195370467200
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @var string
     */
    public $passengerSegmentRelationsShrink;

    /**
     * @var string
     */
    public $selectedSegmentsShrink;

    /**
     * @example 590f17eca9374f20ac7e8ed8a7db2f35
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example true
     *
     * @var bool
     */
    public $voluntary;
    protected $_name = [
        'cabinClassShrink'                => 'cabin_class',
        'depDateShrink'                   => 'dep_date',
        'isvName'                         => 'isv_name',
        'orderId'                         => 'order_id',
        'outOrderId'                      => 'out_order_id',
        'passengerSegmentRelationsShrink' => 'passenger_segment_relations',
        'selectedSegmentsShrink'          => 'selected_segments',
        'sessionId'                       => 'session_id',
        'voluntary'                       => 'voluntary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cabinClassShrink) {
            $res['cabin_class'] = $this->cabinClassShrink;
        }
        if (null !== $this->depDateShrink) {
            $res['dep_date'] = $this->depDateShrink;
        }
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
        if (null !== $this->selectedSegmentsShrink) {
            $res['selected_segments'] = $this->selectedSegmentsShrink;
        }
        if (null !== $this->sessionId) {
            $res['session_id'] = $this->sessionId;
        }
        if (null !== $this->voluntary) {
            $res['voluntary'] = $this->voluntary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FlightModifyOtaSearchV2ShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cabin_class'])) {
            $model->cabinClassShrink = $map['cabin_class'];
        }
        if (isset($map['dep_date'])) {
            $model->depDateShrink = $map['dep_date'];
        }
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
        if (isset($map['selected_segments'])) {
            $model->selectedSegmentsShrink = $map['selected_segments'];
        }
        if (isset($map['session_id'])) {
            $model->sessionId = $map['session_id'];
        }
        if (isset($map['voluntary'])) {
            $model->voluntary = $map['voluntary'];
        }

        return $model;
    }
}
