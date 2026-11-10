<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ModelParameters\responseFormat;

class ModelParameters extends Model
{
    /**
     * @var bool
     */
    public $enableCacheControl;

    /**
     * @var bool
     */
    public $enableThinking;

    /**
     * @var string
     */
    public $extraBody;

    /**
     * @var float
     */
    public $frequencyPenalty;

    /**
     * @var int
     */
    public $maxCompletionTokens;

    /**
     * @var int
     */
    public $maxTokens;

    /**
     * @var float
     */
    public $presencePenalty;

    /**
     * @var string
     */
    public $reasoningEffort;

    /**
     * @var float
     */
    public $repetitionPenalty;

    /**
     * @var responseFormat
     */
    public $responseFormat;

    /**
     * @var int
     */
    public $seed;

    /**
     * @var string[]
     */
    public $stopSequences;

    /**
     * @var float
     */
    public $temperature;

    /**
     * @var int
     */
    public $thinkingBudget;

    /**
     * @var int
     */
    public $topK;

    /**
     * @var float
     */
    public $topP;
    protected $_name = [
        'enableCacheControl' => 'enableCacheControl',
        'enableThinking' => 'enableThinking',
        'extraBody' => 'extraBody',
        'frequencyPenalty' => 'frequencyPenalty',
        'maxCompletionTokens' => 'maxCompletionTokens',
        'maxTokens' => 'maxTokens',
        'presencePenalty' => 'presencePenalty',
        'reasoningEffort' => 'reasoningEffort',
        'repetitionPenalty' => 'repetitionPenalty',
        'responseFormat' => 'responseFormat',
        'seed' => 'seed',
        'stopSequences' => 'stopSequences',
        'temperature' => 'temperature',
        'thinkingBudget' => 'thinkingBudget',
        'topK' => 'topK',
        'topP' => 'topP',
    ];

    public function validate()
    {
        if (null !== $this->responseFormat) {
            $this->responseFormat->validate();
        }
        if (\is_array($this->stopSequences)) {
            Model::validateArray($this->stopSequences);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableCacheControl) {
            $res['enableCacheControl'] = $this->enableCacheControl;
        }

        if (null !== $this->enableThinking) {
            $res['enableThinking'] = $this->enableThinking;
        }

        if (null !== $this->extraBody) {
            $res['extraBody'] = $this->extraBody;
        }

        if (null !== $this->frequencyPenalty) {
            $res['frequencyPenalty'] = $this->frequencyPenalty;
        }

        if (null !== $this->maxCompletionTokens) {
            $res['maxCompletionTokens'] = $this->maxCompletionTokens;
        }

        if (null !== $this->maxTokens) {
            $res['maxTokens'] = $this->maxTokens;
        }

        if (null !== $this->presencePenalty) {
            $res['presencePenalty'] = $this->presencePenalty;
        }

        if (null !== $this->reasoningEffort) {
            $res['reasoningEffort'] = $this->reasoningEffort;
        }

        if (null !== $this->repetitionPenalty) {
            $res['repetitionPenalty'] = $this->repetitionPenalty;
        }

        if (null !== $this->responseFormat) {
            $res['responseFormat'] = null !== $this->responseFormat ? $this->responseFormat->toArray($noStream) : $this->responseFormat;
        }

        if (null !== $this->seed) {
            $res['seed'] = $this->seed;
        }

        if (null !== $this->stopSequences) {
            if (\is_array($this->stopSequences)) {
                $res['stopSequences'] = [];
                $n1 = 0;
                foreach ($this->stopSequences as $item1) {
                    $res['stopSequences'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->temperature) {
            $res['temperature'] = $this->temperature;
        }

        if (null !== $this->thinkingBudget) {
            $res['thinkingBudget'] = $this->thinkingBudget;
        }

        if (null !== $this->topK) {
            $res['topK'] = $this->topK;
        }

        if (null !== $this->topP) {
            $res['topP'] = $this->topP;
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
        if (isset($map['enableCacheControl'])) {
            $model->enableCacheControl = $map['enableCacheControl'];
        }

        if (isset($map['enableThinking'])) {
            $model->enableThinking = $map['enableThinking'];
        }

        if (isset($map['extraBody'])) {
            $model->extraBody = $map['extraBody'];
        }

        if (isset($map['frequencyPenalty'])) {
            $model->frequencyPenalty = $map['frequencyPenalty'];
        }

        if (isset($map['maxCompletionTokens'])) {
            $model->maxCompletionTokens = $map['maxCompletionTokens'];
        }

        if (isset($map['maxTokens'])) {
            $model->maxTokens = $map['maxTokens'];
        }

        if (isset($map['presencePenalty'])) {
            $model->presencePenalty = $map['presencePenalty'];
        }

        if (isset($map['reasoningEffort'])) {
            $model->reasoningEffort = $map['reasoningEffort'];
        }

        if (isset($map['repetitionPenalty'])) {
            $model->repetitionPenalty = $map['repetitionPenalty'];
        }

        if (isset($map['responseFormat'])) {
            $model->responseFormat = responseFormat::fromMap($map['responseFormat']);
        }

        if (isset($map['seed'])) {
            $model->seed = $map['seed'];
        }

        if (isset($map['stopSequences'])) {
            if (!empty($map['stopSequences'])) {
                $model->stopSequences = [];
                $n1 = 0;
                foreach ($map['stopSequences'] as $item1) {
                    $model->stopSequences[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['temperature'])) {
            $model->temperature = $map['temperature'];
        }

        if (isset($map['thinkingBudget'])) {
            $model->thinkingBudget = $map['thinkingBudget'];
        }

        if (isset($map['topK'])) {
            $model->topK = $map['topK'];
        }

        if (isset($map['topP'])) {
            $model->topP = $map['topP'];
        }

        return $model;
    }
}
