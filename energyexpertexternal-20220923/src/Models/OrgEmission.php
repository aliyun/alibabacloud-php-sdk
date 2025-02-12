<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\OrgEmission\moduleEmissionList;

class OrgEmission extends Model
{
    /**
     * @var float
     */
    public $carbonEmissionData;
    /**
     * @var moduleEmissionList[]
     */
    public $moduleEmissionList;
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
     * @var OrgEmission[]
     */
    public $subEmissionItems;
    /**
     * @var float
     */
    public $weightingCarbonEmissionData;
    /**
     * @var float
     */
    public $weightingProportion;
    /**
     * @var float
     */
    public $weightingRatio;
    protected $_name = [
        'carbonEmissionData'          => 'carbonEmissionData',
        'moduleEmissionList'          => 'moduleEmissionList',
        'name'                        => 'name',
        'nameKey'                     => 'nameKey',
        'ratio'                       => 'ratio',
        'subEmissionItems'            => 'subEmissionItems',
        'weightingCarbonEmissionData' => 'weightingCarbonEmissionData',
        'weightingProportion'         => 'weightingProportion',
        'weightingRatio'              => 'weightingRatio',
    ];

    public function validate()
    {
        if (\is_array($this->moduleEmissionList)) {
            Model::validateArray($this->moduleEmissionList);
        }
        if (\is_array($this->subEmissionItems)) {
            Model::validateArray($this->subEmissionItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->carbonEmissionData) {
            $res['carbonEmissionData'] = $this->carbonEmissionData;
        }

        if (null !== $this->moduleEmissionList) {
            if (\is_array($this->moduleEmissionList)) {
                $res['moduleEmissionList'] = [];
                $n1                        = 0;
                foreach ($this->moduleEmissionList as $item1) {
                    $res['moduleEmissionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->subEmissionItems) {
            if (\is_array($this->subEmissionItems)) {
                $res['subEmissionItems'] = [];
                $n1                      = 0;
                foreach ($this->subEmissionItems as $item1) {
                    $res['subEmissionItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->weightingCarbonEmissionData) {
            $res['weightingCarbonEmissionData'] = $this->weightingCarbonEmissionData;
        }

        if (null !== $this->weightingProportion) {
            $res['weightingProportion'] = $this->weightingProportion;
        }

        if (null !== $this->weightingRatio) {
            $res['weightingRatio'] = $this->weightingRatio;
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

        if (isset($map['moduleEmissionList'])) {
            if (!empty($map['moduleEmissionList'])) {
                $model->moduleEmissionList = [];
                $n1                        = 0;
                foreach ($map['moduleEmissionList'] as $item1) {
                    $model->moduleEmissionList[$n1++] = moduleEmissionList::fromMap($item1);
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

        if (isset($map['subEmissionItems'])) {
            if (!empty($map['subEmissionItems'])) {
                $model->subEmissionItems = [];
                $n1                      = 0;
                foreach ($map['subEmissionItems'] as $item1) {
                    $model->subEmissionItems[$n1++] = self::fromMap($item1);
                }
            }
        }

        if (isset($map['weightingCarbonEmissionData'])) {
            $model->weightingCarbonEmissionData = $map['weightingCarbonEmissionData'];
        }

        if (isset($map['weightingProportion'])) {
            $model->weightingProportion = $map['weightingProportion'];
        }

        if (isset($map['weightingRatio'])) {
            $model->weightingRatio = $map['weightingRatio'];
        }

        return $model;
    }
}
