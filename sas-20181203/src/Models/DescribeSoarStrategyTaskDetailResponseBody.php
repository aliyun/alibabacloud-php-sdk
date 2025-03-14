<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSoarStrategyTaskDetailResponseBody\taskDetail;
use AlibabaCloud\Tea\Model;

class DescribeSoarStrategyTaskDetailResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example FBBEB173-1F43-505F-A876-C03ECDF6CE4C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the task.
     *
     * @var taskDetail
     */
    public $taskDetail;
    protected $_name = [
        'requestId' => 'RequestId',
        'taskDetail' => 'TaskDetail',
    ];

    public function validate() {}

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
     * @return DescribeSoarStrategyTaskDetailResponseBody
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
