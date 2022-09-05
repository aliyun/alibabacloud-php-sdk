<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail;
use AlibabaCloud\Tea\Model;

class GetSyntheticTaskDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var taskDetail
     */
    public $taskDetail;
    protected $_name = [
        'requestId'  => 'RequestId',
        'taskDetail' => 'TaskDetail',
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
        if (null !== $this->taskDetail) {
            $res['TaskDetail'] = null !== $this->taskDetail ? $this->taskDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSyntheticTaskDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskDetail'])) {
            $model->taskDetail = taskDetail::fromMap($map['TaskDetail']);
        }

        return $model;
    }
}
