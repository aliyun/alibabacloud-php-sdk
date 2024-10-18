<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListQueuesResponseBody;

use AlibabaCloud\SDK\EHPC\V20240730\Models\ListQueuesResponseBody\queues\nodes;
use AlibabaCloud\SDK\EHPC\V20240730\Models\NodeTemplate;
use AlibabaCloud\Tea\Model;

class queues extends Model
{
    /**
     * @description The hardware configurations of the compute nodes that are added in auto scale-outs. Up to five nodes are displayed.
     *
     * @var NodeTemplate[]
     */
    public $computeNodes;

    /**
     * @description The time when the queue was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mmZ format. The time is displayed in UTC. For more information, see [ISO 8601](https://help.aliyun.com/document_detail/25696.html).
     *
     * @example 2023-11-10T02:04:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Indicates whether auto scale-in is enabled for the queue. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enableScaleIn;

    /**
     * @description Indicates whether auto scale-out is enabled for the queue. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enableScaleOut;

    /**
     * @description The maximum number of compute nodes that the queue can contain.
     *
     * @example 100
     *
     * @var int
     */
    public $maxCount;

    /**
     * @description The minimum number of compute nodes that are added to the queue in each auto scale-out.
     *
     * @example 1
     *
     * @var int
     */
    public $maxCountPerCycle;

    /**
     * @description The minimum number of compute nodes that the queue must contain.
     *
     * @example 0
     *
     * @var int
     */
    public $minCount;

    /**
     * @description The statistics about the compute nodes in the queue.
     *
     * @var nodes
     */
    public $nodes;

    /**
     * @description The queue name.
     *
     * @example comp
     *
     * @var string
     */
    public $queueName;

    /**
     * @description The total number of vCPUs that are used by all compute nodes in the queue.
     *
     * @example 24
     *
     * @var int
     */
    public $totalCores;

    /**
     * @description The time when the queue was updated. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mmZ format. The time is displayed in UTC. For more information, see [ISO 8601](https://help.aliyun.com/document_detail/25696.html).
     *
     * @example 2024-04-25T02:02:32
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The vSwitches that can be used for added nodes during auto scale-outs. Up to three vSwitches are displayed.
     *
     * @var string[]
     */
    public $vSwitchIds;
    protected $_name = [
        'computeNodes'     => 'ComputeNodes',
        'createTime'       => 'CreateTime',
        'enableScaleIn'    => 'EnableScaleIn',
        'enableScaleOut'   => 'EnableScaleOut',
        'maxCount'         => 'MaxCount',
        'maxCountPerCycle' => 'MaxCountPerCycle',
        'minCount'         => 'MinCount',
        'nodes'            => 'Nodes',
        'queueName'        => 'QueueName',
        'totalCores'       => 'TotalCores',
        'updateTime'       => 'UpdateTime',
        'vSwitchIds'       => 'VSwitchIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->computeNodes) {
            $res['ComputeNodes'] = [];
            if (null !== $this->computeNodes && \is_array($this->computeNodes)) {
                $n = 0;
                foreach ($this->computeNodes as $item) {
                    $res['ComputeNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->enableScaleIn) {
            $res['EnableScaleIn'] = $this->enableScaleIn;
        }
        if (null !== $this->enableScaleOut) {
            $res['EnableScaleOut'] = $this->enableScaleOut;
        }
        if (null !== $this->maxCount) {
            $res['MaxCount'] = $this->maxCount;
        }
        if (null !== $this->maxCountPerCycle) {
            $res['MaxCountPerCycle'] = $this->maxCountPerCycle;
        }
        if (null !== $this->minCount) {
            $res['MinCount'] = $this->minCount;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = null !== $this->nodes ? $this->nodes->toMap() : null;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->totalCores) {
            $res['TotalCores'] = $this->totalCores;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComputeNodes'])) {
            if (!empty($map['ComputeNodes'])) {
                $model->computeNodes = [];
                $n                   = 0;
                foreach ($map['ComputeNodes'] as $item) {
                    $model->computeNodes[$n++] = null !== $item ? NodeTemplate::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EnableScaleIn'])) {
            $model->enableScaleIn = $map['EnableScaleIn'];
        }
        if (isset($map['EnableScaleOut'])) {
            $model->enableScaleOut = $map['EnableScaleOut'];
        }
        if (isset($map['MaxCount'])) {
            $model->maxCount = $map['MaxCount'];
        }
        if (isset($map['MaxCountPerCycle'])) {
            $model->maxCountPerCycle = $map['MaxCountPerCycle'];
        }
        if (isset($map['MinCount'])) {
            $model->minCount = $map['MinCount'];
        }
        if (isset($map['Nodes'])) {
            $model->nodes = nodes::fromMap($map['Nodes']);
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['TotalCores'])) {
            $model->totalCores = $map['TotalCores'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }

        return $model;
    }
}
