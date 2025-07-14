<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeTaskResponseBody;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeTaskResponseBody\steps\subTasks;
use AlibabaCloud\Tea\Model;

class steps extends Model
{
    /**
     * @description The error message of the step.
     *
     * @example get taskinfo failed
     *
     * @var string
     */
    public $message;

    /**
     * @description The stage marker.
     *
     * Valid values:
     *
     *   机器释放: Machine release.
     *   节点并发初始化: Node concurrent initialization.
     *   节点释放: Node release.
     *   机器替换: Machine replacement.
     *   节点缩容: Node scale-in.
     *   提前续费: Early renewal.
     *   物理机清理: Physical machine cleanup.
     *   节点清理: Node cleanup.
     *   创建K8s集群: Create Kubernetes cluster.
     *   网络初始化: Network initialization.
     *   节点重启: Node restart.
     *   节点退订: Node unsubscribe.
     *   集群扩容: Cluster scale-out.
     *   异常机器释放: Abnormal machine release.
     *
     * @example 节点缩容
     *
     * @var string
     */
    public $stageTag;

    /**
     * @description The start time.
     *
     * @example 2022-11-30T2:00:00.852Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the step.
     *
     * @example create_vpd
     *
     * @var string
     */
    public $stepName;

    /**
     * @description The step status.
     *
     * Valid values:
     *
     *   execution_success
     *   execution_failed
     *
     * @example execution_success
     *
     * @var string
     */
    public $stepState;

    /**
     * @description The type of the step.
     *
     * Valid values:
     *
     *   normal: A normal step has only one successor step.
     *   dispersive: A dispersive step has multiple successor steps.
     *
     * @example normal
     *
     * @var string
     */
    public $stepType;

    /**
     * @description The sub tasks.
     *
     * @var subTasks[]
     */
    public $subTasks;

    /**
     * @description The update time.
     *
     * @example 2022-11-30T02:20:14.852Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'message' => 'Message',
        'stageTag' => 'StageTag',
        'startTime' => 'StartTime',
        'stepName' => 'StepName',
        'stepState' => 'StepState',
        'stepType' => 'StepType',
        'subTasks' => 'SubTasks',
        'updateTime' => 'UpdateTime',
    ];

    public function validate() {}

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
                $n = 0;
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
