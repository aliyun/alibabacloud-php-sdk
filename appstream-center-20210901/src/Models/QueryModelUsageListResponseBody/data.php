<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryModelUsageListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryModelUsageListResponseBody\data\creditMultiplier;

class data extends Model
{
    /**
     * @var int
     */
    public $avgTtftMs;

    /**
     * @var float
     */
    public $cacheHitRate;

    /**
     * @var int
     */
    public $callCount;

    /**
     * @var int
     */
    public $contextWindow;

    /**
     * @var creditMultiplier
     */
    public $creditMultiplier;

    /**
     * @var string
     */
    public $description;

    /**
     * @var float
     */
    public $explicitCacheCreationPointsRate;

    /**
     * @var float
     */
    public $explicitCacheHitPointsRate;

    /**
     * @var int
     */
    public $failureCount;

    /**
     * @var string[]
     */
    public $featureList;

    /**
     * @var string
     */
    public $iconUrl;

    /**
     * @var float
     */
    public $implicitCacheHitPointsRate;

    /**
     * @var float
     */
    public $inputPointsRate;

    /**
     * @var bool
     */
    public $isNew;

    /**
     * @var string
     */
    public $llmCode;

    /**
     * @var int
     */
    public $maxOutput;

    /**
     * @var string
     */
    public $modelBrandName;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var float
     */
    public $normalInputPointsRate;

    /**
     * @var float
     */
    public $outputPointsRate;

    /**
     * @var float
     */
    public $pointsConsumption;

    /**
     * @var float
     */
    public $successRate;

    /**
     * @var float
     */
    public $toolCallPointsRate;

    /**
     * @var int
     */
    public $ttftP95Ms;
    protected $_name = [
        'avgTtftMs' => 'AvgTtftMs',
        'cacheHitRate' => 'CacheHitRate',
        'callCount' => 'CallCount',
        'contextWindow' => 'ContextWindow',
        'creditMultiplier' => 'CreditMultiplier',
        'description' => 'Description',
        'explicitCacheCreationPointsRate' => 'ExplicitCacheCreationPointsRate',
        'explicitCacheHitPointsRate' => 'ExplicitCacheHitPointsRate',
        'failureCount' => 'FailureCount',
        'featureList' => 'FeatureList',
        'iconUrl' => 'IconUrl',
        'implicitCacheHitPointsRate' => 'ImplicitCacheHitPointsRate',
        'inputPointsRate' => 'InputPointsRate',
        'isNew' => 'IsNew',
        'llmCode' => 'LlmCode',
        'maxOutput' => 'MaxOutput',
        'modelBrandName' => 'ModelBrandName',
        'modelName' => 'ModelName',
        'normalInputPointsRate' => 'NormalInputPointsRate',
        'outputPointsRate' => 'OutputPointsRate',
        'pointsConsumption' => 'PointsConsumption',
        'successRate' => 'SuccessRate',
        'toolCallPointsRate' => 'ToolCallPointsRate',
        'ttftP95Ms' => 'TtftP95Ms',
    ];

