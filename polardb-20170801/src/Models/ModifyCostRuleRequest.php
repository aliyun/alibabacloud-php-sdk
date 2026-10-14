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
    public $cacheCreationCostPointsPerMillion;

    /**
     * @var string
     */
    public $costRuleId;

    /**
     * @var string
     */
    public $explicitCacheCostPointsPerMillion;

    /**
     * @var string
     */
    public $gwClusterId;

    /**
     * @var string
     */
    public $imageCostPointsPerCount;

    /**
     * @var string
     */
    public $inputCostPointsPerMillion;

    /**
     * @var string
     */
    public $inputTokenTiers;

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

    /**
     * @var string
     */
    public $videoCostPointsPerSecond;
    protected $_name = [
        'cacheCostPointsPerMillion' => 'CacheCostPointsPerMillion',
        'cacheCreationCostPointsPerMillion' => 'CacheCreationCostPointsPerMillion',
        'costRuleId' => 'CostRuleId',
        'explicitCacheCostPointsPerMillion' => 'ExplicitCacheCostPointsPerMillion',
        'gwClusterId' => 'GwClusterId',
        'imageCostPointsPerCount' => 'ImageCostPointsPerCount',
        'inputCostPointsPerMillion' => 'InputCostPointsPerMillion',
        'inputTokenTiers' => 'InputTokenTiers',
        'modelName' => 'ModelName',
        'modelServiceId' => 'ModelServiceId',
        'outputCostPointsPerMillion' => 'OutputCostPointsPerMillion',
        'regionId' => 'RegionId',
        'videoCostPointsPerSecond' => 'VideoCostPointsPerSecond',
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

        if (null !== $this->cacheCreationCostPointsPerMillion) {
            $res['CacheCreationCostPointsPerMillion'] = $this->cacheCreationCostPointsPerMillion;
        }

        if (null !== $this->costRuleId) {
            $res['CostRuleId'] = $this->costRuleId;
        }

        if (null !== $this->explicitCacheCostPointsPerMillion) {
            $res['ExplicitCacheCostPointsPerMillion'] = $this->explicitCacheCostPointsPerMillion;
        }

        if (null !== $this->gwClusterId) {
            $res['GwClusterId'] = $this->gwClusterId;
        }

        if (null !== $this->imageCostPointsPerCount) {
            $res['ImageCostPointsPerCount'] = $this->imageCostPointsPerCount;
        }

        if (null !== $this->inputCostPointsPerMillion) {
            $res['InputCostPointsPerMillion'] = $this->inputCostPointsPerMillion;
        }

        if (null !== $this->inputTokenTiers) {
            $res['InputTokenTiers'] = $this->inputTokenTiers;
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

        if (null !== $this->videoCostPointsPerSecond) {
            $res['VideoCostPointsPerSecond'] = $this->videoCostPointsPerSecond;
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

        if (isset($map['CacheCreationCostPointsPerMillion'])) {
            $model->cacheCreationCostPointsPerMillion = $map['CacheCreationCostPointsPerMillion'];
        }

        if (isset($map['CostRuleId'])) {
            $model->costRuleId = $map['CostRuleId'];
        }

        if (isset($map['ExplicitCacheCostPointsPerMillion'])) {
            $model->explicitCacheCostPointsPerMillion = $map['ExplicitCacheCostPointsPerMillion'];
        }

        if (isset($map['GwClusterId'])) {
            $model->gwClusterId = $map['GwClusterId'];
        }

        if (isset($map['ImageCostPointsPerCount'])) {
            $model->imageCostPointsPerCount = $map['ImageCostPointsPerCount'];
        }

        if (isset($map['InputCostPointsPerMillion'])) {
            $model->inputCostPointsPerMillion = $map['InputCostPointsPerMillion'];
        }

        if (isset($map['InputTokenTiers'])) {
            $model->inputTokenTiers = $map['InputTokenTiers'];
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

        if (isset($map['VideoCostPointsPerSecond'])) {
            $model->videoCostPointsPerSecond = $map['VideoCostPointsPerSecond'];
        }

        return $model;
    }
}
