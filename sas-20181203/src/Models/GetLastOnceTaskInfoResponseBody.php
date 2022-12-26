<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetLastOnceTaskInfoResponseBody\taskInfo;
use AlibabaCloud\Tea\Model;

class GetLastOnceTaskInfoResponseBody extends Model
{
    /**
     * @example 1671184531000
     *
     * @var int
     */
    public $collectTime;

    /**
     * @example 67
     *
     * @var int
     */
    public $finishCount;

    /**
     * @example BE120DAB-F4E7-4C53-ADC3-A97578AB****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 3f65e1f1bb13118891a889d569a3****
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
     * @return GetLastOnceTaskInfoResponseBody
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
