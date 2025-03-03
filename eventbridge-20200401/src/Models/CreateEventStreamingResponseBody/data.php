<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $eventStreamingARN;
    protected $_name = [
        'eventStreamingARN' => 'EventStreamingARN',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventStreamingARN) {
            $res['EventStreamingARN'] = $this->eventStreamingARN;
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
        if (isset($map['EventStreamingARN'])) {
            $model->eventStreamingARN = $map['EventStreamingARN'];
        }

        return $model;
    }
}
