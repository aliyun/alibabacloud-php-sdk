<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeSlowLogTrendResponseBody\data;

use AlibabaCloud\Dara\Model;

class resultSet extends Model
{
    /**
     * @var int
     */
    public $avgQueryDurationMs;

    /**
     * @var int
     */
    public $cnt;

    /**
     * @var int
     */
    public $maxQueryDurationMs;

    /**
     * @var int
     */
    public $minQueryDurationMs;

    /**
     * @var string
     */
    public $queryStartTime;
    protected $_name = [
        'avgQueryDurationMs' => 'AvgQueryDurationMs',
        'cnt' => 'Cnt',
        'maxQueryDurationMs' => 'MaxQueryDurationMs',
        'minQueryDurationMs' => 'MinQueryDurationMs',
        'queryStartTime' => 'QueryStartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avgQueryDurationMs) {
            $res['AvgQueryDurationMs'] = $this->avgQueryDurationMs;
        }

        if (null !== $this->cnt) {
            $res['Cnt'] = $this->cnt;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgQueryDurationMs'])) {
            $model->avgQueryDurationMs = $map['AvgQueryDurationMs'];
        }

        if (isset($map['Cnt'])) {
            $model->cnt = $map['Cnt'];
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
