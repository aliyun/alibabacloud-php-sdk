<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models;

use AlibabaCloud\Dara\Model;

class DisposeWorkTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $optRemark;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $taskIds;

    /**
     * @var string
     */
    public $workTaskAnalysisResultsShrink;
    protected $_name = [
        'operator' => 'Operator',
        'optRemark' => 'OptRemark',
        'status' => 'Status',
        'taskIds' => 'TaskIds',
        'workTaskAnalysisResultsShrink' => 'WorkTaskAnalysisResults',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->optRemark) {
            $res['OptRemark'] = $this->optRemark;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskIds) {
            $res['TaskIds'] = $this->taskIds;
        }

        if (null !== $this->workTaskAnalysisResultsShrink) {
            $res['WorkTaskAnalysisResults'] = $this->workTaskAnalysisResultsShrink;
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
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['OptRemark'])) {
            $model->optRemark = $map['OptRemark'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskIds'])) {
            $model->taskIds = $map['TaskIds'];
        }

        if (isset($map['WorkTaskAnalysisResults'])) {
            $model->workTaskAnalysisResultsShrink = $map['WorkTaskAnalysisResults'];
        }

        return $model;
    }
}
