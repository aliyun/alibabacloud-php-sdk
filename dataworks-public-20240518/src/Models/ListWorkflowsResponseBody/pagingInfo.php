<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowsResponseBody\pagingInfo\workflows;
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
     * @description The workflows.
     *
     * @var workflows[]
     */
    public $workflows;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
        'workflows' => 'Workflows',
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
        if (null !== $this->workflows) {
            $res['Workflows'] = [];
            if (null !== $this->workflows && \is_array($this->workflows)) {
                $n = 0;
                foreach ($this->workflows as $item) {
                    $res['Workflows'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Workflows'])) {
            if (!empty($map['Workflows'])) {
                $model->workflows = [];
                $n = 0;
                foreach ($map['Workflows'] as $item) {
                    $model->workflows[$n++] = null !== $item ? workflows::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
