<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecTrendResponseBody\data;

use AlibabaCloud\Tea\Model;

class nuclear extends Model
{
    /**
     * @description Carbon emissions
     *
     * @example 3.14
     *
     * @var float
     */
    public $carbonEmissionData;

    /**
     * @description The price unit.
     *
     * @example kWh
     *
     * @var string
     */
    public $dataUnit;

    /**
     * @description Month
     *
     * @example 12
     *
     * @var int
     */
    public $month;

    /**
     * @description Power Type Name
     *
     * @example Nuclear power
     *
     * @var string
     */
    public $name;

    /**
     * @description Power Type Code
     *
     * @example carbonInventory.check.nuclear_electricity
     *
     * @var string
     */
    public $nameKey;

    /**
     * @description Proportion of electricity consumption to all electricity consumption in the month: example value: 0.5 (i. e., 50%)
     *
     * @example 0.5
     *
     * @var float
     */
    public $ratio;

    /**
     * @description Electricity consumption
     *
     * @example 3.14
     *
     * @var float
     */
    public $rawData;

    /**
     * @description Year
     *
     * @example 2024
     *
     * @var string
     */
    public $year;
    protected $_name = [
        'carbonEmissionData' => 'carbonEmissionData',
        'dataUnit'           => 'dataUnit',
        'month'              => 'month',
        'name'               => 'name',
        'nameKey'            => 'nameKey',
        'ratio'              => 'ratio',
        'rawData'            => 'rawData',
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
        if (null !== $this->dataUnit) {
            $res['dataUnit'] = $this->dataUnit;
        }
        if (null !== $this->month) {
            $res['month'] = $this->month;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nameKey) {
            $res['nameKey'] = $this->nameKey;
        }
        if (null !== $this->ratio) {
            $res['ratio'] = $this->ratio;
        }
        if (null !== $this->rawData) {
            $res['rawData'] = $this->rawData;
        }
        if (null !== $this->year) {
            $res['year'] = $this->year;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nuclear
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['carbonEmissionData'])) {
            $model->carbonEmissionData = $map['carbonEmissionData'];
        }
        if (isset($map['dataUnit'])) {
            $model->dataUnit = $map['dataUnit'];
        }
        if (isset($map['month'])) {
            $model->month = $map['month'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['nameKey'])) {
            $model->nameKey = $map['nameKey'];
        }
        if (isset($map['ratio'])) {
            $model->ratio = $map['ratio'];
        }
        if (isset($map['rawData'])) {
            $model->rawData = $map['rawData'];
        }
        if (isset($map['year'])) {
            $model->year = $map['year'];
        }

        return $model;
    }
}
