<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListComputeMetricsByInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListComputeMetricsByInstanceResponseBody\data\instanceComputeMetrics;

class data extends Model
{
    /**
     * @var instanceComputeMetrics[]
     */
    public $instanceComputeMetrics;
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
        'instanceComputeMetrics' => 'instanceComputeMetrics',
        'pageNumber'             => 'pageNumber',
        'pageSize'               => 'pageSize',
        'totalCount'             => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->instanceComputeMetrics)) {
            Model::validateArray($this->instanceComputeMetrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceComputeMetrics) {
            if (\is_array($this->instanceComputeMetrics)) {
                $res['instanceComputeMetrics'] = [];
                $n1                            = 0;
                foreach ($this->instanceComputeMetrics as $item1) {
                    $res['instanceComputeMetrics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['instanceComputeMetrics'])) {
            if (!empty($map['instanceComputeMetrics'])) {
                $model->instanceComputeMetrics = [];
                $n1                            = 0;
                foreach ($map['instanceComputeMetrics'] as $item1) {
                    $model->instanceComputeMetrics[$n1++] = instanceComputeMetrics::fromMap($item1);
                }
            }
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
