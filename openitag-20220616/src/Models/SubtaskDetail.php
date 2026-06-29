<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\SubtaskDetail\items;

class SubtaskDetail extends Model
{
    /**
     * @var bool
     */
    public $canDiscard;

    /**
     * @var bool
     */
    public $canReassign;

    /**
     * @var bool
     */
    public $canRelease;

    /**
     * @var string
     */
    public $currentWorkNode;

    /**
     * @var string
     */
    public $extConfigs;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subtaskId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $weight;

    /**
     * @var string
     */
    public $workNodeState;

    /**
     * @var Workforce[]
     */
    public $workforce;
    protected $_name = [
        'canDiscard' => 'CanDiscard',
        'canReassign' => 'CanReassign',
        'canRelease' => 'CanRelease',
        'currentWorkNode' => 'CurrentWorkNode',
        'extConfigs' => 'ExtConfigs',
        'items' => 'Items',
        'status' => 'Status',
        'subtaskId' => 'SubtaskId',
        'taskId' => 'TaskId',
        'weight' => 'Weight',
        'workNodeState' => 'WorkNodeState',
        'workforce' => 'Workforce',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        if (\is_array($this->workforce)) {
            Model::validateArray($this->workforce);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canDiscard) {
            $res['CanDiscard'] = $this->canDiscard;
        }

        if (null !== $this->canReassign) {
            $res['CanReassign'] = $this->canReassign;
        }

        if (null !== $this->canRelease) {
            $res['CanRelease'] = $this->canRelease;
        }

        if (null !== $this->currentWorkNode) {
            $res['CurrentWorkNode'] = $this->currentWorkNode;
        }

        if (null !== $this->extConfigs) {
            $res['ExtConfigs'] = $this->extConfigs;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['Items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['Items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subtaskId) {
            $res['SubtaskId'] = $this->subtaskId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        if (null !== $this->workNodeState) {
            $res['WorkNodeState'] = $this->workNodeState;
        }

        if (null !== $this->workforce) {
            if (\is_array($this->workforce)) {
                $res['Workforce'] = [];
                $n1 = 0;
                foreach ($this->workforce as $item1) {
                    $res['Workforce'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CanDiscard'])) {
            $model->canDiscard = $map['CanDiscard'];
        }

        if (isset($map['CanReassign'])) {
            $model->canReassign = $map['CanReassign'];
        }

        if (isset($map['CanRelease'])) {
            $model->canRelease = $map['CanRelease'];
        }

        if (isset($map['CurrentWorkNode'])) {
            $model->currentWorkNode = $map['CurrentWorkNode'];
        }

        if (isset($map['ExtConfigs'])) {
            $model->extConfigs = $map['ExtConfigs'];
        }

        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['Items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubtaskId'])) {
            $model->subtaskId = $map['SubtaskId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        if (isset($map['WorkNodeState'])) {
            $model->workNodeState = $map['WorkNodeState'];
        }

        if (isset($map['Workforce'])) {
            if (!empty($map['Workforce'])) {
                $model->workforce = [];
                $n1 = 0;
                foreach ($map['Workforce'] as $item1) {
                    $model->workforce[$n1] = Workforce::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
