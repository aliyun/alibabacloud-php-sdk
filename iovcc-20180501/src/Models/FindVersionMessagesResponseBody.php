<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionMessagesResponseBody\messageList;
use AlibabaCloud\Tea\Model;

class FindVersionMessagesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var messageList
     */
    public $messageList;
    protected $_name = [
        'requestId'   => 'RequestId',
        'messageList' => 'MessageList',
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
        if (null !== $this->messageList) {
            $res['MessageList'] = null !== $this->messageList ? $this->messageList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindVersionMessagesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MessageList'])) {
            $model->messageList = messageList::fromMap($map['MessageList']);
        }

        return $model;
    }
}
