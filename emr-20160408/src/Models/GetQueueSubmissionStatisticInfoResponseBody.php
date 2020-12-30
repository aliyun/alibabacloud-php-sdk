<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\GetQueueSubmissionStatisticInfoResponseBody\queueSubmissionList;
use AlibabaCloud\Tea\Model;

class GetQueueSubmissionStatisticInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var queueSubmissionList
     */
    public $queueSubmissionList;
    protected $_name = [
        'requestId'           => 'RequestId',
        'queueSubmissionList' => 'QueueSubmissionList',
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
        if (null !== $this->queueSubmissionList) {
            $res['QueueSubmissionList'] = null !== $this->queueSubmissionList ? $this->queueSubmissionList->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['QueueSubmissionList'])) {
            $model->queueSubmissionList = queueSubmissionList::fromMap($map['QueueSubmissionList']);
        }

        return $model;
    }
}
