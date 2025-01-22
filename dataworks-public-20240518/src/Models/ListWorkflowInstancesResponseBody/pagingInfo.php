<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowInstancesResponseBody\pagingInfo\workflowInstances;

class pagingInfo extends Model
{
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var int
     */
    public $totalCount;
    /**
     * @var workflowInstances[]
     */
    public $workflowInstances;
    protected $_name = [
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'totalCount'        => 'TotalCount',
        'workflowInstances' => 'WorkflowInstances',
    ];

    public function validate()
    {
        if (\is_array($this->workflowInstances)) {
            Model::validateArray($this->workflowInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->workflowInstances) {
            if (\is_array($this->workflowInstances)) {
                $res['WorkflowInstances'] = [];
                $n1                       = 0;
                foreach ($this->workflowInstances as $item1) {
                    $res['WorkflowInstances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['WorkflowInstances'])) {
            if (!empty($map['WorkflowInstances'])) {
                $model->workflowInstances = [];
                $n1                       = 0;
                foreach ($map['WorkflowInstances'] as $item1) {
                    $model->workflowInstances[$n1++] = workflowInstances::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
