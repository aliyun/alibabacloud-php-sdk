<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\DescribeEvaluationResultsResponse;

use AlibabaCloud\SDK\Config\V20190108\Models\DescribeEvaluationResultsResponse\evaluationResults\evaluationResultList;
use AlibabaCloud\Tea\Model;

class evaluationResults extends Model
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
     * @var evaluationResultList[]
     */
    public $evaluationResultList;
    protected $_name = [
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'totalCount'           => 'TotalCount',
        'evaluationResultList' => 'EvaluationResultList',
    ];

    public function validate()
    {
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('evaluationResultList', $this->evaluationResultList, true);
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
        if (null !== $this->evaluationResultList) {
            $res['EvaluationResultList'] = [];
            if (null !== $this->evaluationResultList && \is_array($this->evaluationResultList)) {
                $n = 0;
                foreach ($this->evaluationResultList as $item) {
                    $res['EvaluationResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return evaluationResults
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
        if (isset($map['EvaluationResultList'])) {
            if (!empty($map['EvaluationResultList'])) {
                $model->evaluationResultList = [];
                $n                           = 0;
                foreach ($map['EvaluationResultList'] as $item) {
                    $model->evaluationResultList[$n++] = null !== $item ? evaluationResultList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
