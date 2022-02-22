<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListMessageMetricsResponseBody;

use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListMessageMetricsResponseBody\data\metrics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 统计数据列表
     *
     * @var metrics[]
     */
    public $metrics;

    /**
     * @description 分页数，从1开始，默认为1。
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 分页大小，默认为10。
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 总统计数量
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'metrics'    => 'Metrics',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metrics) {
            $res['Metrics'] = [];
            if (null !== $this->metrics && \is_array($this->metrics)) {
                $n = 0;
                foreach ($this->metrics as $item) {
                    $res['Metrics'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Metrics'])) {
            if (!empty($map['Metrics'])) {
                $model->metrics = [];
                $n              = 0;
                foreach ($map['Metrics'] as $item) {
                    $model->metrics[$n++] = null !== $item ? metrics::fromMap($item) : $item;
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
