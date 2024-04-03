<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\OrgEmission\moduleEmissionList;
use AlibabaCloud\Tea\Model;

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
     * @var \AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\OrgEmission[]
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->carbonEmissionData) {
            $res['carbonEmissionData'] = $this->carbonEmissionData;
        }
        if (null !== $this->moduleEmissionList) {
            $res['moduleEmissionList'] = [];
            if (null !== $this->moduleEmissionList && \is_array($this->moduleEmissionList)) {
                $n = 0;
                foreach ($this->moduleEmissionList as $item) {
                    $res['moduleEmissionList'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['subEmissionItems'] = [];
            if (null !== $this->subEmissionItems && \is_array($this->subEmissionItems)) {
                $n = 0;
                foreach ($this->subEmissionItems as $item) {
                    $res['subEmissionItems'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return OrgEmission
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['carbonEmissionData'])) {
            $model->carbonEmissionData = $map['carbonEmissionData'];
        }
        if (isset($map['moduleEmissionList'])) {
            if (!empty($map['moduleEmissionList'])) {
                $model->moduleEmissionList = [];
                $n                         = 0;
                foreach ($map['moduleEmissionList'] as $item) {
                    $model->moduleEmissionList[$n++] = null !== $item ? moduleEmissionList::fromMap($item) : $item;
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
                $n                       = 0;
                foreach ($map['subEmissionItems'] as $item) {
                    $model->subEmissionItems[$n++] = null !== $item ? self::fromMap($item) : $item;
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
