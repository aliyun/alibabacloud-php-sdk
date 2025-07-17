<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTasksResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTasksResponseBody\pagingInfo\dataQualityEvaluationTasks;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @description The data quality monitoring tasks.
     *
     * @var dataQualityEvaluationTasks[]
     */
    public $dataQualityEvaluationTasks;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The total number of entries returned.
     *
     * @example 131
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'dataQualityEvaluationTasks' => 'DataQualityEvaluationTasks',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataQualityEvaluationTasks) {
            $res['DataQualityEvaluationTasks'] = [];
            if (null !== $this->dataQualityEvaluationTasks && \is_array($this->dataQualityEvaluationTasks)) {
                $n = 0;
                foreach ($this->dataQualityEvaluationTasks as $item) {
                    $res['DataQualityEvaluationTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['DataQualityEvaluationTasks'])) {
            if (!empty($map['DataQualityEvaluationTasks'])) {
                $model->dataQualityEvaluationTasks = [];
                $n = 0;
                foreach ($map['DataQualityEvaluationTasks'] as $item) {
                    $model->dataQualityEvaluationTasks[$n++] = null !== $item ? dataQualityEvaluationTasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
