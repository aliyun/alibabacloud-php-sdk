<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkAppMetricsResponseBody\data;

use AlibabaCloud\Tea\Model;

class scanMetrics extends Model
{
    /**
     * @description The number of scanned rows.
     *
     * @example 1000
     *
     * @var int
     */
    public $outputRowsCount;

    /**
     * @description The number of scanned bytes.
     *
     * @example 10000
     *
     * @var int
     */
    public $totalReadFileSizeInByte;
    protected $_name = [
        'outputRowsCount'         => 'OutputRowsCount',
        'totalReadFileSizeInByte' => 'TotalReadFileSizeInByte',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputRowsCount) {
            $res['OutputRowsCount'] = $this->outputRowsCount;
        }
        if (null !== $this->totalReadFileSizeInByte) {
            $res['TotalReadFileSizeInByte'] = $this->totalReadFileSizeInByte;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scanMetrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutputRowsCount'])) {
            $model->outputRowsCount = $map['OutputRowsCount'];
        }
        if (isset($map['TotalReadFileSizeInByte'])) {
            $model->totalReadFileSizeInByte = $map['TotalReadFileSizeInByte'];
        }

        return $model;
    }
}
