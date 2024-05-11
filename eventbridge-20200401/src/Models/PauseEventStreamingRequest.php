<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class PauseEventStreamingRequest extends Model
{
    /**
     * @description The name of the event stream that you want to stop.
     *
     * This parameter is required.
     * @example rocketmq-sync
     *
     * @var string
     */
    public $eventStreamingName;
    protected $_name = [
        'eventStreamingName' => 'EventStreamingName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventStreamingName) {
            $res['EventStreamingName'] = $this->eventStreamingName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PauseEventStreamingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventStreamingName'])) {
            $model->eventStreamingName = $map['EventStreamingName'];
        }

        return $model;
    }
}
