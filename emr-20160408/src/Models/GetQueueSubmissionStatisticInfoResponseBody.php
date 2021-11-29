<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\GetQueueSubmissionStatisticInfoResponseBody\queueSubmissionList;
use AlibabaCloud\Tea\Model;

class GetQueueSubmissionStatisticInfoResponseBody extends Model
{
    /**
     * @var queueSubmissionList
     */
    public $queueSubmissionList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'queueSubmissionList' => 'QueueSubmissionList',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queueSubmissionList) {
            $res['QueueSubmissionList'] = null !== $this->queueSubmissionList ? $this->queueSubmissionList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQueueSubmissionStatisticInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QueueSubmissionList'])) {
            $model->queueSubmissionList = queueSubmissionList::fromMap($map['QueueSubmissionList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
