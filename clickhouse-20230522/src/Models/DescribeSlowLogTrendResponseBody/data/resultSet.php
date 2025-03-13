<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeSlowLogTrendResponseBody\data;

use AlibabaCloud\Tea\Model;

class resultSet extends Model
{
    /**
     * @description The average execution duration of slow SQL queries. Minimum value: **1000**. Unit: milliseconds.
     *
     * @example 2000
     *
     * @var int
     */
    public $avgQueryDurationMs;

    /**
     * @description The total number of SQL queries within the specified time range.
     *
     * @example 1
     *
     * @var int
     */
    public $cnt;

    /**
     * @description The maximum execution duration of slow SQL queries. Minimum value: **1000**. Unit: milliseconds.
     *
     * @example 3000
     *
     * @var int
     */
    public $maxQueryDurationMs;

    /**
     * @description The minimum execution duration of slow SQL queries. Minimum value: **1000**. Unit: milliseconds.
     *
     * @example 1000
     *
     * @var int
     */
    public $minQueryDurationMs;

    /**
     * @description The beginning of the time range to query. The time is in the yyyy-MM-dd hh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2023-04-13 17:48:00
     *
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

    public function validate(): void {}

    public function toMap()
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
