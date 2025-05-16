<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetQueueResponseBody\queue;

class GetQueueResponseBody extends Model
{
    /**
     * @var queue
     */
    public $queue;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'queue' => 'Queue',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->queue) {
            $this->queue->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queue) {
            $res['Queue'] = null !== $this->queue ? $this->queue->toArray($noStream) : $this->queue;
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
        if (isset($map['Queue'])) {
            $model->queue = queue::fromMap($map['Queue']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
