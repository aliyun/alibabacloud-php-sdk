<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Tea\Model;

class CarbonEmissionElecSummaryItem extends Model
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
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $ratio;

    /**
     * @var float
     */
    public $rawData;
    protected $_name = [
        'carbonEmissionData' => 'carbonEmissionData',
        'dataUnit'           => 'dataUnit',
        'name'               => 'name',
        'ratio'              => 'ratio',
        'rawData'            => 'rawData',
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
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->ratio) {
            $res['ratio'] = $this->ratio;
        }
        if (null !== $this->rawData) {
            $res['rawData'] = $this->rawData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CarbonEmissionElecSummaryItem
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['ratio'])) {
            $model->ratio = $map['ratio'];
        }
        if (isset($map['rawData'])) {
            $model->rawData = $map['rawData'];
        }

        return $model;
    }
}
