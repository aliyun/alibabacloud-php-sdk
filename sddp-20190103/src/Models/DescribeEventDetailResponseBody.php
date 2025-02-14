<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event;

class DescribeEventDetailResponseBody extends Model
{
    /**
     * @var event
     */
    public $event;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'event'     => 'Event',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->event) {
            $this->event->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->event) {
            $res['Event'] = null !== $this->event ? $this->event->toArray($noStream) : $this->event;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Event'])) {
            $model->event = event::fromMap($map['Event']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
