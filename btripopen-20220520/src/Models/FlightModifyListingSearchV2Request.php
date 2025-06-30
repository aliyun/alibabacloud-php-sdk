<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2Request\passengerSegmentRelations;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2Request\selectedSegments;

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
     * @var string
     */
    public $isvName;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $outOrderId;

    /**
     * @var passengerSegmentRelations[]
     */
    public $passengerSegmentRelations;

    /**
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
     * @var string
     */
    public $sessionId;

    /**
     * @var bool
     */
    public $voluntary;
    protected $_name = [
        'cabinClass' => 'cabin_class',
        'depDate' => 'dep_date',
        'interfaceCallerIsSupportRetry' => 'interface_caller_is_support_retry',
        'isvName' => 'isv_name',
        'orderId' => 'order_id',
        'outOrderId' => 'out_order_id',
        'passengerSegmentRelations' => 'passenger_segment_relations',
        'searchMode' => 'search_mode',
        'searchRetryToken' => 'search_retry_token',
        'selectedSegments' => 'selected_segments',
        'sessionId' => 'session_id',
        'voluntary' => 'voluntary',
    ];

    public function validate()
    {
        if (\is_array($this->cabinClass)) {
            Model::validateArray($this->cabinClass);
        }
        if (\is_array($this->depDate)) {
            Model::validateArray($this->depDate);
        }
        if (\is_array($this->passengerSegmentRelations)) {
            Model::validateArray($this->passengerSegmentRelations);
        }
        if (\is_array($this->selectedSegments)) {
            Model::validateArray($this->selectedSegments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cabinClass) {
            if (\is_array($this->cabinClass)) {
                $res['cabin_class'] = [];
                $n1 = 0;
                foreach ($this->cabinClass as $item1) {
                    $res['cabin_class'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->depDate) {
            if (\is_array($this->depDate)) {
                $res['dep_date'] = [];
                $n1 = 0;
                foreach ($this->depDate as $item1) {
                    $res['dep_date'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->passengerSegmentRelations)) {
                $res['passenger_segment_relations'] = [];
                $n1 = 0;
                foreach ($this->passengerSegmentRelations as $item1) {
                    $res['passenger_segment_relations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->selectedSegments)) {
                $res['selected_segments'] = [];
                $n1 = 0;
                foreach ($this->selectedSegments as $item1) {
                    $res['selected_segments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cabin_class'])) {
            if (!empty($map['cabin_class'])) {
                $model->cabinClass = [];
                $n1 = 0;
                foreach ($map['cabin_class'] as $item1) {
                    $model->cabinClass[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['dep_date'])) {
            if (!empty($map['dep_date'])) {
                $model->depDate = [];
                $n1 = 0;
                foreach ($map['dep_date'] as $item1) {
                    $model->depDate[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['passenger_segment_relations'] as $item1) {
                    $model->passengerSegmentRelations[$n1] = passengerSegmentRelations::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['selected_segments'] as $item1) {
                    $model->selectedSegments[$n1] = selectedSegments::fromMap($item1);
                    ++$n1;
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
