<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasQIService\V20260831\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\GuiChatCompletionStreamRequest\chatTemplateKwargs;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\GuiChatCompletionStreamRequest\messages;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\GuiChatCompletionStreamRequest\metadata;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\GuiChatCompletionStreamRequest\mmProcessorKwargs;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\GuiChatCompletionStreamRequest\responseFormat;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\GuiChatCompletionStreamRequest\streamOptions;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\GuiChatCompletionStreamRequest\structuredOutputs;

class GuiChatCompletionStreamRequest extends Model
{
    /**
     * @var int[]
     */
    public $allowedTokenIds;

    /**
     * @var string[]
     */
    public $badWords;

    /**
     * @var chatTemplateKwargs
     */
    public $chatTemplateKwargs;

    /**
     * @var float
     */
    public $frequencyPenalty;

    /**
     * @var bool
     */
    public $ignoreEos;

    /**
     * @var bool
     */
    public $includeReasoning;

    /**
     * @var bool
     */
    public $logprobs;

    /**
     * @var int
     */
    public $maxCompletionTokens;

    /**
     * @var int
     */
    public $maxTokens;

    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @var metadata
     */
    public $metadata;

    /**
     * @var float
     */
    public $minP;

    /**
     * @var int
     */
    public $minTokens;

    /**
     * @var mmProcessorKwargs
     */
    public $mmProcessorKwargs;

    /**
     * @var string
     */
    public $model;

    /**
     * @var int
     */
    public $n;

    /**
     * @var bool
     */
    public $parallelToolCalls;

    /**
     * @var float
     */
    public $presencePenalty;

    /**
     * @var int
     */
    public $promptLogprobs;

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
     * @var bool
     */
    public $skipSpecialTokens;

    /**
     * @var string[]
     */
    public $stop;

    /**
     * @var int[]
     */
    public $stopTokenIds;

    /**
     * @var bool
     */
    public $stream;

    /**
     * @var streamOptions
     */
    public $streamOptions;

    /**
     * @var structuredOutputs
     */
    public $structuredOutputs;

    /**
     * @var float
     */
    public $temperature;

    /**
     * @var int
     */
    public $topK;

    /**
     * @var int
     */
    public $topLogprobs;

    /**
     * @var float
     */
    public $topP;
    protected $_name = [
        'allowedTokenIds' => 'allowedTokenIds',
        'badWords' => 'badWords',
        'chatTemplateKwargs' => 'chatTemplateKwargs',
        'frequencyPenalty' => 'frequencyPenalty',
        'ignoreEos' => 'ignoreEos',
        'includeReasoning' => 'includeReasoning',
        'logprobs' => 'logprobs',
        'maxCompletionTokens' => 'maxCompletionTokens',
        'maxTokens' => 'maxTokens',
        'messages' => 'messages',
        'metadata' => 'metadata',
        'minP' => 'minP',
        'minTokens' => 'minTokens',
        'mmProcessorKwargs' => 'mmProcessorKwargs',
        'model' => 'model',
        'n' => 'n',
        'parallelToolCalls' => 'parallelToolCalls',
        'presencePenalty' => 'presencePenalty',
        'promptLogprobs' => 'promptLogprobs',
        'reasoningEffort' => 'reasoningEffort',
        'repetitionPenalty' => 'repetitionPenalty',
        'responseFormat' => 'responseFormat',
        'seed' => 'seed',
        'skipSpecialTokens' => 'skipSpecialTokens',
        'stop' => 'stop',
        'stopTokenIds' => 'stopTokenIds',
        'stream' => 'stream',
        'streamOptions' => 'streamOptions',
        'structuredOutputs' => 'structuredOutputs',
        'temperature' => 'temperature',
        'topK' => 'topK',
        'topLogprobs' => 'topLogprobs',
        'topP' => 'topP',
    ];

