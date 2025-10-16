<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateMemoryEventRequest;

use AlibabaCloud\Dara\Model;

class events extends Model
{
    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string[][]
     */
    public $message;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'eventId' => 'eventId',
        'message' => 'message',
        'metadata' => 'metadata',
        'sessionId' => 'sessionId',
        'userId' => 'userId',
    ];

    public function validate()
    {
        if (\is_array($this->message)) {
            Model::validateArray($this->message);
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['eventId'] = $this->eventId;
        }

        if (null !== $this->message) {
            if (\is_array($this->message)) {
                $res['message'] = [];
                $n1 = 0;
                foreach ($this->message as $item1) {
                    if (\is_array($item1)) {
                        $res['message'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['message'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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

        if (isset($map['message'])) {
            if (!empty($map['message'])) {
                $model->message = [];
                $n1 = 0;
                foreach ($map['message'] as $item1) {
                    if (!empty($item1)) {
                        $model->message[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->message[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                foreach ($map['metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
