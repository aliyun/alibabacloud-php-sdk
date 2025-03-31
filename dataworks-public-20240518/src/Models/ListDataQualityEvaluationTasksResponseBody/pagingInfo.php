<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTasksResponseBody\pagingInfo\dataQualityEvaluationTasks;

class pagingInfo extends Model
{
    /**
     * @var dataQualityEvaluationTasks[]
     */
    public $dataQualityEvaluationTasks;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'dataQualityEvaluationTasks' => 'DataQualityEvaluationTasks',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->dataQualityEvaluationTasks)) {
            Model::validateArray($this->dataQualityEvaluationTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataQualityEvaluationTasks) {
            if (\is_array($this->dataQualityEvaluationTasks)) {
                $res['DataQualityEvaluationTasks'] = [];
                $n1 = 0;
                foreach ($this->dataQualityEvaluationTasks as $item1) {
                    $res['DataQualityEvaluationTasks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataQualityEvaluationTasks'])) {
            if (!empty($map['DataQualityEvaluationTasks'])) {
                $model->dataQualityEvaluationTasks = [];
                $n1 = 0;
                foreach ($map['DataQualityEvaluationTasks'] as $item1) {
                    $model->dataQualityEvaluationTasks[$n1++] = dataQualityEvaluationTasks::fromMap($item1);
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
