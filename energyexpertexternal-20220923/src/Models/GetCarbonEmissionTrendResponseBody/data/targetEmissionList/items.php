<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetCarbonEmissionTrendResponseBody\data\targetEmissionList;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description Carbon emissions.
     *
     * @example 20.22
     *
     * @var float
     */
    public $carbonEmissionData;

    /**
     * @description The month.
     *
     * @example 10
     *
     * @var int
     */
    public $month;

    /**
     * @description The year.
     *
     * @example 2024
     *
     * @var string
     */
    public $year;
    protected $_name = [
        'carbonEmissionData' => 'carbonEmissionData',
        'month'              => 'month',
        'year'               => 'year',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->carbonEmissionData) {
            $res['carbonEmissionData'] = $this->carbonEmissionData;
        }
        if (null !== $this->month) {
            $res['month'] = $this->month;
        }
        if (null !== $this->year) {
            $res['year'] = $this->year;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['carbonEmissionData'])) {
            $model->carbonEmissionData = $map['carbonEmissionData'];
        }
        if (isset($map['month'])) {
            $model->month = $map['month'];
        }
        if (isset($map['year'])) {
            $model->year = $map['year'];
        }

        return $model;
    }
}
