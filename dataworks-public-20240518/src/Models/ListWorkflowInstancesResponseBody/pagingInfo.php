<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowInstancesResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowInstancesResponseBody\pagingInfo\workflowInstances;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of entries returned.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The workflow instances.
     *
     * @var workflowInstances[]
     */
    public $workflowInstances;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
        'workflowInstances' => 'WorkflowInstances',
    ];

    public function validate() {}

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
        if (null !== $this->workflowInstances) {
            $res['WorkflowInstances'] = [];
            if (null !== $this->workflowInstances && \is_array($this->workflowInstances)) {
                $n = 0;
                foreach ($this->workflowInstances as $item) {
                    $res['WorkflowInstances'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['WorkflowInstances'])) {
            if (!empty($map['WorkflowInstances'])) {
                $model->workflowInstances = [];
                $n = 0;
                foreach ($map['WorkflowInstances'] as $item) {
                    $model->workflowInstances[$n++] = null !== $item ? workflowInstances::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
