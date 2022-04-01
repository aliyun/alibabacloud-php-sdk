<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class StatefulAsyncInvocationEvent extends Model
{
    /**
     * @description 事件详细数据。
     *
     * @var string
     */
    public $eventDetail;

    /**
     * @description 事件ID。
     *
     * @var int
     */
    public $eventId;

    /**
     * @description 事件执行状态。
     *
     * @var string
     */
    public $status;

    /**
     * @description 事件时间。
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'eventDetail' => 'eventDetail',
        'eventId'     => 'eventId',
        'status'      => 'status',
        'timestamp'   => 'timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventDetail) {
            $res['eventDetail'] = $this->eventDetail;
        }
        if (null !== $this->eventId) {
            $res['eventId'] = $this->eventId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StatefulAsyncInvocationEvent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['eventDetail'])) {
            $model->eventDetail = $map['eventDetail'];
        }
        if (isset($map['eventId'])) {
            $model->eventId = $map['eventId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        return $model;
    }
}
