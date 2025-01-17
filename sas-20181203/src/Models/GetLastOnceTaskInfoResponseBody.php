<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetLastOnceTaskInfoResponseBody\taskInfo;

class GetLastOnceTaskInfoResponseBody extends Model
{
    /**
     * @var int
     */
    public $collectTime;
    /**
     * @var int
     */
    public $finishCount;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $taskId;
    /**
     * @var taskInfo
     */
    public $taskInfo;
    /**
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
        if (null !== $this->taskInfo) {
            $this->taskInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['TaskInfo'] = null !== $this->taskInfo ? $this->taskInfo->toArray($noStream) : $this->taskInfo;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
