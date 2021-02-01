<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogTrendResponseBody\slowLogTrend\data;

use AlibabaCloud\Tea\Model;

class resultSet extends Model
{
    /**
     * @var string
     */
    public $queryStartTime;

    /**
     * @var string
     */
    public $maxQueryDurationMs;

    /**
     * @var string
     */
    public $minQueryDurationMs;

    /**
     * @var string
     */
    public $count;

    /**
     * @var string
     */
    public $avgQueryDurationMs;
    protected $_name = [
        'queryStartTime'     => 'QueryStartTime',
        'maxQueryDurationMs' => 'MaxQueryDurationMs',
        'minQueryDurationMs' => 'MinQueryDurationMs',
        'count'              => 'Count',
        'avgQueryDurationMs' => 'AvgQueryDurationMs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queryStartTime) {
            $res['QueryStartTime'] = $this->queryStartTime;
        }
        if (null !== $this->maxQueryDurationMs) {
            $res['MaxQueryDurationMs'] = $this->maxQueryDurationMs;
        }
        if (null !== $this->minQueryDurationMs) {
            $res['MinQueryDurationMs'] = $this->minQueryDurationMs;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->avgQueryDurationMs) {
            $res['AvgQueryDurationMs'] = $this->avgQueryDurationMs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QueryStartTime'])) {
            $model->queryStartTime = $map['QueryStartTime'];
        }
        if (isset($map['MaxQueryDurationMs'])) {
            $model->maxQueryDurationMs = $map['MaxQueryDurationMs'];
        }
        if (isset($map['MinQueryDurationMs'])) {
            $model->minQueryDurationMs = $map['MinQueryDurationMs'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['AvgQueryDurationMs'])) {
            $model->avgQueryDurationMs = $map['AvgQueryDurationMs'];
        }

        return $model;
    }
}
