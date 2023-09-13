<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventSourceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ARN of the event source.
     *
     * @example acs:eventbridge:cn-hangzhou:164901546557****:eventbus/my-event-bus/eventsource/mymns.source
     *
     * @var string
     */
    public $eventSourceARN;
    protected $_name = [
        'eventSourceARN' => 'EventSourceARN',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventSourceARN) {
            $res['EventSourceARN'] = $this->eventSourceARN;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventSourceARN'])) {
            $model->eventSourceARN = $map['EventSourceARN'];
        }

        return $model;
    }
}
