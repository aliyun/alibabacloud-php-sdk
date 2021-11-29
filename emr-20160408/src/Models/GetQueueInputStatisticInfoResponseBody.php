<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\GetQueueInputStatisticInfoResponseBody\queueInputList;
use AlibabaCloud\Tea\Model;

class GetQueueInputStatisticInfoResponseBody extends Model
{
    /**
     * @var queueInputList
     */
    public $queueInputList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'queueInputList' => 'QueueInputList',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queueInputList) {
            $res['QueueInputList'] = null !== $this->queueInputList ? $this->queueInputList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQueueInputStatisticInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QueueInputList'])) {
            $model->queueInputList = queueInputList::fromMap($map['QueueInputList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
