<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeCostRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeCostRulesResponseBody\items\inputTokenTiers;

class items extends Model
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
    public $effectiveEndTime;

    /**
     * @var string
     */
    public $effectiveStartTime;

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
    public $explicitCacheCostPointsPerMillion;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

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
    public $inputTokenTier;

    /**
     * @var inputTokenTiers[]
     */
    public $inputTokenTiers;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $modelServiceId;

    /**
     * @var string
     */
    public $modelServiceName;

    /**
     * @var string
     */
    public $outputCostPointsPerMillion;

    /**
     * @var string
     */
    public $videoCostPointsPerSecond;
    protected $_name = [
        'cacheCostPointsPerMillion' => 'CacheCostPointsPerMillion',
        'cacheCreationCostPointsPerMillion' => 'CacheCreationCostPointsPerMillion',
        'costRuleId' => 'CostRuleId',
        'effectiveEndTime' => 'EffectiveEndTime',
        'effectiveStartTime' => 'EffectiveStartTime',
        'effectiveTargetType' => 'EffectiveTargetType',
        'effectiveTargetValue' => 'EffectiveTargetValue',
        'explicitCacheCostPointsPerMillion' => 'ExplicitCacheCostPointsPerMillion',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'gwClusterId' => 'GwClusterId',
        'imageCostPointsPerCount' => 'ImageCostPointsPerCount',
        'inputCostPointsPerMillion' => 'InputCostPointsPerMillion',
        'inputTokenTier' => 'InputTokenTier',
        'inputTokenTiers' => 'InputTokenTiers',
        'model' => 'Model',
        'modelServiceId' => 'ModelServiceId',
        'modelServiceName' => 'ModelServiceName',
        'outputCostPointsPerMillion' => 'OutputCostPointsPerMillion',
        'videoCostPointsPerSecond' => 'VideoCostPointsPerSecond',
    ];

    public function validate()
    {
        if (\is_array($this->inputTokenTiers)) {
            Model::validateArray($this->inputTokenTiers);
        }
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

        if (null !== $this->effectiveEndTime) {
            $res['EffectiveEndTime'] = $this->effectiveEndTime;
        }

        if (null !== $this->effectiveStartTime) {
            $res['EffectiveStartTime'] = $this->effectiveStartTime;
        }

        if (null !== $this->effectiveTargetType) {
            $res['EffectiveTargetType'] = $this->effectiveTargetType;
        }

        if (null !== $this->effectiveTargetValue) {
            $res['EffectiveTargetValue'] = $this->effectiveTargetValue;
        }

        if (null !== $this->explicitCacheCostPointsPerMillion) {
            $res['ExplicitCacheCostPointsPerMillion'] = $this->explicitCacheCostPointsPerMillion;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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

        if (null !== $this->inputTokenTier) {
            $res['InputTokenTier'] = $this->inputTokenTier;
        }

        if (null !== $this->inputTokenTiers) {
            if (\is_array($this->inputTokenTiers)) {
                $res['InputTokenTiers'] = [];
                $n1 = 0;
                foreach ($this->inputTokenTiers as $item1) {
                    $res['InputTokenTiers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->modelServiceId) {
            $res['ModelServiceId'] = $this->modelServiceId;
        }

        if (null !== $this->modelServiceName) {
            $res['ModelServiceName'] = $this->modelServiceName;
        }

        if (null !== $this->outputCostPointsPerMillion) {
            $res['OutputCostPointsPerMillion'] = $this->outputCostPointsPerMillion;
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

        if (isset($map['EffectiveEndTime'])) {
            $model->effectiveEndTime = $map['EffectiveEndTime'];
        }

        if (isset($map['EffectiveStartTime'])) {
            $model->effectiveStartTime = $map['EffectiveStartTime'];
        }

        if (isset($map['EffectiveTargetType'])) {
            $model->effectiveTargetType = $map['EffectiveTargetType'];
        }

        if (isset($map['EffectiveTargetValue'])) {
            $model->effectiveTargetValue = $map['EffectiveTargetValue'];
        }

        if (isset($map['ExplicitCacheCostPointsPerMillion'])) {
            $model->explicitCacheCostPointsPerMillion = $map['ExplicitCacheCostPointsPerMillion'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
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

        if (isset($map['InputTokenTier'])) {
            $model->inputTokenTier = $map['InputTokenTier'];
        }

        if (isset($map['InputTokenTiers'])) {
            if (!empty($map['InputTokenTiers'])) {
                $model->inputTokenTiers = [];
                $n1 = 0;
                foreach ($map['InputTokenTiers'] as $item1) {
                    $model->inputTokenTiers[$n1] = inputTokenTiers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['ModelServiceId'])) {
            $model->modelServiceId = $map['ModelServiceId'];
        }

        if (isset($map['ModelServiceName'])) {
            $model->modelServiceName = $map['ModelServiceName'];
        }

        if (isset($map['OutputCostPointsPerMillion'])) {
            $model->outputCostPointsPerMillion = $map['OutputCostPointsPerMillion'];
        }

        if (isset($map['VideoCostPointsPerSecond'])) {
            $model->videoCostPointsPerSecond = $map['VideoCostPointsPerSecond'];
        }

        return $model;
    }
}
