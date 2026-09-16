<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\AiChunkTransformParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\AiClassifyTransformParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\AiEmbedTransformParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\AiExtractTransformParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\AiFilterTransformParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\AiPrepSearchTransformParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\AiRedactTransformParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\AiSentimentAnalysisTransformParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\AiSummarizeTransformParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\AiTranslateTransformParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\BaiLianAgentTransformParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DashScopeTransformParameters;

class transforms extends Model
{
    /**
     * @var AiChunkTransformParameters
     */
    public $aiChunkTransformParameters;

    /**
     * @var AiClassifyTransformParameters
     */
    public $aiClassifyTransformParameters;

    /**
     * @var AiEmbedTransformParameters
     */
    public $aiEmbedTransformParameters;

    /**
     * @var AiExtractTransformParameters
     */
    public $aiExtractTransformParameters;

    /**
     * @var AiFilterTransformParameters
     */
    public $aiFilterTransformParameters;

    /**
     * @var AiPrepSearchTransformParameters
     */
    public $aiPrepSearchTransformParameters;

    /**
     * @var AiRedactTransformParameters
     */
    public $aiRedactTransformParameters;

    /**
     * @var AiSentimentAnalysisTransformParameters
     */
    public $aiSentimentAnalysisTransformParameters;

    /**
     * @var AiSummarizeTransformParameters
     */
    public $aiSummarizeTransformParameters;

    /**
     * @var AiTranslateTransformParameters
     */
    public $aiTranslateTransformParameters;

    /**
     * @var string
     */
    public $arn;

    /**
     * @var BaiLianAgentTransformParameters
     */
    public $baiLianAgentTransformParameters;

    /**
     * @var DashScopeTransformParameters
     */
    public $dashScopeTransformParameters;
    protected $_name = [
        'aiChunkTransformParameters' => 'AiChunkTransformParameters',
        'aiClassifyTransformParameters' => 'AiClassifyTransformParameters',
        'aiEmbedTransformParameters' => 'AiEmbedTransformParameters',
        'aiExtractTransformParameters' => 'AiExtractTransformParameters',
        'aiFilterTransformParameters' => 'AiFilterTransformParameters',
        'aiPrepSearchTransformParameters' => 'AiPrepSearchTransformParameters',
        'aiRedactTransformParameters' => 'AiRedactTransformParameters',
        'aiSentimentAnalysisTransformParameters' => 'AiSentimentAnalysisTransformParameters',
        'aiSummarizeTransformParameters' => 'AiSummarizeTransformParameters',
        'aiTranslateTransformParameters' => 'AiTranslateTransformParameters',
        'arn' => 'Arn',
        'baiLianAgentTransformParameters' => 'BaiLianAgentTransformParameters',
        'dashScopeTransformParameters' => 'DashScopeTransformParameters',
    ];

    public function validate()
    {
        if (null !== $this->aiChunkTransformParameters) {
            $this->aiChunkTransformParameters->validate();
        }
        if (null !== $this->aiClassifyTransformParameters) {
            $this->aiClassifyTransformParameters->validate();
        }
        if (null !== $this->aiEmbedTransformParameters) {
            $this->aiEmbedTransformParameters->validate();
        }
        if (null !== $this->aiExtractTransformParameters) {
            $this->aiExtractTransformParameters->validate();
        }
        if (null !== $this->aiFilterTransformParameters) {
            $this->aiFilterTransformParameters->validate();
        }
        if (null !== $this->aiPrepSearchTransformParameters) {
            $this->aiPrepSearchTransformParameters->validate();
        }
        if (null !== $this->aiRedactTransformParameters) {
            $this->aiRedactTransformParameters->validate();
        }
        if (null !== $this->aiSentimentAnalysisTransformParameters) {
            $this->aiSentimentAnalysisTransformParameters->validate();
        }
        if (null !== $this->aiSummarizeTransformParameters) {
            $this->aiSummarizeTransformParameters->validate();
        }
        if (null !== $this->aiTranslateTransformParameters) {
            $this->aiTranslateTransformParameters->validate();
        }
        if (null !== $this->baiLianAgentTransformParameters) {
            $this->baiLianAgentTransformParameters->validate();
        }
        if (null !== $this->dashScopeTransformParameters) {
            $this->dashScopeTransformParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiChunkTransformParameters) {
            $res['AiChunkTransformParameters'] = null !== $this->aiChunkTransformParameters ? $this->aiChunkTransformParameters->toArray($noStream) : $this->aiChunkTransformParameters;
        }

        if (null !== $this->aiClassifyTransformParameters) {
            $res['AiClassifyTransformParameters'] = null !== $this->aiClassifyTransformParameters ? $this->aiClassifyTransformParameters->toArray($noStream) : $this->aiClassifyTransformParameters;
        }

        if (null !== $this->aiEmbedTransformParameters) {
            $res['AiEmbedTransformParameters'] = null !== $this->aiEmbedTransformParameters ? $this->aiEmbedTransformParameters->toArray($noStream) : $this->aiEmbedTransformParameters;
        }

        if (null !== $this->aiExtractTransformParameters) {
            $res['AiExtractTransformParameters'] = null !== $this->aiExtractTransformParameters ? $this->aiExtractTransformParameters->toArray($noStream) : $this->aiExtractTransformParameters;
        }

        if (null !== $this->aiFilterTransformParameters) {
            $res['AiFilterTransformParameters'] = null !== $this->aiFilterTransformParameters ? $this->aiFilterTransformParameters->toArray($noStream) : $this->aiFilterTransformParameters;
        }

        if (null !== $this->aiPrepSearchTransformParameters) {
            $res['AiPrepSearchTransformParameters'] = null !== $this->aiPrepSearchTransformParameters ? $this->aiPrepSearchTransformParameters->toArray($noStream) : $this->aiPrepSearchTransformParameters;
        }

        if (null !== $this->aiRedactTransformParameters) {
            $res['AiRedactTransformParameters'] = null !== $this->aiRedactTransformParameters ? $this->aiRedactTransformParameters->toArray($noStream) : $this->aiRedactTransformParameters;
        }

        if (null !== $this->aiSentimentAnalysisTransformParameters) {
            $res['AiSentimentAnalysisTransformParameters'] = null !== $this->aiSentimentAnalysisTransformParameters ? $this->aiSentimentAnalysisTransformParameters->toArray($noStream) : $this->aiSentimentAnalysisTransformParameters;
        }

        if (null !== $this->aiSummarizeTransformParameters) {
            $res['AiSummarizeTransformParameters'] = null !== $this->aiSummarizeTransformParameters ? $this->aiSummarizeTransformParameters->toArray($noStream) : $this->aiSummarizeTransformParameters;
        }

        if (null !== $this->aiTranslateTransformParameters) {
            $res['AiTranslateTransformParameters'] = null !== $this->aiTranslateTransformParameters ? $this->aiTranslateTransformParameters->toArray($noStream) : $this->aiTranslateTransformParameters;
        }

        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }

