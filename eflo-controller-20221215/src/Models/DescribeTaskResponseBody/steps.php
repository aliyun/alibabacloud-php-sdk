<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeTaskResponseBody;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeTaskResponseBody\steps\subTasks;
use AlibabaCloud\Tea\Model;

class steps extends Model
{
    /**
     * @example get taskinfo failed
     *
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $stageTag;

    /**
     * @example 2022-11-30T2:00:00.852Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example create_vpd
     *
     * @var string
     */
    public $stepName;

    /**
     * @example execution_success
     *
     * @var string
     */
    public $stepState;

    /**
     * @example normal
     *
     * @var string
     */
    public $stepType;

    /**
     * @var subTasks[]
     */
    public $subTasks;

    /**
     * @example 2022-11-30T02:20:14.852Z
     *
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
    }

    public function toMap()
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
            $res['SubTasks'] = [];
            if (null !== $this->subTasks && \is_array($this->subTasks)) {
                $n = 0;
                foreach ($this->subTasks as $item) {
                    $res['SubTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return steps
     */
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
                $n               = 0;
                foreach ($map['SubTasks'] as $item) {
                    $model->subTasks[$n++] = null !== $item ? subTasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
