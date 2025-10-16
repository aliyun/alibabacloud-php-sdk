<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAccessInstanceTaskResponseBody\taskSteps;

class DescribeAccessInstanceTaskResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isFound;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $taskFinishTimestamp;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $taskStartTimestamp;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var taskSteps[]
     */
    public $taskSteps;
    protected $_name = [
        'isFound' => 'IsFound',
        'requestId' => 'RequestId',
        'taskFinishTimestamp' => 'TaskFinishTimestamp',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
        'taskStartTimestamp' => 'TaskStartTimestamp',
        'taskStatus' => 'TaskStatus',
        'taskSteps' => 'TaskSteps',
    ];

    public function validate()
    {
        if (\is_array($this->taskSteps)) {
            Model::validateArray($this->taskSteps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isFound) {
            $res['IsFound'] = $this->isFound;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->taskFinishTimestamp) {
            $res['TaskFinishTimestamp'] = $this->taskFinishTimestamp;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskStartTimestamp) {
            $res['TaskStartTimestamp'] = $this->taskStartTimestamp;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->taskSteps) {
            if (\is_array($this->taskSteps)) {
                $res['TaskSteps'] = [];
                $n1 = 0;
                foreach ($this->taskSteps as $item1) {
                    $res['TaskSteps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['IsFound'])) {
            $model->isFound = $map['IsFound'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TaskFinishTimestamp'])) {
            $model->taskFinishTimestamp = $map['TaskFinishTimestamp'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TaskStartTimestamp'])) {
            $model->taskStartTimestamp = $map['TaskStartTimestamp'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['TaskSteps'])) {
            if (!empty($map['TaskSteps'])) {
                $model->taskSteps = [];
                $n1 = 0;
                foreach ($map['TaskSteps'] as $item1) {
                    $model->taskSteps[$n1] = taskSteps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
