<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListLlmTemplatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListLlmTemplatesResponseBody\data\creditMultiplier;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListLlmTemplatesResponseBody\data\inferenceMetadata;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListLlmTemplatesResponseBody\data\prices;

class data extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var creditMultiplier
     */
    public $creditMultiplier;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $features;

    /**
     * @var inferenceMetadata
     */
    public $inferenceMetadata;

    /**
     * @var bool
     */
    public $isDefaultModel;

    /**
     * @var string
     */
    public $llmCode;

    /**
     * @var string
     */
    public $llmTemplateId;

    /**
     * @var mixed[]
     */
    public $modelInfo;

    /**
     * @var string
     */
    public $name;

    /**
     * @var prices[]
     */
    public $prices;

    /**
     * @var string
     */
    public $providerTemplateId;

    /**
     * @var string
     */
    public $publishedTime;

    /**
     * @var string
     */
    public $refScope;

    /**
     * @var int
     */
    public $routePolicyCount;
    protected $_name = [
        'config' => 'Config',
        'creditMultiplier' => 'CreditMultiplier',
        'description' => 'Description',
        'features' => 'Features',
        'inferenceMetadata' => 'InferenceMetadata',
        'isDefaultModel' => 'IsDefaultModel',
        'llmCode' => 'LlmCode',
        'llmTemplateId' => 'LlmTemplateId',
        'modelInfo' => 'ModelInfo',
        'name' => 'Name',
        'prices' => 'Prices',
        'providerTemplateId' => 'ProviderTemplateId',
        'publishedTime' => 'PublishedTime',
        'refScope' => 'RefScope',
        'routePolicyCount' => 'RoutePolicyCount',
    ];

    public function validate()
    {
        if (null !== $this->creditMultiplier) {
            $this->creditMultiplier->validate();
        }
        if (\is_array($this->features)) {
            Model::validateArray($this->features);
        }
        if (null !== $this->inferenceMetadata) {
            $this->inferenceMetadata->validate();
        }
        if (\is_array($this->modelInfo)) {
            Model::validateArray($this->modelInfo);
        }
        if (\is_array($this->prices)) {
            Model::validateArray($this->prices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->creditMultiplier) {
            $res['CreditMultiplier'] = null !== $this->creditMultiplier ? $this->creditMultiplier->toArray($noStream) : $this->creditMultiplier;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->features) {
            if (\is_array($this->features)) {
                $res['Features'] = [];
                $n1 = 0;
                foreach ($this->features as $item1) {
                    $res['Features'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->inferenceMetadata) {
            $res['InferenceMetadata'] = null !== $this->inferenceMetadata ? $this->inferenceMetadata->toArray($noStream) : $this->inferenceMetadata;
        }

        if (null !== $this->isDefaultModel) {
            $res['IsDefaultModel'] = $this->isDefaultModel;
        }

        if (null !== $this->llmCode) {
            $res['LlmCode'] = $this->llmCode;
        }

        if (null !== $this->llmTemplateId) {
            $res['LlmTemplateId'] = $this->llmTemplateId;
        }

        if (null !== $this->modelInfo) {
            if (\is_array($this->modelInfo)) {
                $res['ModelInfo'] = [];
                foreach ($this->modelInfo as $key1 => $value1) {
                    $res['ModelInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->prices) {
            if (\is_array($this->prices)) {
                $res['Prices'] = [];
                $n1 = 0;
                foreach ($this->prices as $item1) {
                    $res['Prices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->providerTemplateId) {
            $res['ProviderTemplateId'] = $this->providerTemplateId;
        }

        if (null !== $this->publishedTime) {
            $res['PublishedTime'] = $this->publishedTime;
        }

        if (null !== $this->refScope) {
            $res['RefScope'] = $this->refScope;
        }

        if (null !== $this->routePolicyCount) {
            $res['RoutePolicyCount'] = $this->routePolicyCount;
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
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['CreditMultiplier'])) {
            $model->creditMultiplier = creditMultiplier::fromMap($map['CreditMultiplier']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Features'])) {
            if (!empty($map['Features'])) {
                $model->features = [];
                $n1 = 0;
                foreach ($map['Features'] as $item1) {
                    $model->features[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InferenceMetadata'])) {
            $model->inferenceMetadata = inferenceMetadata::fromMap($map['InferenceMetadata']);
        }

        if (isset($map['IsDefaultModel'])) {
            $model->isDefaultModel = $map['IsDefaultModel'];
        }

        if (isset($map['LlmCode'])) {
            $model->llmCode = $map['LlmCode'];
        }

        if (isset($map['LlmTemplateId'])) {
            $model->llmTemplateId = $map['LlmTemplateId'];
        }

        if (isset($map['ModelInfo'])) {
            if (!empty($map['ModelInfo'])) {
                $model->modelInfo = [];
                foreach ($map['ModelInfo'] as $key1 => $value1) {
                    $model->modelInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Prices'])) {
            if (!empty($map['Prices'])) {
                $model->prices = [];
                $n1 = 0;
                foreach ($map['Prices'] as $item1) {
                    $model->prices[$n1] = prices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ProviderTemplateId'])) {
            $model->providerTemplateId = $map['ProviderTemplateId'];
        }

        if (isset($map['PublishedTime'])) {
            $model->publishedTime = $map['PublishedTime'];
        }

        if (isset($map['RefScope'])) {
            $model->refScope = $map['RefScope'];
        }

        if (isset($map['RoutePolicyCount'])) {
            $model->routePolicyCount = $map['RoutePolicyCount'];
        }

        return $model;
    }
}
