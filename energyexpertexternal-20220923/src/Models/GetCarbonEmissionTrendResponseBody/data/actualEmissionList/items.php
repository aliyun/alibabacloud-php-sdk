<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetCarbonEmissionTrendResponseBody\data\actualEmissionList;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var float
     */
    public $carbonEmissionData;
    /**
     * @var int
     */
    public $month;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
