<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\UsageReported\usageMap;

class UsageReported extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $usageId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var usageMap
     */
    public $usageMap;
    protected $_name = [
        'type' => 'type',
        'eventId' => 'event_id',
        'sessionId' => 'session_id',
        'usageId' => 'usage_id',
        'status' => 'status',
        'usageMap' => 'usageMap',
    ];

    public function validate()
    {
        if (null !== $this->usageMap) {
            $this->usageMap->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->eventId) {
            $res['event_id'] = $this->eventId;
        }

        if (null !== $this->sessionId) {
            $res['session_id'] = $this->sessionId;
        }

        if (null !== $this->usageId) {
            $res['usage_id'] = $this->usageId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->usageMap) {
            $res['usageMap'] = null !== $this->usageMap ? $this->usageMap->toArray($noStream) : $this->usageMap;
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['event_id'])) {
            $model->eventId = $map['event_id'];
        }

        if (isset($map['session_id'])) {
            $model->sessionId = $map['session_id'];
        }

        if (isset($map['usage_id'])) {
            $model->usageId = $map['usage_id'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['usageMap'])) {
            $model->usageMap = usageMap::fromMap($map['usageMap']);
        }

        return $model;
    }
}