        if (null !== $this->baiLianAgentTransformParameters) {
            $res['BaiLianAgentTransformParameters'] = null !== $this->baiLianAgentTransformParameters ? $this->baiLianAgentTransformParameters->toArray($noStream) : $this->baiLianAgentTransformParameters;
        }

        if (null !== $this->dashScopeTransformParameters) {
            $res['DashScopeTransformParameters'] = null !== $this->dashScopeTransformParameters ? $this->dashScopeTransformParameters->toArray($noStream) : $this->dashScopeTransformParameters;
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
        if (isset($map['AiChunkTransformParameters'])) {
            $model->aiChunkTransformParameters = AiChunkTransformParameters::fromMap($map['AiChunkTransformParameters']);
        }

        if (isset($map['AiClassifyTransformParameters'])) {
            $model->aiClassifyTransformParameters = AiClassifyTransformParameters::fromMap($map['AiClassifyTransformParameters']);
        }

        if (isset($map['AiEmbedTransformParameters'])) {
            $model->aiEmbedTransformParameters = AiEmbedTransformParameters::fromMap($map['AiEmbedTransformParameters']);
        }

        if (isset($map['AiExtractTransformParameters'])) {
            $model->aiExtractTransformParameters = AiExtractTransformParameters::fromMap($map['AiExtractTransformParameters']);
        }

        if (isset($map['AiFilterTransformParameters'])) {
            $model->aiFilterTransformParameters = AiFilterTransformParameters::fromMap($map['AiFilterTransformParameters']);
        }

        if (isset($map['AiPrepSearchTransformParameters'])) {
            $model->aiPrepSearchTransformParameters = AiPrepSearchTransformParameters::fromMap($map['AiPrepSearchTransformParameters']);
        }

        if (isset($map['AiRedactTransformParameters'])) {
            $model->aiRedactTransformParameters = AiRedactTransformParameters::fromMap($map['AiRedactTransformParameters']);
        }

        if (isset($map['AiSentimentAnalysisTransformParameters'])) {
            $model->aiSentimentAnalysisTransformParameters = AiSentimentAnalysisTransformParameters::fromMap($map['AiSentimentAnalysisTransformParameters']);
        }

        if (isset($map['AiSummarizeTransformParameters'])) {
            $model->aiSummarizeTransformParameters = AiSummarizeTransformParameters::fromMap($map['AiSummarizeTransformParameters']);
        }

        if (isset($map['AiTranslateTransformParameters'])) {
            $model->aiTranslateTransformParameters = AiTranslateTransformParameters::fromMap($map['AiTranslateTransformParameters']);
        }

        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }

        if (isset($map['BaiLianAgentTransformParameters'])) {
            $model->baiLianAgentTransformParameters = BaiLianAgentTransformParameters::fromMap($map['BaiLianAgentTransformParameters']);
        }

        if (isset($map['DashScopeTransformParameters'])) {
            $model->dashScopeTransformParameters = DashScopeTransformParameters::fromMap($map['DashScopeTransformParameters']);
        }

        return $model;
    }
}
