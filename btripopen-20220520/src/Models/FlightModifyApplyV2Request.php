<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyApplyV2Request\passengerSegmentRelations;

class FlightModifyApplyV2Request extends Model
{
    /**
     * @var string
     */
    public $cacheKey;

    /**
     * @var string
     */
    public $contactPhone;

    /**
     * @var string
     */
    public $isvName;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $outOrderId;

    /**
     * @var string
     */
    public $outSubOrderId;

    /**
     * @var passengerSegmentRelations[]
     */
    public $passengerSegmentRelations;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var bool
     */
    public $voluntary;
    protected $_name = [
        'cacheKey' => 'cache_key',
        'contactPhone' => 'contact_phone',
        'isvName' => 'isv_name',
        'itemId' => 'item_id',
        'orderId' => 'order_id',
        'outOrderId' => 'out_order_id',
        'outSubOrderId' => 'out_sub_order_id',
        'passengerSegmentRelations' => 'passenger_segment_relations',
        'reason' => 'reason',
        'sessionId' => 'session_id',
        'voluntary' => 'voluntary',
    ];

    public function validate()
    {
        if (\is_array($this->passengerSegmentRelations)) {
            Model::validateArray($this->passengerSegmentRelations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cacheKey) {
            $res['cache_key'] = $this->cacheKey;
        }

        if (null !== $this->contactPhone) {
            $res['contact_phone'] = $this->contactPhone;
        }

        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
        }

        if (null !== $this->itemId) {
            $res['item_id'] = $this->itemId;
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }

        if (null !== $this->outSubOrderId) {
            $res['out_sub_order_id'] = $this->outSubOrderId;
        }

        if (null !== $this->passengerSegmentRelations) {
            if (\is_array($this->passengerSegmentRelations)) {
                $res['passenger_segment_relations'] = [];
                $n1 = 0;
                foreach ($this->passengerSegmentRelations as $item1) {
                    $res['passenger_segment_relations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
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
        if (isset($map['cache_key'])) {
            $model->cacheKey = $map['cache_key'];
        }

        if (isset($map['contact_phone'])) {
            $model->contactPhone = $map['contact_phone'];
        }

        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
        }

        if (isset($map['item_id'])) {
            $model->itemId = $map['item_id'];
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }

        if (isset($map['out_sub_order_id'])) {
            $model->outSubOrderId = $map['out_sub_order_id'];
        }

        if (isset($map['passenger_segment_relations'])) {
            if (!empty($map['passenger_segment_relations'])) {
                $model->passengerSegmentRelations = [];
                $n1 = 0;
                foreach ($map['passenger_segment_relations'] as $item1) {
                    $model->passengerSegmentRelations[$n1++] = passengerSegmentRelations::fromMap($item1);
                }
            }
        }

        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
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
