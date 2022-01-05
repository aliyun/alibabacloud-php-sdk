<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPatternAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class patternDetail extends Model
{
    /**
     * @var string
     */
    public $averageMemory;

    /**
     * @var string
     */
    public $averageQueryTime;

    /**
     * @var int
     */
    public $queryCount;

    /**
     * @var string
     */
    public $SQLPattern;

    /**
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
