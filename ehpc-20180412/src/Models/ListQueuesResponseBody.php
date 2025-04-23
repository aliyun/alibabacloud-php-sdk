<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListQueuesResponseBody\queues;

class ListQueuesResponseBody extends Model
{
    /**
     * @var queues
     */
    public $queues;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'queues' => 'Queues',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->queues) {
            $this->queues->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queues) {
            $res['Queues'] = null !== $this->queues ? $this->queues->toArray($noStream) : $this->queues;
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
        if (isset($map['Queues'])) {
            $model->queues = queues::fromMap($map['Queues']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
