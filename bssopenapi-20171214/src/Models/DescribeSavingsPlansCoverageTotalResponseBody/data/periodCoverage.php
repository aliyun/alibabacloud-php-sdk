<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansCoverageTotalResponseBody\data;

use AlibabaCloud\Tea\Model;

class periodCoverage extends Model
{
    /**
     * @description The period.
     *
     * The value is in the format of yyyyMMddHH.
     * @example 1
     *
     * @var float
     */
    public $percentage;

    /**
     * @description The coverage summary.
     *
     * @example 2021071500
     *
     * @var string
     */
    public $period;
    protected $_name = [
        'percentage' => 'Percentage',
        'period'     => 'Period',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return periodCoverage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        return $model;
    }
}
