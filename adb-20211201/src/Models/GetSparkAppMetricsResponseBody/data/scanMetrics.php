<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkAppMetricsResponseBody\data;

use AlibabaCloud\Dara\Model;

class scanMetrics extends Model
{
    /**
     * @var int
     */
    public $outputRowsCount;

    /**
     * @var int
     */
    public $totalReadFileSizeInByte;
    protected $_name = [
        'outputRowsCount' => 'OutputRowsCount',
        'totalReadFileSizeInByte' => 'TotalReadFileSizeInByte',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
