<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionMessageSendRecordsResponseBody\messageSendRecordList;
use AlibabaCloud\Tea\Model;

class FindVersionMessageSendRecordsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var messageSendRecordList
     */
    public $messageSendRecordList;
    protected $_name = [
        'requestId'             => 'RequestId',
        'messageSendRecordList' => 'MessageSendRecordList',
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
        if (null !== $this->messageSendRecordList) {
            $res['MessageSendRecordList'] = null !== $this->messageSendRecordList ? $this->messageSendRecordList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindVersionMessageSendRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MessageSendRecordList'])) {
            $model->messageSendRecordList = messageSendRecordList::fromMap($map['MessageSendRecordList']);
        }

        return $model;
    }
}
