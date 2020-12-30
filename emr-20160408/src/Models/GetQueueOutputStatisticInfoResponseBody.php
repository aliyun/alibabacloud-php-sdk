<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\GetQueueOutputStatisticInfoResponseBody\queueOutputList;
use AlibabaCloud\Tea\Model;

class GetQueueOutputStatisticInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var queueOutputList
     */
    public $queueOutputList;
    protected $_name = [
        'requestId'       => 'RequestId',
        'queueOutputList' => 'QueueOutputList',
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
        if (null !== $this->queueOutputList) {
            $res['QueueOutputList'] = null !== $this->queueOutputList ? $this->queueOutputList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQueueOutputStatisticInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['QueueOutputList'])) {
            $model->queueOutputList = queueOutputList::fromMap($map['QueueOutputList']);
        }

        return $model;
    }
}
