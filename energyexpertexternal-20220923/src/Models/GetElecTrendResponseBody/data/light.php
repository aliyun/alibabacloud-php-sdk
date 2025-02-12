<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecTrendResponseBody\data;

use AlibabaCloud\Dara\Model;

class light extends Model
{
    /**
     * @var float
     */
    public $carbonEmissionData;
    /**
     * @var string
     */
    public $dataUnit;
    /**
     * @var int
     */
    public $month;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $nameKey;
    /**
     * @var float
     */
    public $ratio;
    /**
     * @var float
     */
    public $rawData;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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
