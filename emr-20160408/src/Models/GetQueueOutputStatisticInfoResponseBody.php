<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\GetQueueOutputStatisticInfoResponseBody\queueOutputList;
use AlibabaCloud\Tea\Model;

class GetQueueOutputStatisticInfoResponseBody extends Model
{
    /**
     * @var queueOutputList
     */
    public $queueOutputList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'queueOutputList' => 'QueueOutputList',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queueOutputList) {
            $res['QueueOutputList'] = null !== $this->queueOutputList ? $this->queueOutputList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['QueueOutputList'])) {
            $model->queueOutputList = queueOutputList::fromMap($map['QueueOutputList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
