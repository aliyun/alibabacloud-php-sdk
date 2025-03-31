<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTaskInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTaskInstancesResponseBody\pagingInfo\dataQualityEvaluationTaskInstances;

class pagingInfo extends Model
{
    /**
     * @var dataQualityEvaluationTaskInstances[]
     */
    public $dataQualityEvaluationTaskInstances;

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
    protected $_name = [
        'dataQualityEvaluationTaskInstances' => 'DataQualityEvaluationTaskInstances',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->dataQualityEvaluationTaskInstances)) {
            Model::validateArray($this->dataQualityEvaluationTaskInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataQualityEvaluationTaskInstances) {
            if (\is_array($this->dataQualityEvaluationTaskInstances)) {
                $res['DataQualityEvaluationTaskInstances'] = [];
                $n1 = 0;
                foreach ($this->dataQualityEvaluationTaskInstances as $item1) {
                    $res['DataQualityEvaluationTaskInstances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DataQualityEvaluationTaskInstances'])) {
            if (!empty($map['DataQualityEvaluationTaskInstances'])) {
                $model->dataQualityEvaluationTaskInstances = [];
                $n1 = 0;
                foreach ($map['DataQualityEvaluationTaskInstances'] as $item1) {
                    $model->dataQualityEvaluationTaskInstances[$n1++] = dataQualityEvaluationTaskInstances::fromMap($item1);
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
