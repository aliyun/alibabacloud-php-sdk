<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogTrendResponseBody\slowLogTrend\data;

use AlibabaCloud\Tea\Model;

class resultSet extends Model
{
    /**
     * @var string
     */
    public $avgQueryDurationMs;

    /**
     * @var string
     */
    public $count;

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
    public $queryStartTime;
    protected $_name = [
        'avgQueryDurationMs' => 'AvgQueryDurationMs',
        'count'              => 'Count',
        'maxQueryDurationMs' => 'MaxQueryDurationMs',
        'minQueryDurationMs' => 'MinQueryDurationMs',
        'queryStartTime'     => 'QueryStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgQueryDurationMs) {
            $res['AvgQueryDurationMs'] = $this->avgQueryDurationMs;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->maxQueryDurationMs) {
            $res['MaxQueryDurationMs'] = $this->maxQueryDurationMs;
        }
        if (null !== $this->minQueryDurationMs) {
            $res['MinQueryDurationMs'] = $this->minQueryDurationMs;
        }
        if (null !== $this->queryStartTime) {
            $res['QueryStartTime'] = $this->queryStartTime;
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
        if (isset($map['AvgQueryDurationMs'])) {
            $model->avgQueryDurationMs = $map['AvgQueryDurationMs'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['MaxQueryDurationMs'])) {
            $model->maxQueryDurationMs = $map['MaxQueryDurationMs'];
        }
        if (isset($map['MinQueryDurationMs'])) {
            $model->minQueryDurationMs = $map['MinQueryDurationMs'];
        }
        if (isset($map['QueryStartTime'])) {
            $model->queryStartTime = $map['QueryStartTime'];
        }

        return $model;
    }
}
