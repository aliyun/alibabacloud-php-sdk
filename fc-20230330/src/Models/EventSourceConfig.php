<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class EventSourceConfig extends Model
{
    /**
     * @var EventSourceParameters
     */
    public $eventSourceParameters;

    /**
     * @var string
     */
    public $eventSourceType;
    protected $_name = [
        'eventSourceParameters' => 'eventSourceParameters',
        'eventSourceType' => 'eventSourceType',
    ];

    public function validate()
    {
        if (null !== $this->eventSourceParameters) {
            $this->eventSourceParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventSourceParameters) {
            $res['eventSourceParameters'] = null !== $this->eventSourceParameters ? $this->eventSourceParameters->toArray($noStream) : $this->eventSourceParameters;
        }

        if (null !== $this->eventSourceType) {
            $res['eventSourceType'] = $this->eventSourceType;
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
        if (isset($map['eventSourceParameters'])) {
            $model->eventSourceParameters = EventSourceParameters::fromMap($map['eventSourceParameters']);
        }

        if (isset($map['eventSourceType'])) {
            $model->eventSourceType = $map['eventSourceType'];
        }

        return $model;
    }
}