    public function validate()
    {
        if (null !== $this->creditMultiplier) {
            $this->creditMultiplier->validate();
        }
        if (\is_array($this->featureList)) {
            Model::validateArray($this->featureList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avgTtftMs) {
            $res['AvgTtftMs'] = $this->avgTtftMs;
        }

        if (null !== $this->cacheHitRate) {
            $res['CacheHitRate'] = $this->cacheHitRate;
        }

        if (null !== $this->callCount) {
            $res['CallCount'] = $this->callCount;
        }

        if (null !== $this->contextWindow) {
            $res['ContextWindow'] = $this->contextWindow;
        }

        if (null !== $this->creditMultiplier) {
            $res['CreditMultiplier'] = null !== $this->creditMultiplier ? $this->creditMultiplier->toArray($noStream) : $this->creditMultiplier;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->explicitCacheCreationPointsRate) {
            $res['ExplicitCacheCreationPointsRate'] = $this->explicitCacheCreationPointsRate;
        }

        if (null !== $this->explicitCacheHitPointsRate) {
            $res['ExplicitCacheHitPointsRate'] = $this->explicitCacheHitPointsRate;
        }

        if (null !== $this->failureCount) {
            $res['FailureCount'] = $this->failureCount;
        }

        if (null !== $this->featureList) {
            if (\is_array($this->featureList)) {
                $res['FeatureList'] = [];
                $n1 = 0;
                foreach ($this->featureList as $item1) {
                    $res['FeatureList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->iconUrl) {
            $res['IconUrl'] = $this->iconUrl;
        }

        if (null !== $this->implicitCacheHitPointsRate) {
            $res['ImplicitCacheHitPointsRate'] = $this->implicitCacheHitPointsRate;
        }

        if (null !== $this->inputPointsRate) {
            $res['InputPointsRate'] = $this->inputPointsRate;
        }

        if (null !== $this->isNew) {
            $res['IsNew'] = $this->isNew;
        }

        if (null !== $this->llmCode) {
            $res['LlmCode'] = $this->llmCode;
        }

        if (null !== $this->maxOutput) {
            $res['MaxOutput'] = $this->maxOutput;
        }

        if (null !== $this->modelBrandName) {
            $res['ModelBrandName'] = $this->modelBrandName;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->normalInputPointsRate) {
            $res['NormalInputPointsRate'] = $this->normalInputPointsRate;
        }

        if (null !== $this->outputPointsRate) {
            $res['OutputPointsRate'] = $this->outputPointsRate;
        }

        if (null !== $this->pointsConsumption) {
            $res['PointsConsumption'] = $this->pointsConsumption;
        }

        if (null !== $this->successRate) {
            $res['SuccessRate'] = $this->successRate;
        }

        if (null !== $this->toolCallPointsRate) {
            $res['ToolCallPointsRate'] = $this->toolCallPointsRate;
        }

        if (null !== $this->ttftP95Ms) {
            $res['TtftP95Ms'] = $this->ttftP95Ms;
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
        if (isset($map['AvgTtftMs'])) {
            $model->avgTtftMs = $map['AvgTtftMs'];
        }

        if (isset($map['CacheHitRate'])) {
            $model->cacheHitRate = $map['CacheHitRate'];
        }

        if (isset($map['CallCount'])) {
            $model->callCount = $map['CallCount'];
        }

        if (isset($map['ContextWindow'])) {
            $model->contextWindow = $map['ContextWindow'];
        }

        if (isset($map['CreditMultiplier'])) {
            $model->creditMultiplier = creditMultiplier::fromMap($map['CreditMultiplier']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ExplicitCacheCreationPointsRate'])) {
            $model->explicitCacheCreationPointsRate = $map['ExplicitCacheCreationPointsRate'];
        }

        if (isset($map['ExplicitCacheHitPointsRate'])) {
            $model->explicitCacheHitPointsRate = $map['ExplicitCacheHitPointsRate'];
        }

        if (isset($map['FailureCount'])) {
            $model->failureCount = $map['FailureCount'];
        }

        if (isset($map['FeatureList'])) {
            if (!empty($map['FeatureList'])) {
                $model->featureList = [];
                $n1 = 0;
                foreach ($map['FeatureList'] as $item1) {
                    $model->featureList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IconUrl'])) {
            $model->iconUrl = $map['IconUrl'];
        }

        if (isset($map['ImplicitCacheHitPointsRate'])) {
            $model->implicitCacheHitPointsRate = $map['ImplicitCacheHitPointsRate'];
        }

        if (isset($map['InputPointsRate'])) {
            $model->inputPointsRate = $map['InputPointsRate'];
        }

        if (isset($map['IsNew'])) {
            $model->isNew = $map['IsNew'];
        }

        if (isset($map['LlmCode'])) {
            $model->llmCode = $map['LlmCode'];
        }

        if (isset($map['MaxOutput'])) {
            $model->maxOutput = $map['MaxOutput'];
        }

        if (isset($map['ModelBrandName'])) {
            $model->modelBrandName = $map['ModelBrandName'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['NormalInputPointsRate'])) {
            $model->normalInputPointsRate = $map['NormalInputPointsRate'];
        }

        if (isset($map['OutputPointsRate'])) {
            $model->outputPointsRate = $map['OutputPointsRate'];
        }

        if (isset($map['PointsConsumption'])) {
            $model->pointsConsumption = $map['PointsConsumption'];
        }

        if (isset($map['SuccessRate'])) {
            $model->successRate = $map['SuccessRate'];
        }

        if (isset($map['ToolCallPointsRate'])) {
            $model->toolCallPointsRate = $map['ToolCallPointsRate'];
        }

        if (isset($map['TtftP95Ms'])) {
            $model->ttftP95Ms = $map['TtftP95Ms'];
        }

        return $model;
    }
}
