<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event;
use AlibabaCloud\Tea\Model;

class DescribeEventDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var event
     */
    public $event;
    protected $_name = [
        'requestId' => 'RequestId',
        'event'     => 'Event',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->event) {
            $res['Event'] = null !== $this->event ? $this->event->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Event'])) {
            $model->event = event::fromMap($map['Event']);
        }

        return $model;
    }
}
