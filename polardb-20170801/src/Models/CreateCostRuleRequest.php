<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class CreateCostRuleRequest extends Model
{
    /**
     * @var string
     */
    public $cacheCostPointsPerMillion;

    /**
     * @var string
     */
    public $effectiveTargetType;

    /**
     * @var string
     */
    public $effectiveTargetValue;

    /**
     * @var string
     */
    public $gwClusterId;

    /**
     * @var string
     */
    public $inputCostPointsPerMillion;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelServiceId;

    /**
     * @var string
     */
    public $outputCostPointsPerMillion;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cacheCostPointsPerMillion' => 'CacheCostPointsPerMillion',
        'effectiveTargetType' => 'EffectiveTargetType',
        'effectiveTargetValue' => 'EffectiveTargetValue',
        'gwClusterId' => 'GwClusterId',
        'inputCostPointsPerMillion' => 'InputCostPointsPerMillion',
        'modelName' => 'ModelName',
        'modelServiceId' => 'ModelServiceId',
        'outputCostPointsPerMillion' => 'OutputCostPointsPerMillion',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cacheCostPointsPerMillion) {
            $res['CacheCostPointsPerMillion'] = $this->cacheCostPointsPerMillion;
        }

        if (null !== $this->effectiveTargetType) {
            $res['EffectiveTargetType'] = $this->effectiveTargetType;
        }

        if (null !== $this->effectiveTargetValue) {
            $res['EffectiveTargetValue'] = $this->effectiveTargetValue;
        }

        if (null !== $this->gwClusterId) {
            $res['GwClusterId'] = $this->gwClusterId;
        }

        if (null !== $this->inputCostPointsPerMillion) {
            $res['InputCostPointsPerMillion'] = $this->inputCostPointsPerMillion;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->modelServiceId) {
            $res['ModelServiceId'] = $this->modelServiceId;
        }

        if (null !== $this->outputCostPointsPerMillion) {
            $res['OutputCostPointsPerMillion'] = $this->outputCostPointsPerMillion;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['CacheCostPointsPerMillion'])) {
            $model->cacheCostPointsPerMillion = $map['CacheCostPointsPerMillion'];
        }

        if (isset($map['EffectiveTargetType'])) {
            $model->effectiveTargetType = $map['EffectiveTargetType'];
        }

        if (isset($map['EffectiveTargetValue'])) {
            $model->effectiveTargetValue = $map['EffectiveTargetValue'];
        }

        if (isset($map['GwClusterId'])) {
            $model->gwClusterId = $map['GwClusterId'];
        }

        if (isset($map['InputCostPointsPerMillion'])) {
            $model->inputCostPointsPerMillion = $map['InputCostPointsPerMillion'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['ModelServiceId'])) {
            $model->modelServiceId = $map['ModelServiceId'];
        }

        if (isset($map['OutputCostPointsPerMillion'])) {
            $model->outputCostPointsPerMillion = $map['OutputCostPointsPerMillion'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
