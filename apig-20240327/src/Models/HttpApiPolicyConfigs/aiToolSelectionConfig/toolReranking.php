<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs\aiToolSelectionConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs\aiToolSelectionConfig\toolReranking\modelService;

class toolReranking extends Model
{
    /**
     * @var string
     */
    public $fallbackStrategy;

    /**
     * @var string
     */
    public $filteringMethod;

    /**
     * @var modelService
     */
    public $modelService;

    /**
     * @var float
     */
    public $scoreThreshold;

    /**
     * @var int
     */
    public $topKPercent;

    /**
     * @var int
     */
    public $topNCount;
    protected $_name = [
        'fallbackStrategy' => 'fallbackStrategy',
        'filteringMethod' => 'filteringMethod',
        'modelService' => 'modelService',
        'scoreThreshold' => 'scoreThreshold',
        'topKPercent' => 'topKPercent',
        'topNCount' => 'topNCount',
    ];

    public function validate()
    {
        if (null !== $this->modelService) {
            $this->modelService->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fallbackStrategy) {
            $res['fallbackStrategy'] = $this->fallbackStrategy;
        }

        if (null !== $this->filteringMethod) {
            $res['filteringMethod'] = $this->filteringMethod;
        }

        if (null !== $this->modelService) {
            $res['modelService'] = null !== $this->modelService ? $this->modelService->toArray($noStream) : $this->modelService;
        }

        if (null !== $this->scoreThreshold) {
            $res['scoreThreshold'] = $this->scoreThreshold;
        }

        if (null !== $this->topKPercent) {
            $res['topKPercent'] = $this->topKPercent;
        }

        if (null !== $this->topNCount) {
            $res['topNCount'] = $this->topNCount;
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
        if (isset($map['fallbackStrategy'])) {
            $model->fallbackStrategy = $map['fallbackStrategy'];
        }

        if (isset($map['filteringMethod'])) {
            $model->filteringMethod = $map['filteringMethod'];
        }

        if (isset($map['modelService'])) {
            $model->modelService = modelService::fromMap($map['modelService']);
        }

        if (isset($map['scoreThreshold'])) {
            $model->scoreThreshold = $map['scoreThreshold'];
        }

        if (isset($map['topKPercent'])) {
            $model->topKPercent = $map['topKPercent'];
        }

        if (isset($map['topNCount'])) {
            $model->topNCount = $map['topNCount'];
        }

        return $model;
    }
}
