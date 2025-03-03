<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeTaskResponseBody\steps\subTasks;

class steps extends Model
{
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $stageTag;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $stepName;
    /**
     * @var string
     */
    public $stepState;
    /**
     * @var string
     */
    public $stepType;
    /**
     * @var subTasks[]
     */
    public $subTasks;
    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'message'    => 'Message',
        'stageTag'   => 'StageTag',
        'startTime'  => 'StartTime',
        'stepName'   => 'StepName',
        'stepState'  => 'StepState',
        'stepType'   => 'StepType',
        'subTasks'   => 'SubTasks',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->subTasks)) {
            Model::validateArray($this->subTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->stageTag) {
            $res['StageTag'] = $this->stageTag;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
        }

        if (null !== $this->stepState) {
            $res['StepState'] = $this->stepState;
        }

        if (null !== $this->stepType) {
            $res['StepType'] = $this->stepType;
        }

        if (null !== $this->subTasks) {
            if (\is_array($this->subTasks)) {
                $res['SubTasks'] = [];
                $n1              = 0;
                foreach ($this->subTasks as $item1) {
                    $res['SubTasks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['StageTag'])) {
            $model->stageTag = $map['StageTag'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }

        if (isset($map['StepState'])) {
            $model->stepState = $map['StepState'];
        }

        if (isset($map['StepType'])) {
            $model->stepType = $map['StepType'];
        }

        if (isset($map['SubTasks'])) {
            if (!empty($map['SubTasks'])) {
                $model->subTasks = [];
                $n1              = 0;
                foreach ($map['SubTasks'] as $item1) {
                    $model->subTasks[$n1++] = subTasks::fromMap($item1);
                }
            }
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
