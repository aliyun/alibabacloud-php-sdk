<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class AsyncTaskEvent extends Model
{
    /**
     * @var string
     */
    public $eventDetail;
    /**
     * @var int
     */
    public $eventId;
    /**
     * @var string
     */
    public $status;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
