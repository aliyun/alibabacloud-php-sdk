<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\tokenCalculate;
use AlibabaCloud\Tea\Model;

class bizContext extends Model
{
    /**
     * @example 您想了解关于xx的哪些信息？
     *
     * @var string
     */
    public $askUser;

    /**
     * @var string[]
     */
    public $askUserKeywords;

    /**
     * @example start
     *
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
     * @example search
     *
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
     * @example searchQuery
     *
     * @var string
     */
    public $supplementDataType;

    /**
     * @example true
     *
     * @var bool
     */
    public $supplementEnable;

    /**
     * @var tokenCalculate
     */
    public $tokenCalculate;
    protected $_name = [
        'askUser' => 'AskUser',
        'askUserKeywords' => 'AskUserKeywords',
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->askUser) {
            $res['AskUser'] = $this->askUser;
        }
        if (null !== $this->askUserKeywords) {
            $res['AskUserKeywords'] = $this->askUserKeywords;
        }
        if (null !== $this->currentStep) {
            $res['CurrentStep'] = $this->currentStep;
        }
        if (null !== $this->generatedContent) {
            $res['GeneratedContent'] = null !== $this->generatedContent ? $this->generatedContent->toMap() : null;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->nextStep) {
            $res['NextStep'] = $this->nextStep;
        }
        if (null !== $this->recommendSearchQueryList) {
            $res['RecommendSearchQueryList'] = $this->recommendSearchQueryList;
        }
        if (null !== $this->searchKeywords) {
            $res['SearchKeywords'] = $this->searchKeywords;
        }
        if (null !== $this->searchQueryList) {
            $res['SearchQueryList'] = $this->searchQueryList;
        }
        if (null !== $this->supplementDataType) {
            $res['SupplementDataType'] = $this->supplementDataType;
        }
        if (null !== $this->supplementEnable) {
            $res['SupplementEnable'] = $this->supplementEnable;
        }
        if (null !== $this->tokenCalculate) {
            $res['TokenCalculate'] = null !== $this->tokenCalculate ? $this->tokenCalculate->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bizContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AskUser'])) {
            $model->askUser = $map['AskUser'];
        }
        if (isset($map['AskUserKeywords'])) {
            if (!empty($map['AskUserKeywords'])) {
                $model->askUserKeywords = $map['AskUserKeywords'];
            }
        }
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
                $model->recommendSearchQueryList = $map['RecommendSearchQueryList'];
            }
        }
        if (isset($map['SearchKeywords'])) {
            if (!empty($map['SearchKeywords'])) {
                $model->searchKeywords = $map['SearchKeywords'];
            }
        }
        if (isset($map['SearchQueryList'])) {
            if (!empty($map['SearchQueryList'])) {
                $model->searchQueryList = $map['SearchQueryList'];
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
