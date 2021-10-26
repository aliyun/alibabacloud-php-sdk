<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListQueuesResponseBody\queues;
use AlibabaCloud\Tea\Model;

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
        'queues'    => 'Queues',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queues) {
            $res['Queues'] = null !== $this->queues ? $this->queues->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQueuesResponseBody
     */
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
