<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceInspectionRunsResponseBody\data;

use AlibabaCloud\Dara\Model;

class notification extends Model
{
    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'eventId' => 'eventId',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['eventId'] = $this->eventId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['eventId'])) {
            $model->eventId = $map['eventId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
