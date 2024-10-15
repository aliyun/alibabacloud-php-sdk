<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class CooperatorHotelEventPushRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 11
     *
     * @var int
     */
    public $changeOrderStatus;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $changeOrderStatusDesc;

    /**
     * @description This parameter is required.
     *
     * @example coop_123456
     *
     * @var string
     */
    public $cooperatorOrderId;

    /**
     * @description This parameter is required.
     *
     * @example USER_LEAVE
     *
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $eventDesc;

    /**
     * @description This parameter is required.
     *
     * @example 204-09-01 10:55:20
     *
     * @var string
     */
    public $eventTime;

    /**
     * @description This parameter is required.
     *
     * @example 123456
     *
     * @var string
     */
    public $orderId;
    protected $_name = [
        'changeOrderStatus'     => 'change_order_status',
        'changeOrderStatusDesc' => 'change_order_status_desc',
        'cooperatorOrderId'     => 'cooperator_order_id',
        'event'                 => 'event',
        'eventDesc'             => 'event_desc',
        'eventTime'             => 'event_time',
        'orderId'               => 'order_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeOrderStatus) {
            $res['change_order_status'] = $this->changeOrderStatus;
        }
        if (null !== $this->changeOrderStatusDesc) {
            $res['change_order_status_desc'] = $this->changeOrderStatusDesc;
        }
        if (null !== $this->cooperatorOrderId) {
            $res['cooperator_order_id'] = $this->cooperatorOrderId;
        }
        if (null !== $this->event) {
            $res['event'] = $this->event;
        }
        if (null !== $this->eventDesc) {
            $res['event_desc'] = $this->eventDesc;
        }
        if (null !== $this->eventTime) {
            $res['event_time'] = $this->eventTime;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CooperatorHotelEventPushRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['change_order_status'])) {
            $model->changeOrderStatus = $map['change_order_status'];
        }
        if (isset($map['change_order_status_desc'])) {
            $model->changeOrderStatusDesc = $map['change_order_status_desc'];
        }
        if (isset($map['cooperator_order_id'])) {
            $model->cooperatorOrderId = $map['cooperator_order_id'];
        }
        if (isset($map['event'])) {
            $model->event = $map['event'];
        }
        if (isset($map['event_desc'])) {
            $model->eventDesc = $map['event_desc'];
        }
        if (isset($map['event_time'])) {
            $model->eventTime = $map['event_time'];
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        return $model;
    }
}
