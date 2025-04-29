<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\tokenCalculate;

class bizContext extends Model
{
    /**
     * @var string
     */
    public $currentStep;

    /**
     * @var generatedContent
     */
    public $generatedContent;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $nextStep;

    /**
     * @var string[]
     */
    public $recommendSearchQueryList;

    /**
     * @var string[]
     */
    public $searchKeywords;

    /**
     * @var string[]
     */
    public $searchQueryList;

    /**
     * @var string
     */
    public $supplementDataType;

    /**
     * @var bool
     */
    public $supplementEnable;

    /**
     * @var tokenCalculate
     */
    public $tokenCalculate;
    protected $_name = [
        'currentStep' => 'CurrentStep',
        'generatedContent' => 'GeneratedContent',
        'modelId' => 'ModelId',
        'nextStep' => 'NextStep',
        'recommendSearchQueryList' => 'RecommendSearchQueryList',
        'searchKeywords' => 'SearchKeywords',
        'searchQueryList' => 'SearchQueryList',
        'supplementDataType' => 'SupplementDataType',
        'supplementEnable' => 'SupplementEnable',
        'tokenCalculate' => 'TokenCalculate',
    ];

    public function validate()
    {
        if (null !== $this->generatedContent) {
            $this->generatedContent->validate();
        }
        if (\is_array($this->recommendSearchQueryList)) {
            Model::validateArray($this->recommendSearchQueryList);
        }
        if (\is_array($this->searchKeywords)) {
            Model::validateArray($this->searchKeywords);
        }
        if (\is_array($this->searchQueryList)) {
            Model::validateArray($this->searchQueryList);
        }
        if (null !== $this->tokenCalculate) {
            $this->tokenCalculate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentStep) {
            $res['CurrentStep'] = $this->currentStep;
        }

        if (null !== $this->generatedContent) {
            $res['GeneratedContent'] = null !== $this->generatedContent ? $this->generatedContent->toArray($noStream) : $this->generatedContent;
        }

        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }

        if (null !== $this->nextStep) {
            $res['NextStep'] = $this->nextStep;
        }

        if (null !== $this->recommendSearchQueryList) {
            if (\is_array($this->recommendSearchQueryList)) {
                $res['RecommendSearchQueryList'] = [];
                $n1 = 0;
                foreach ($this->recommendSearchQueryList as $item1) {
                    $res['RecommendSearchQueryList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->searchKeywords) {
            if (\is_array($this->searchKeywords)) {
                $res['SearchKeywords'] = [];
                $n1 = 0;
                foreach ($this->searchKeywords as $item1) {
                    $res['SearchKeywords'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->searchQueryList) {
            if (\is_array($this->searchQueryList)) {
                $res['SearchQueryList'] = [];
                $n1 = 0;
                foreach ($this->searchQueryList as $item1) {
                    $res['SearchQueryList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->supplementDataType) {
            $res['SupplementDataType'] = $this->supplementDataType;
        }

        if (null !== $this->supplementEnable) {
            $res['SupplementEnable'] = $this->supplementEnable;
        }

        if (null !== $this->tokenCalculate) {
            $res['TokenCalculate'] = null !== $this->tokenCalculate ? $this->tokenCalculate->toArray($noStream) : $this->tokenCalculate;
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
        if (isset($map['CurrentStep'])) {
            $model->currentStep = $map['CurrentStep'];
        }

        if (isset($map['GeneratedContent'])) {
            $model->generatedContent = generatedContent::fromMap($map['GeneratedContent']);
        }

        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }

        if (isset($map['NextStep'])) {
            $model->nextStep = $map['NextStep'];
        }

        if (isset($map['RecommendSearchQueryList'])) {
            if (!empty($map['RecommendSearchQueryList'])) {
                $model->recommendSearchQueryList = [];
                $n1 = 0;
                foreach ($map['RecommendSearchQueryList'] as $item1) {
                    $model->recommendSearchQueryList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SearchKeywords'])) {
            if (!empty($map['SearchKeywords'])) {
                $model->searchKeywords = [];
                $n1 = 0;
                foreach ($map['SearchKeywords'] as $item1) {
                    $model->searchKeywords[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SearchQueryList'])) {
            if (!empty($map['SearchQueryList'])) {
                $model->searchQueryList = [];
                $n1 = 0;
                foreach ($map['SearchQueryList'] as $item1) {
                    $model->searchQueryList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SupplementDataType'])) {
            $model->supplementDataType = $map['SupplementDataType'];
        }

        if (isset($map['SupplementEnable'])) {
            $model->supplementEnable = $map['SupplementEnable'];
        }

        if (isset($map['TokenCalculate'])) {
            $model->tokenCalculate = tokenCalculate::fromMap($map['TokenCalculate']);
        }

        return $model;
    }
}
