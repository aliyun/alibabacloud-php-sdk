<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListEventsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListEventsResponseBody\items\data;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListEventsResponseBody\items\scope;

class items extends Model
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
    public $receivedAt;

    /**
     * @var scope
     */
    public $scope;

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
        'receivedAt' => 'receivedAt',
        'scope' => 'scope',
        'timestamp' => 'timestamp',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->data) {
            $this->data->validate();
        }
        if (null !== $this->scope) {
            $this->scope->validate();
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

        if (null !== $this->receivedAt) {
            $res['receivedAt'] = $this->receivedAt;
        }

        if (null !== $this->scope) {
            $res['scope'] = null !== $this->scope ? $this->scope->toArray($noStream) : $this->scope;
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

        if (isset($map['receivedAt'])) {
            $model->receivedAt = $map['receivedAt'];
        }

        if (isset($map['scope'])) {
            $model->scope = scope::fromMap($map['scope']);
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
