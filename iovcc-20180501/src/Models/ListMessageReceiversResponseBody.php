<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMessageReceiversResponseBody\messageReceivers;
use AlibabaCloud\Tea\Model;

class ListMessageReceiversResponseBody extends Model
{
    /**
     * @var messageReceivers
     */
    public $messageReceivers;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'messageReceivers' => 'MessageReceivers',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->messageReceivers) {
            $res['MessageReceivers'] = null !== $this->messageReceivers ? $this->messageReceivers->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MessageReceivers'])) {
            $model->messageReceivers = messageReceivers::fromMap($map['MessageReceivers']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
