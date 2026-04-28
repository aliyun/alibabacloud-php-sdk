<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ModifyCostRuleRequest extends Model
{
    /**
     * @var string
     */
    public $cacheCostPointsPerMillion;

    /**
     * @var string
     */
    public $costRuleId;

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
        'costRuleId' => 'CostRuleId',
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

        if (null !== $this->costRuleId) {
            $res['CostRuleId'] = $this->costRuleId;
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

        if (isset($map['CostRuleId'])) {
            $model->costRuleId = $map['CostRuleId'];
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
