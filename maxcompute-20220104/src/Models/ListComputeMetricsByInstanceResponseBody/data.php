<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListComputeMetricsByInstanceResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListComputeMetricsByInstanceResponseBody\data\instanceComputeMetrics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description List of pay-as-you-go job compute usage.
     *
     * @var instanceComputeMetrics[]
     */
    public $instanceComputeMetrics;

    /**
     * @description The current page number.
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
     * @description The total number of results returned.
     *
     * @example 64
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'instanceComputeMetrics' => 'instanceComputeMetrics',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'totalCount' => 'totalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceComputeMetrics) {
            $res['instanceComputeMetrics'] = [];
            if (null !== $this->instanceComputeMetrics && \is_array($this->instanceComputeMetrics)) {
                $n = 0;
                foreach ($this->instanceComputeMetrics as $item) {
                    $res['instanceComputeMetrics'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceComputeMetrics'])) {
            if (!empty($map['instanceComputeMetrics'])) {
                $model->instanceComputeMetrics = [];
                $n = 0;
                foreach ($map['instanceComputeMetrics'] as $item) {
                    $model->instanceComputeMetrics[$n++] = null !== $item ? instanceComputeMetrics::fromMap($item) : $item;
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
