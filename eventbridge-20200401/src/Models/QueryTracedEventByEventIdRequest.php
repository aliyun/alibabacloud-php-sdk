<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class QueryTracedEventByEventIdRequest extends Model
{
    /**
     * @description The name of the event bus.
     *
     * This parameter is required.
     * @example demo
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @description The event ID.
     *
     * This parameter is required.
     * @example 1935debf-ddac-49dc-a090-d4f2857a046d
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The name of the event source.
     *
     * @example mse
     *
     * @var string
     */
    public $eventSource;
    protected $_name = [
        'eventBusName' => 'EventBusName',
        'eventId'      => 'EventId',
        'eventSource'  => 'EventSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventSource) {
            $res['EventSource'] = $this->eventSource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTracedEventByEventIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventSource'])) {
            $model->eventSource = $map['EventSource'];
        }

        return $model;
    }
}
