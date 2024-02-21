<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeDataTrendResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The name of the metric. Valid values:
     *
     * **sqlExecuteCount**: the number of executions of slow SQL queries.
     * **sqlExecuteCountDiff**: the difference in the number of executions of slow SQL queries compared to the previous day.
     * **sqlCount**: the number of slow SQL templates.
     * **sqlCountDiff**: the difference in the number of slow SQL templates compared to the previous day.
     * **optimizedSqlExecuteCount**: the number of optimizable executions of slow SQL queries.
     * **optimizedSqlExecuteCountDiff**: the difference in the number of optimizable executions of slow SQL queries compared to the previous day.
     * **optimizedSqlCount**: the number of optimizable slow SQL templates.
     * **optimizedSqlCountDiff**: the difference in the number of optimizable slow SQL templates compared to the previous day.
     *
     * @example sqlExecuteCount
     *
     * @var string
     */
    public $kpi;

    /**
     * @description The data timestamp. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1643040000000
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The value of the metric.
     *
     * @example 1000
     *
     * @var float
     */
    public $value;
    protected $_name = [
        'kpi'       => 'Kpi',
        'timestamp' => 'Timestamp',
        'value'     => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kpi) {
            $res['Kpi'] = $this->kpi;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Kpi'])) {
            $model->kpi = $map['Kpi'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
