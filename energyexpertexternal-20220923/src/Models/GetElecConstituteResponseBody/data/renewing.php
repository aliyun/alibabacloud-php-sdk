<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecConstituteResponseBody\data;

use AlibabaCloud\Tea\Model;

class renewing extends Model
{
    /**
     * @description Carbon emission.
     *
     * @example 2.3
     *
     * @var float
     */
    public $carbonEmissionData;

    /**
     * @description The unit.
     *
     * @example kWh
     *
     * @var string
     */
    public $dataUnit;

    /**
     * @description The name.
     *
     * @example renewing
     *
     * @var string
     */
    public $name;

    /**
     * @description The unique identifier of name.
     *
     * @example carbonInventory.carbonEmissionAnalysis.components.CarbonDetail.keZaiShengZiYuan
     *
     * @var string
     */
    public $nameKey;

    /**
     * @description Proportion of electricity consumption to all electricity consumption in the month: example value: 0.5 (i. e., 50%)
     *
     * @example 0.44
     *
     * @var float
     */
    public $ratio;

    /**
     * @description Electricity consumption
     *
     * @example 4.3
     *
     * @var float
     */
    public $rawData;
    protected $_name = [
        'carbonEmissionData' => 'carbonEmissionData',
        'dataUnit'           => 'dataUnit',
        'name'               => 'name',
        'nameKey'            => 'nameKey',
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
        if (null !== $this->nameKey) {
            $res['nameKey'] = $this->nameKey;
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
     * @return renewing
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
        if (isset($map['nameKey'])) {
            $model->nameKey = $map['nameKey'];
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
