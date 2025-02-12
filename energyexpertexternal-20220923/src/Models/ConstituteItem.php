<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\ConstituteItem\envGasEmissions;

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
     * @var ConstituteItem[]
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
        if (\is_array($this->envGasEmissions)) {
            Model::validateArray($this->envGasEmissions);
        }
        if (\is_array($this->subConstituteItems)) {
            Model::validateArray($this->subConstituteItems);
        }
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
            if (\is_array($this->envGasEmissions)) {
                $res['envGasEmissions'] = [];
                $n1                     = 0;
                foreach ($this->envGasEmissions as $item1) {
                    $res['envGasEmissions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->subConstituteItems)) {
                $res['subConstituteItems'] = [];
                $n1                        = 0;
                foreach ($this->subConstituteItems as $item1) {
                    $res['subConstituteItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1                     = 0;
                foreach ($map['envGasEmissions'] as $item1) {
                    $model->envGasEmissions[$n1++] = envGasEmissions::fromMap($item1);
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
                $n1                        = 0;
                foreach ($map['subConstituteItems'] as $item1) {
                    $model->subConstituteItems[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