    public function validate()
    {
        if (\is_array($this->allowedTokenIds)) {
            Model::validateArray($this->allowedTokenIds);
        }
        if (\is_array($this->badWords)) {
            Model::validateArray($this->badWords);
        }
        if (null !== $this->chatTemplateKwargs) {
            $this->chatTemplateKwargs->validate();
        }
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        if (null !== $this->metadata) {
            $this->metadata->validate();
        }
        if (null !== $this->mmProcessorKwargs) {
            $this->mmProcessorKwargs->validate();
        }
        if (null !== $this->responseFormat) {
            $this->responseFormat->validate();
        }
        if (\is_array($this->stop)) {
            Model::validateArray($this->stop);
        }
        if (\is_array($this->stopTokenIds)) {
            Model::validateArray($this->stopTokenIds);
        }
        if (null !== $this->streamOptions) {
            $this->streamOptions->validate();
        }
        if (null !== $this->structuredOutputs) {
            $this->structuredOutputs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedTokenIds) {
            if (\is_array($this->allowedTokenIds)) {
                $res['allowedTokenIds'] = [];
                $n1 = 0;
                foreach ($this->allowedTokenIds as $item1) {
                    $res['allowedTokenIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->badWords) {
            if (\is_array($this->badWords)) {
                $res['badWords'] = [];
                $n1 = 0;
                foreach ($this->badWords as $item1) {
                    $res['badWords'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->chatTemplateKwargs) {
            $res['chatTemplateKwargs'] = null !== $this->chatTemplateKwargs ? $this->chatTemplateKwargs->toArray($noStream) : $this->chatTemplateKwargs;
        }

        if (null !== $this->frequencyPenalty) {
            $res['frequencyPenalty'] = $this->frequencyPenalty;
        }

        if (null !== $this->ignoreEos) {
            $res['ignoreEos'] = $this->ignoreEos;
        }

        if (null !== $this->includeReasoning) {
            $res['includeReasoning'] = $this->includeReasoning;
        }

        if (null !== $this->logprobs) {
            $res['logprobs'] = $this->logprobs;
        }

        if (null !== $this->maxCompletionTokens) {
            $res['maxCompletionTokens'] = $this->maxCompletionTokens;
        }

        if (null !== $this->maxTokens) {
            $res['maxTokens'] = $this->maxTokens;
        }

        if (null !== $this->messages) {
            if (\is_array($this->messages)) {
                $res['messages'] = [];
                $n1 = 0;
                foreach ($this->messages as $item1) {
                    $res['messages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metadata) {
            $res['metadata'] = null !== $this->metadata ? $this->metadata->toArray($noStream) : $this->metadata;
        }

        if (null !== $this->minP) {
            $res['minP'] = $this->minP;
        }

        if (null !== $this->minTokens) {
            $res['minTokens'] = $this->minTokens;
        }

        if (null !== $this->mmProcessorKwargs) {
            $res['mmProcessorKwargs'] = null !== $this->mmProcessorKwargs ? $this->mmProcessorKwargs->toArray($noStream) : $this->mmProcessorKwargs;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->n) {
            $res['n'] = $this->n;
        }

        if (null !== $this->parallelToolCalls) {
            $res['parallelToolCalls'] = $this->parallelToolCalls;
        }

        if (null !== $this->presencePenalty) {
            $res['presencePenalty'] = $this->presencePenalty;
        }

        if (null !== $this->promptLogprobs) {
            $res['promptLogprobs'] = $this->promptLogprobs;
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

        if (null !== $this->skipSpecialTokens) {
            $res['skipSpecialTokens'] = $this->skipSpecialTokens;
        }

        if (null !== $this->stop) {
            if (\is_array($this->stop)) {
                $res['stop'] = [];
                $n1 = 0;
                foreach ($this->stop as $item1) {
                    $res['stop'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->stopTokenIds) {
            if (\is_array($this->stopTokenIds)) {
                $res['stopTokenIds'] = [];
                $n1 = 0;
                foreach ($this->stopTokenIds as $item1) {
                    $res['stopTokenIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }

        if (null !== $this->streamOptions) {
            $res['streamOptions'] = null !== $this->streamOptions ? $this->streamOptions->toArray($noStream) : $this->streamOptions;
        }

        if (null !== $this->structuredOutputs) {
            $res['structuredOutputs'] = null !== $this->structuredOutputs ? $this->structuredOutputs->toArray($noStream) : $this->structuredOutputs;
        }

        if (null !== $this->temperature) {
            $res['temperature'] = $this->temperature;
        }

        if (null !== $this->topK) {
            $res['topK'] = $this->topK;
        }

        if (null !== $this->topLogprobs) {
            $res['topLogprobs'] = $this->topLogprobs;
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
        if (isset($map['allowedTokenIds'])) {
            if (!empty($map['allowedTokenIds'])) {
                $model->allowedTokenIds = [];
                $n1 = 0;
                foreach ($map['allowedTokenIds'] as $item1) {
                    $model->allowedTokenIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['badWords'])) {
            if (!empty($map['badWords'])) {
                $model->badWords = [];
                $n1 = 0;
                foreach ($map['badWords'] as $item1) {
                    $model->badWords[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['chatTemplateKwargs'])) {
            $model->chatTemplateKwargs = chatTemplateKwargs::fromMap($map['chatTemplateKwargs']);
        }

        if (isset($map['frequencyPenalty'])) {
            $model->frequencyPenalty = $map['frequencyPenalty'];
        }

        if (isset($map['ignoreEos'])) {
            $model->ignoreEos = $map['ignoreEos'];
        }

        if (isset($map['includeReasoning'])) {
            $model->includeReasoning = $map['includeReasoning'];
        }

        if (isset($map['logprobs'])) {
            $model->logprobs = $map['logprobs'];
        }

        if (isset($map['maxCompletionTokens'])) {
            $model->maxCompletionTokens = $map['maxCompletionTokens'];
        }

        if (isset($map['maxTokens'])) {
            $model->maxTokens = $map['maxTokens'];
        }

        if (isset($map['messages'])) {
            if (!empty($map['messages'])) {
                $model->messages = [];
                $n1 = 0;
                foreach ($map['messages'] as $item1) {
                    $model->messages[$n1] = messages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['metadata'])) {
            $model->metadata = metadata::fromMap($map['metadata']);
        }

        if (isset($map['minP'])) {
            $model->minP = $map['minP'];
        }

        if (isset($map['minTokens'])) {
            $model->minTokens = $map['minTokens'];
        }

        if (isset($map['mmProcessorKwargs'])) {
            $model->mmProcessorKwargs = mmProcessorKwargs::fromMap($map['mmProcessorKwargs']);
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['n'])) {
            $model->n = $map['n'];
        }

        if (isset($map['parallelToolCalls'])) {
            $model->parallelToolCalls = $map['parallelToolCalls'];
        }

        if (isset($map['presencePenalty'])) {
            $model->presencePenalty = $map['presencePenalty'];
        }

        if (isset($map['promptLogprobs'])) {
            $model->promptLogprobs = $map['promptLogprobs'];
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

        if (isset($map['skipSpecialTokens'])) {
            $model->skipSpecialTokens = $map['skipSpecialTokens'];
        }

        if (isset($map['stop'])) {
            if (!empty($map['stop'])) {
                $model->stop = [];
                $n1 = 0;
                foreach ($map['stop'] as $item1) {
                    $model->stop[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['stopTokenIds'])) {
            if (!empty($map['stopTokenIds'])) {
                $model->stopTokenIds = [];
                $n1 = 0;
                foreach ($map['stopTokenIds'] as $item1) {
                    $model->stopTokenIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }

        if (isset($map['streamOptions'])) {
            $model->streamOptions = streamOptions::fromMap($map['streamOptions']);
        }

        if (isset($map['structuredOutputs'])) {
            $model->structuredOutputs = structuredOutputs::fromMap($map['structuredOutputs']);
        }

        if (isset($map['temperature'])) {
            $model->temperature = $map['temperature'];
        }

        if (isset($map['topK'])) {
            $model->topK = $map['topK'];
        }

        if (isset($map['topLogprobs'])) {
            $model->topLogprobs = $map['topLogprobs'];
        }

        if (isset($map['topP'])) {
            $model->topP = $map['topP'];
        }

        return $model;
    }
}
