<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListQueuesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListQueuesResponseBody\queues\nodes;
use AlibabaCloud\SDK\EHPC\V20240730\Models\NodeTemplate;

class queues extends Model
{
    /**
     * @var NodeTemplate[]
     */
    public $computeNodes;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $enableScaleIn;

    /**
     * @var bool
     */
    public $enableScaleOut;

    /**
     * @var int
     */
    public $maxCount;

    /**
     * @var int
     */
    public $maxCountPerCycle;

    /**
     * @var int
     */
    public $minCount;

    /**
     * @var nodes
     */
    public $nodes;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var int
     */
    public $totalCores;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string[]
     */
    public $vSwitchIds;
    protected $_name = [
        'computeNodes' => 'ComputeNodes',
        'createTime' => 'CreateTime',
        'enableScaleIn' => 'EnableScaleIn',
        'enableScaleOut' => 'EnableScaleOut',
        'maxCount' => 'MaxCount',
        'maxCountPerCycle' => 'MaxCountPerCycle',
        'minCount' => 'MinCount',
        'nodes' => 'Nodes',
        'queueName' => 'QueueName',
        'totalCores' => 'TotalCores',
        'updateTime' => 'UpdateTime',
        'vSwitchIds' => 'VSwitchIds',
    ];

    public function validate()
    {
        if (\is_array($this->computeNodes)) {
            Model::validateArray($this->computeNodes);
        }
        if (null !== $this->nodes) {
            $this->nodes->validate();
        }
        if (\is_array($this->vSwitchIds)) {
            Model::validateArray($this->vSwitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->computeNodes) {
            if (\is_array($this->computeNodes)) {
                $res['ComputeNodes'] = [];
                $n1 = 0;
                foreach ($this->computeNodes as $item1) {
                    $res['ComputeNodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['Nodes'] = null !== $this->nodes ? $this->nodes->toArray($noStream) : $this->nodes;
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
            if (\is_array($this->vSwitchIds)) {
                $res['VSwitchIds'] = [];
                $n1 = 0;
                foreach ($this->vSwitchIds as $item1) {
                    $res['VSwitchIds'][$n1++] = $item1;
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
        if (isset($map['ComputeNodes'])) {
            if (!empty($map['ComputeNodes'])) {
                $model->computeNodes = [];
                $n1 = 0;
                foreach ($map['ComputeNodes'] as $item1) {
                    $model->computeNodes[$n1++] = NodeTemplate::fromMap($item1);
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
                $model->vSwitchIds = [];
                $n1 = 0;
                foreach ($map['VSwitchIds'] as $item1) {
                    $model->vSwitchIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
