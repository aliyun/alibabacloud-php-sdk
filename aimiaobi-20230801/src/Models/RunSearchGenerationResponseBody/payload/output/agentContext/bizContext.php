<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent;
use AlibabaCloud\Tea\Model;

class bizContext extends Model
{
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
    protected $_name = [
        'currentStep'              => 'CurrentStep',
        'generatedContent'         => 'GeneratedContent',
        'nextStep'                 => 'NextStep',
        'recommendSearchQueryList' => 'RecommendSearchQueryList',
        'searchKeywords'           => 'SearchKeywords',
        'searchQueryList'          => 'SearchQueryList',
        'supplementDataType'       => 'SupplementDataType',
        'supplementEnable'         => 'SupplementEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentStep) {
            $res['CurrentStep'] = $this->currentStep;
        }
        if (null !== $this->generatedContent) {
            $res['GeneratedContent'] = null !== $this->generatedContent ? $this->generatedContent->toMap() : null;
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
        if (isset($map['CurrentStep'])) {
            $model->currentStep = $map['CurrentStep'];
        }
        if (isset($map['GeneratedContent'])) {
            $model->generatedContent = generatedContent::fromMap($map['GeneratedContent']);
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

        return $model;
    }
}
