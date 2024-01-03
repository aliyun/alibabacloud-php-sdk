<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\SDK\OpenITag\V20220616\Models\SubtaskDetail\items;
use AlibabaCloud\Tea\Model;

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
     * @example MARK
     *
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
     * @example FINISHED
     *
     * @var string
     */
    public $status;

    /**
     * @example 1500682457270333440
     *
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
     * @example FINISHED
     *
     * @var string
     */
    public $workNodeState;

    /**
     * @var Workforce[]
     */
    public $workforce;
    protected $_name = [
        'canDiscard'      => 'CanDiscard',
        'canReassign'     => 'CanReassign',
        'canRelease'      => 'CanRelease',
        'currentWorkNode' => 'CurrentWorkNode',
        'extConfigs'      => 'ExtConfigs',
        'items'           => 'Items',
        'status'          => 'Status',
        'subtaskId'       => 'SubtaskId',
        'taskId'          => 'TaskId',
        'weight'          => 'Weight',
        'workNodeState'   => 'WorkNodeState',
        'workforce'       => 'Workforce',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['Workforce'] = [];
            if (null !== $this->workforce && \is_array($this->workforce)) {
                $n = 0;
                foreach ($this->workforce as $item) {
                    $res['Workforce'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubtaskDetail
     */
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
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
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
                $n                = 0;
                foreach ($map['Workforce'] as $item) {
                    $model->workforce[$n++] = null !== $item ? Workforce::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
