<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateEventsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateEventsResponseBody\data\results\error;

class results extends Model
{
    /**
     * @var error
     */
    public $error;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var int
     */
    public $receivedAt;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'error' => 'error',
        'eventId' => 'eventId',
        'receivedAt' => 'receivedAt',
        'status' => 'status',
    ];

    public function validate()
    {
        if (null !== $this->error) {
            $this->error->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->error) {
            $res['error'] = null !== $this->error ? $this->error->toArray($noStream) : $this->error;
        }

        if (null !== $this->eventId) {
            $res['eventId'] = $this->eventId;
        }

        if (null !== $this->receivedAt) {
            $res['receivedAt'] = $this->receivedAt;
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
        if (isset($map['error'])) {
            $model->error = error::fromMap($map['error']);
        }

        if (isset($map['eventId'])) {
            $model->eventId = $map['eventId'];
        }

        if (isset($map['receivedAt'])) {
            $model->receivedAt = $map['receivedAt'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
