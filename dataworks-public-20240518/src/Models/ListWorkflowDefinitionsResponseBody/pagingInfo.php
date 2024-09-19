<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowDefinitionsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowDefinitionsResponseBody\pagingInfo\workflowDefinitions;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 227
     *
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
    }

    public function toMap()
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
            $res['WorkflowDefinitions'] = [];
            if (null !== $this->workflowDefinitions && \is_array($this->workflowDefinitions)) {
                $n = 0;
                foreach ($this->workflowDefinitions as $item) {
                    $res['WorkflowDefinitions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pagingInfo
     */
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
                $n                          = 0;
                foreach ($map['WorkflowDefinitions'] as $item) {
                    $model->workflowDefinitions[$n++] = null !== $item ? workflowDefinitions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
