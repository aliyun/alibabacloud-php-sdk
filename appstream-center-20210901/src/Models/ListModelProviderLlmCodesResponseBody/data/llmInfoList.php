<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelProviderLlmCodesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelProviderLlmCodesResponseBody\data\llmInfoList\creditMultiplier;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelProviderLlmCodesResponseBody\data\llmInfoList\inferenceMetadata;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelProviderLlmCodesResponseBody\data\llmInfoList\prices;

class llmInfoList extends Model
{
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
     * @var string
     */
    public $llmCode;

    /**
     * @var string
     */
    public $modelBrand;

    /**
     * @var mixed[]
     */
    public $modelInfo;

    /**
     * @var string
     */
    public $modelSeries;

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
    public $publishedTime;

    /**
     * @var bool
     */
    public $recommended;

    /**
     * @var string
     */
    public $riskType;
    protected $_name = [
        'creditMultiplier' => 'CreditMultiplier',
        'description' => 'Description',
        'features' => 'Features',
        'inferenceMetadata' => 'InferenceMetadata',
        'llmCode' => 'LlmCode',
        'modelBrand' => 'ModelBrand',
        'modelInfo' => 'ModelInfo',
        'modelSeries' => 'ModelSeries',
        'name' => 'Name',
        'prices' => 'Prices',
        'publishedTime' => 'PublishedTime',
        'recommended' => 'Recommended',
        'riskType' => 'RiskType',
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

        if (null !== $this->llmCode) {
            $res['LlmCode'] = $this->llmCode;
        }

        if (null !== $this->modelBrand) {
            $res['ModelBrand'] = $this->modelBrand;
        }

        if (null !== $this->modelInfo) {
            if (\is_array($this->modelInfo)) {
                $res['ModelInfo'] = [];
                foreach ($this->modelInfo as $key1 => $value1) {
                    $res['ModelInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->modelSeries) {
            $res['ModelSeries'] = $this->modelSeries;
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

        if (null !== $this->publishedTime) {
            $res['PublishedTime'] = $this->publishedTime;
        }

        if (null !== $this->recommended) {
            $res['Recommended'] = $this->recommended;
        }

        if (null !== $this->riskType) {
            $res['RiskType'] = $this->riskType;
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

        if (isset($map['LlmCode'])) {
            $model->llmCode = $map['LlmCode'];
        }

        if (isset($map['ModelBrand'])) {
            $model->modelBrand = $map['ModelBrand'];
        }

        if (isset($map['ModelInfo'])) {
            if (!empty($map['ModelInfo'])) {
                $model->modelInfo = [];
                foreach ($map['ModelInfo'] as $key1 => $value1) {
                    $model->modelInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['ModelSeries'])) {
            $model->modelSeries = $map['ModelSeries'];
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

        if (isset($map['PublishedTime'])) {
            $model->publishedTime = $map['PublishedTime'];
        }

        if (isset($map['Recommended'])) {
            $model->recommended = $map['Recommended'];
        }

        if (isset($map['RiskType'])) {
            $model->riskType = $map['RiskType'];
        }

        return $model;
    }
}
