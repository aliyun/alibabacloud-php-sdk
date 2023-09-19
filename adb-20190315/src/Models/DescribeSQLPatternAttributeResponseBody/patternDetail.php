<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPatternAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class patternDetail extends Model
{
    /**
     * @description The average used memory associated with the SQL pattern. Unit: MB.
     *
     * @example 0
     *
     * @var string
     */
    public $averageMemory;

    /**
     * @description The average query duration associated with the SQL pattern. Unit: milliseconds.
     *
     * @example 4
     *
     * @var string
     */
    public $averageQueryTime;

    /**
     * @description The number of queries.
     *
     * @example 2
     *
     * @var int
     */
    public $queryCount;

    /**
     * @description The statement of the SQL pattern.
     *
     * @example SELECT * FROM KEPLER_META_NODE_STATIC_INFO WHERE elastic_node = ? OR (elastic_node = ? AND enable = ?)
     *
     * @var string
     */
    public $SQLPattern;

    /**
     * @description The total query duration associated with the SQL pattern. Unit: milliseconds.
     *
     * @example 8
     *
     * @var string
     */
    public $totalQueryTime;
    protected $_name = [
        'averageMemory'    => 'AverageMemory',
        'averageQueryTime' => 'AverageQueryTime',
        'queryCount'       => 'QueryCount',
        'SQLPattern'       => 'SQLPattern',
        'totalQueryTime'   => 'TotalQueryTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->averageMemory) {
            $res['AverageMemory'] = $this->averageMemory;
        }
        if (null !== $this->averageQueryTime) {
            $res['AverageQueryTime'] = $this->averageQueryTime;
        }
        if (null !== $this->queryCount) {
            $res['QueryCount'] = $this->queryCount;
        }
        if (null !== $this->SQLPattern) {
            $res['SQLPattern'] = $this->SQLPattern;
        }
        if (null !== $this->totalQueryTime) {
            $res['TotalQueryTime'] = $this->totalQueryTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return patternDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AverageMemory'])) {
            $model->averageMemory = $map['AverageMemory'];
        }
        if (isset($map['AverageQueryTime'])) {
            $model->averageQueryTime = $map['AverageQueryTime'];
        }
        if (isset($map['QueryCount'])) {
            $model->queryCount = $map['QueryCount'];
        }
        if (isset($map['SQLPattern'])) {
            $model->SQLPattern = $map['SQLPattern'];
        }
        if (isset($map['TotalQueryTime'])) {
            $model->totalQueryTime = $map['TotalQueryTime'];
        }

        return $model;
    }
}
