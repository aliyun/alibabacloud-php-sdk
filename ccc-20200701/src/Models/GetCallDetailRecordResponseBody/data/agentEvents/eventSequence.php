<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\agentEvents;

use AlibabaCloud\Tea\Model;

class eventSequence extends Model
{
    /**
     * @example 3
     *
     * @var int
     */
    public $duration;

    /**
     * @example Dialing
     *
     * @var string
     */
    public $event;

    /**
     * @example 1604639129000
     *
     * @var int
     */
    public $eventTime;
    protected $_name = [
        'duration' => 'Duration',
        'event' => 'Event',
        'eventTime' => 'EventTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventSequence
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }

        return $model;
    }
}
