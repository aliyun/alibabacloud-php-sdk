<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportListResponseBody\items\item\latencyTopNItems;

use AlibabaCloud\Tea\Model;

class latencyTopNItem extends Model
{
    /**
     * @description The average time that is required to execute the SQL statement. Unit: milliseconds.
     *
     * @example 500
     *
     * @var int
     */
    public $avgLatency;

    /**
     * @description The number of times that the SQL statement is executed.
     *
     * @example 5
     *
     * @var int
     */
    public $SQLExecuteTimes;

    /**
     * @description The SQL statement.
     *
     * >  Only the first 128 characters of the SQL statement are returned. In addition, only the SQL statements that take more than 100 ms to execute are returned.
     * @example SELECT * FROM table_name;
     *
     * @var string
     */
    public $SQLText;
    protected $_name = [
        'avgLatency'      => 'AvgLatency',
        'SQLExecuteTimes' => 'SQLExecuteTimes',
        'SQLText'         => 'SQLText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgLatency) {
            $res['AvgLatency'] = $this->avgLatency;
        }
        if (null !== $this->SQLExecuteTimes) {
            $res['SQLExecuteTimes'] = $this->SQLExecuteTimes;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return latencyTopNItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgLatency'])) {
            $model->avgLatency = $map['AvgLatency'];
        }
        if (isset($map['SQLExecuteTimes'])) {
            $model->SQLExecuteTimes = $map['SQLExecuteTimes'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }

        return $model;
    }
}
