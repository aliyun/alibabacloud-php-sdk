<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourceFeatureViewsResponseBody\totalUsageStatistics;

use AlibabaCloud\Tea\Model;

class totalReadWriteCount extends Model
{
    /**
     * @example 2025-03-18T00:00:00+08:00
     *
     * @var string
     */
    public $date;

    /**
     * @example 456
     *
     * @var int
     */
    public $totalReadCount;

    /**
     * @example 123
     *
     * @var int
     */
    public $totalWriteCount;
    protected $_name = [
        'date' => 'Date',
        'totalReadCount' => 'TotalReadCount',
        'totalWriteCount' => 'TotalWriteCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->totalReadCount) {
            $res['TotalReadCount'] = $this->totalReadCount;
        }
        if (null !== $this->totalWriteCount) {
            $res['TotalWriteCount'] = $this->totalWriteCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return totalReadWriteCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['TotalReadCount'])) {
            $model->totalReadCount = $map['TotalReadCount'];
        }
        if (isset($map['TotalWriteCount'])) {
            $model->totalWriteCount = $map['TotalWriteCount'];
        }

        return $model;
    }
}
