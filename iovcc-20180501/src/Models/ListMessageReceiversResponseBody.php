<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMessageReceiversResponseBody\messageReceivers;
use AlibabaCloud\Tea\Model;

class ListMessageReceiversResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var messageReceivers
     */
    public $messageReceivers;
    protected $_name = [
        'requestId'        => 'RequestId',
        'messageReceivers' => 'MessageReceivers',
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
        if (null !== $this->messageReceivers) {
            $res['MessageReceivers'] = null !== $this->messageReceivers ? $this->messageReceivers->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMessageReceiversResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MessageReceivers'])) {
            $model->messageReceivers = messageReceivers::fromMap($map['MessageReceivers']);
        }

        return $model;
    }
}
