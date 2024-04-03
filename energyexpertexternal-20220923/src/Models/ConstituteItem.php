<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\ConstituteItem\envGasEmissions;
use AlibabaCloud\Tea\Model;

class ConstituteItem extends Model
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
    public $emissionSource;

    /**
     * @var string
     */
    public $emissionSourceKey;

    /**
     * @var string
     */
    public $enterpriseName;

    /**
     * @var envGasEmissions[]
     */
    public $envGasEmissions;

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
     * @var \AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\ConstituteItem[]
     */
    public $subConstituteItems;
    protected $_name = [
        'carbonEmissionData' => 'carbonEmissionData',
        'dataUnit'           => 'dataUnit',
        'emissionSource'     => 'emissionSource',
        'emissionSourceKey'  => 'emissionSourceKey',
        'enterpriseName'     => 'enterpriseName',
        'envGasEmissions'    => 'envGasEmissions',
        'name'               => 'name',
        'nameKey'            => 'nameKey',
        'ratio'              => 'ratio',
        'rawData'            => 'rawData',
        'subConstituteItems' => 'subConstituteItems',
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
        if (null !== $this->emissionSource) {
            $res['emissionSource'] = $this->emissionSource;
        }
        if (null !== $this->emissionSourceKey) {
            $res['emissionSourceKey'] = $this->emissionSourceKey;
        }
        if (null !== $this->enterpriseName) {
            $res['enterpriseName'] = $this->enterpriseName;
        }
        if (null !== $this->envGasEmissions) {
            $res['envGasEmissions'] = [];
            if (null !== $this->envGasEmissions && \is_array($this->envGasEmissions)) {
                $n = 0;
                foreach ($this->envGasEmissions as $item) {
                    $res['envGasEmissions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->subConstituteItems) {
            $res['subConstituteItems'] = [];
            if (null !== $this->subConstituteItems && \is_array($this->subConstituteItems)) {
                $n = 0;
                foreach ($this->subConstituteItems as $item) {
                    $res['subConstituteItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConstituteItem
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
        if (isset($map['emissionSource'])) {
            $model->emissionSource = $map['emissionSource'];
        }
        if (isset($map['emissionSourceKey'])) {
            $model->emissionSourceKey = $map['emissionSourceKey'];
        }
        if (isset($map['enterpriseName'])) {
            $model->enterpriseName = $map['enterpriseName'];
        }
        if (isset($map['envGasEmissions'])) {
            if (!empty($map['envGasEmissions'])) {
                $model->envGasEmissions = [];
                $n                      = 0;
                foreach ($map['envGasEmissions'] as $item) {
                    $model->envGasEmissions[$n++] = null !== $item ? envGasEmissions::fromMap($item) : $item;
                }
            }
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
        if (isset($map['subConstituteItems'])) {
            if (!empty($map['subConstituteItems'])) {
                $model->subConstituteItems = [];
                $n                         = 0;
                foreach ($map['subConstituteItems'] as $item) {
                    $model->subConstituteItems[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
