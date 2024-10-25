<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTaskInstancesResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTaskInstancesResponseBody\pagingInfo\dataQualityEvaluationTaskInstances;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @var dataQualityEvaluationTaskInstances[]
     */
    public $dataQualityEvaluationTaskInstances;

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
     * @example 294
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dataQualityEvaluationTaskInstances' => 'DataQualityEvaluationTaskInstances',
        'pageNumber'                         => 'PageNumber',
        'pageSize'                           => 'PageSize',
        'totalCount'                         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataQualityEvaluationTaskInstances) {
            $res['DataQualityEvaluationTaskInstances'] = [];
            if (null !== $this->dataQualityEvaluationTaskInstances && \is_array($this->dataQualityEvaluationTaskInstances)) {
                $n = 0;
                foreach ($this->dataQualityEvaluationTaskInstances as $item) {
                    $res['DataQualityEvaluationTaskInstances'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DataQualityEvaluationTaskInstances'])) {
            if (!empty($map['DataQualityEvaluationTaskInstances'])) {
                $model->dataQualityEvaluationTaskInstances = [];
                $n                                         = 0;
                foreach ($map['DataQualityEvaluationTaskInstances'] as $item) {
                    $model->dataQualityEvaluationTaskInstances[$n++] = null !== $item ? dataQualityEvaluationTaskInstances::fromMap($item) : $item;
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
