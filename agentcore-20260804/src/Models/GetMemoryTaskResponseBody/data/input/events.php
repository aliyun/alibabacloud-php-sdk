<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMemoryTaskResponseBody\data\input;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMemoryTaskResponseBody\data\input\events\data;

class events extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'data' => 'data',
        'eventId' => 'eventId',
        'timestamp' => 'timestamp',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->data) {
            $this->data->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
        }

        if (null !== $this->eventId) {
            $res['eventId'] = $this->eventId;
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }

        if (isset($map['eventId'])) {
            $model->eventId = $map['eventId'];
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
