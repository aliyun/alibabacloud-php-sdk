<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowDefinitionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowDefinitionsResponseBody\pagingInfo\workflowDefinitions;

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
     * @var workflowDefinitions[]
     */
    public $workflowDefinitions;
    protected $_name = [
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'totalCount'          => 'TotalCount',
        'workflowDefinitions' => 'WorkflowDefinitions',
    ];

    public function validate()
    {
        if (\is_array($this->workflowDefinitions)) {
            Model::validateArray($this->workflowDefinitions);
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

        if (null !== $this->workflowDefinitions) {
            if (\is_array($this->workflowDefinitions)) {
                $res['WorkflowDefinitions'] = [];
                $n1                         = 0;
                foreach ($this->workflowDefinitions as $item1) {
                    $res['WorkflowDefinitions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['WorkflowDefinitions'])) {
            if (!empty($map['WorkflowDefinitions'])) {
                $model->workflowDefinitions = [];
                $n1                         = 0;
                foreach ($map['WorkflowDefinitions'] as $item1) {
                    $model->workflowDefinitions[$n1++] = workflowDefinitions::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
