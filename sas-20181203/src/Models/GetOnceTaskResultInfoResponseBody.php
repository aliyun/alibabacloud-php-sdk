<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetOnceTaskResultInfoResponseBody\taskInfo;
use AlibabaCloud\Tea\Model;

class GetOnceTaskResultInfoResponseBody extends Model
{
    /**
     * @example 1671184531000
     *
     * @var int
     */
    public $collectTime;

    /**
     * @example 47
     *
     * @var int
     */
    public $finishCount;

    /**
     * @example CE500770-42D3-442E-9DDD-156E0F9F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example e7b70a4b030db086db52231f1b58****
     *
     * @var int
     */
    public $taskId;

    /**
     * @var taskInfo
     */
    public $taskInfo;

    /**
     * @example 44
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'collectTime' => 'CollectTime',
        'finishCount' => 'FinishCount',
        'requestId'   => 'RequestId',
        'taskId'      => 'TaskId',
        'taskInfo'    => 'TaskInfo',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collectTime) {
            $res['CollectTime'] = $this->collectTime;
        }
        if (null !== $this->finishCount) {
            $res['FinishCount'] = $this->finishCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskInfo) {
            $res['TaskInfo'] = null !== $this->taskInfo ? $this->taskInfo->toMap() : null;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOnceTaskResultInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CollectTime'])) {
            $model->collectTime = $map['CollectTime'];
        }
        if (isset($map['FinishCount'])) {
            $model->finishCount = $map['FinishCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskInfo'])) {
            $model->taskInfo = taskInfo::fromMap($map['TaskInfo']);
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
