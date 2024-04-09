<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class DeleteEventSourceRequest extends Model
{
    /**
     * @var string
     */
    public $eventBusName;

    /**
     * @description The name of the event source.
     *
     * @example myrabbitmq.source
     *
     * @var string
     */
    public $eventSourceName;
    protected $_name = [
        'eventBusName'    => 'EventBusName',
        'eventSourceName' => 'EventSourceName',
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
        if (null !== $this->eventSourceName) {
            $res['EventSourceName'] = $this->eventSourceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEventSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }
        if (isset($map['EventSourceName'])) {
            $model->eventSourceName = $map['EventSourceName'];
        }

        return $model;
    }
}
