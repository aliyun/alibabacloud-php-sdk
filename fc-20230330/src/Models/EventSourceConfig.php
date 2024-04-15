<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class EventSourceConfig extends Model
{
    /**
     * @var EventSourceParameters
     */
    public $eventSourceParameters;

    /**
     * @example MNS
     *
     * @var string
     */
    public $eventSourceType;
    protected $_name = [
        'eventSourceParameters' => 'eventSourceParameters',
        'eventSourceType'       => 'eventSourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventSourceParameters) {
            $res['eventSourceParameters'] = null !== $this->eventSourceParameters ? $this->eventSourceParameters->toMap() : null;
        }
        if (null !== $this->eventSourceType) {
            $res['eventSourceType'] = $this->eventSourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EventSourceConfig
     */
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
