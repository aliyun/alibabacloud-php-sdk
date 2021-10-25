<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPatternAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class patternDetail extends Model
{
    /**
     * @var string
     */
    public $SQLPattern;

    /**
     * @var int
     */
    public $queryCount;

    /**
     * @var string
     */
    public $totalQueryTime;

    /**
     * @var string
     */
    public $averageQueryTime;

    /**
     * @var string
     */
    public $averageMemory;
    protected $_name = [
        'SQLPattern'       => 'SQLPattern',
        'queryCount'       => 'QueryCount',
        'totalQueryTime'   => 'TotalQueryTime',
        'averageQueryTime' => 'AverageQueryTime',
        'averageMemory'    => 'AverageMemory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SQLPattern) {
            $res['SQLPattern'] = $this->SQLPattern;
        }
        if (null !== $this->queryCount) {
            $res['QueryCount'] = $this->queryCount;
        }
        if (null !== $this->totalQueryTime) {
            $res['TotalQueryTime'] = $this->totalQueryTime;
        }
        if (null !== $this->averageQueryTime) {
            $res['AverageQueryTime'] = $this->averageQueryTime;
        }
        if (null !== $this->averageMemory) {
            $res['AverageMemory'] = $this->averageMemory;
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
        if (isset($map['SQLPattern'])) {
            $model->SQLPattern = $map['SQLPattern'];
        }
        if (isset($map['QueryCount'])) {
            $model->queryCount = $map['QueryCount'];
        }
        if (isset($map['TotalQueryTime'])) {
            $model->totalQueryTime = $map['TotalQueryTime'];
        }
        if (isset($map['AverageQueryTime'])) {
            $model->averageQueryTime = $map['AverageQueryTime'];
        }
        if (isset($map['AverageMemory'])) {
            $model->averageMemory = $map['AverageMemory'];
        }

        return $model;
    }
}
