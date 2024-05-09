<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class FlightModifyListingSearchV2ShrinkRequest extends Model
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
     * @var bool
     */
    public $interfaceCallerIsSupportRetry;

    /**
     * @example name
     *
     * @var string
     */
    public $isvName;

    /**
     * @example 1017002195370467138
     *
     * @var int
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
    public $searchMode;

    /**
     * @var string
     */
    public $searchRetryToken;

    /**
     * @var string
     */
    public $selectedSegmentsShrink;

    /**
     * @example a2ffebfe733742aab5c491d960ba3d59
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
        'interfaceCallerIsSupportRetry'   => 'interface_caller_is_support_retry',
        'isvName'                         => 'isv_name',
        'orderId'                         => 'order_id',
        'outOrderId'                      => 'out_order_id',
        'passengerSegmentRelationsShrink' => 'passenger_segment_relations',
        'searchMode'                      => 'search_mode',
        'searchRetryToken'                => 'search_retry_token',
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
        if (null !== $this->interfaceCallerIsSupportRetry) {
            $res['interface_caller_is_support_retry'] = $this->interfaceCallerIsSupportRetry;
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
        if (null !== $this->searchMode) {
            $res['search_mode'] = $this->searchMode;
        }
        if (null !== $this->searchRetryToken) {
            $res['search_retry_token'] = $this->searchRetryToken;
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
     * @return FlightModifyListingSearchV2ShrinkRequest
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
        if (isset($map['interface_caller_is_support_retry'])) {
            $model->interfaceCallerIsSupportRetry = $map['interface_caller_is_support_retry'];
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
        if (isset($map['search_mode'])) {
            $model->searchMode = $map['search_mode'];
        }
        if (isset($map['search_retry_token'])) {
            $model->searchRetryToken = $map['search_retry_token'];
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
