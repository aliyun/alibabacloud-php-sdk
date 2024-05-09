<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2Request\passengerSegmentRelations;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2Request\selectedSegments;
use AlibabaCloud\Tea\Model;

class FlightModifyListingSearchV2Request extends Model
{
    /**
     * @var int[]
     */
    public $cabinClass;

    /**
     * @var string[]
     */
    public $depDate;

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
     * @var passengerSegmentRelations[]
     */
    public $passengerSegmentRelations;

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
     * @var selectedSegments[]
     */
    public $selectedSegments;

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
        'cabinClass'                    => 'cabin_class',
        'depDate'                       => 'dep_date',
        'interfaceCallerIsSupportRetry' => 'interface_caller_is_support_retry',
        'isvName'                       => 'isv_name',
        'orderId'                       => 'order_id',
        'outOrderId'                    => 'out_order_id',
        'passengerSegmentRelations'     => 'passenger_segment_relations',
        'searchMode'                    => 'search_mode',
        'searchRetryToken'              => 'search_retry_token',
        'selectedSegments'              => 'selected_segments',
        'sessionId'                     => 'session_id',
        'voluntary'                     => 'voluntary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cabinClass) {
            $res['cabin_class'] = $this->cabinClass;
        }
        if (null !== $this->depDate) {
            $res['dep_date'] = $this->depDate;
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
        if (null !== $this->passengerSegmentRelations) {
            $res['passenger_segment_relations'] = [];
            if (null !== $this->passengerSegmentRelations && \is_array($this->passengerSegmentRelations)) {
                $n = 0;
                foreach ($this->passengerSegmentRelations as $item) {
                    $res['passenger_segment_relations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->searchMode) {
            $res['search_mode'] = $this->searchMode;
        }
        if (null !== $this->searchRetryToken) {
            $res['search_retry_token'] = $this->searchRetryToken;
        }
        if (null !== $this->selectedSegments) {
            $res['selected_segments'] = [];
            if (null !== $this->selectedSegments && \is_array($this->selectedSegments)) {
                $n = 0;
                foreach ($this->selectedSegments as $item) {
                    $res['selected_segments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return FlightModifyListingSearchV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cabin_class'])) {
            if (!empty($map['cabin_class'])) {
                $model->cabinClass = $map['cabin_class'];
            }
        }
        if (isset($map['dep_date'])) {
            if (!empty($map['dep_date'])) {
                $model->depDate = $map['dep_date'];
            }
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
            if (!empty($map['passenger_segment_relations'])) {
                $model->passengerSegmentRelations = [];
                $n                                = 0;
                foreach ($map['passenger_segment_relations'] as $item) {
                    $model->passengerSegmentRelations[$n++] = null !== $item ? passengerSegmentRelations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['search_mode'])) {
            $model->searchMode = $map['search_mode'];
        }
        if (isset($map['search_retry_token'])) {
            $model->searchRetryToken = $map['search_retry_token'];
        }
        if (isset($map['selected_segments'])) {
            if (!empty($map['selected_segments'])) {
                $model->selectedSegments = [];
                $n                       = 0;
                foreach ($map['selected_segments'] as $item) {
                    $model->selectedSegments[$n++] = null !== $item ? selectedSegments::fromMap($item) : $item;
                }
            }
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
