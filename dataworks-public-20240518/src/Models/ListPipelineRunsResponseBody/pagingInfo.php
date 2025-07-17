<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListPipelineRunsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListPipelineRunsResponseBody\pagingInfo\pipelineRuns;
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
     * @description The processes.
     *
     * @var pipelineRuns[]
     */
    public $pipelineRuns;

    /**
     * @description The total number of entries returned.
     *
     * @example 2524
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'pipelineRuns' => 'PipelineRuns',
        'totalCount' => 'TotalCount',
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
        if (null !== $this->pipelineRuns) {
            $res['PipelineRuns'] = [];
            if (null !== $this->pipelineRuns && \is_array($this->pipelineRuns)) {
                $n = 0;
                foreach ($this->pipelineRuns as $item) {
                    $res['PipelineRuns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['PipelineRuns'])) {
            if (!empty($map['PipelineRuns'])) {
                $model->pipelineRuns = [];
                $n = 0;
                foreach ($map['PipelineRuns'] as $item) {
                    $model->pipelineRuns[$n++] = null !== $item ? pipelineRuns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
