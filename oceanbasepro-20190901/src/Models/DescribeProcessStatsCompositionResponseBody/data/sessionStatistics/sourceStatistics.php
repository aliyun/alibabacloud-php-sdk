<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProcessStatsCompositionResponseBody\data\sessionStatistics;

use AlibabaCloud\Tea\Model;

class sourceStatistics extends Model
{
    /**
     * @description The number of active sessions.
     *
     * @example 2
     *
     * @var int
     */
    public $activeCount;

    /**
     * @description The value of the data source metric.
     *
     * @example 127.*.*.*
     *
     * @var string
     */
    public $metricValue;

    /**
     * @description The total number of sessions.
     *
     * @example 12
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The type of the data source.
     *
     * @example client
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'activeCount' => 'ActiveCount',
        'metricValue' => 'MetricValue',
        'totalCount'  => 'TotalCount',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeCount) {
            $res['ActiveCount'] = $this->activeCount;
        }
        if (null !== $this->metricValue) {
            $res['MetricValue'] = $this->metricValue;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceStatistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveCount'])) {
            $model->activeCount = $map['ActiveCount'];
        }
        if (isset($map['MetricValue'])) {
            $model->metricValue = $map['MetricValue'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
