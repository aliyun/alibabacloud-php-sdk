<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ARN of the event stream.
     *
     * @example acs:eventbridge:cn-hangzhou:164901546557****:eventstreaming/myeventstreaming
     *
     * @var string
     */
    public $eventStreamingARN;
    protected $_name = [
        'eventStreamingARN' => 'EventStreamingARN',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventStreamingARN) {
            $res['EventStreamingARN'] = $this->eventStreamingARN;
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
        if (isset($map['EventStreamingARN'])) {
            $model->eventStreamingARN = $map['EventStreamingARN'];
        }

        return $model;
    }
}
