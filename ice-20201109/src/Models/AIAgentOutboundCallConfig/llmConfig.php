<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig\llmConfig\functionMap;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig\llmConfig\llmHistory;

class llmConfig extends Model
{
    /**
     * @var string
     */
    public $bailianAppParams;

    /**
     * @var functionMap[]
     */
    public $functionMap;

    /**
     * @var bool
     */
    public $llmCompleteReply;

    /**
     * @var llmHistory[]
     */
    public $llmHistory;

    /**
     * @var int
     */
    public $llmHistoryLimit;

    /**
     * @var string
     */
    public $llmSystemPrompt;

    /**
     * @var string
     */
    public $openAIExtraQuery;

    /**
     * @var string
     */
    public $outputMaxDelay;

    /**
     * @var int
     */
    public $outputMinLength;
    protected $_name = [
        'bailianAppParams' => 'BailianAppParams',
        'functionMap' => 'FunctionMap',
        'llmCompleteReply' => 'LlmCompleteReply',
        'llmHistory' => 'LlmHistory',
        'llmHistoryLimit' => 'LlmHistoryLimit',
        'llmSystemPrompt' => 'LlmSystemPrompt',
        'openAIExtraQuery' => 'OpenAIExtraQuery',
        'outputMaxDelay' => 'OutputMaxDelay',
        'outputMinLength' => 'OutputMinLength',
    ];

    public function validate()
    {
        if (\is_array($this->functionMap)) {
            Model::validateArray($this->functionMap);
        }
        if (\is_array($this->llmHistory)) {
            Model::validateArray($this->llmHistory);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bailianAppParams) {
            $res['BailianAppParams'] = $this->bailianAppParams;
        }

        if (null !== $this->functionMap) {
            if (\is_array($this->functionMap)) {
                $res['FunctionMap'] = [];
                $n1 = 0;
                foreach ($this->functionMap as $item1) {
                    $res['FunctionMap'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->llmCompleteReply) {
            $res['LlmCompleteReply'] = $this->llmCompleteReply;
        }

        if (null !== $this->llmHistory) {
            if (\is_array($this->llmHistory)) {
                $res['LlmHistory'] = [];
                $n1 = 0;
                foreach ($this->llmHistory as $item1) {
                    $res['LlmHistory'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->llmHistoryLimit) {
            $res['LlmHistoryLimit'] = $this->llmHistoryLimit;
        }

        if (null !== $this->llmSystemPrompt) {
            $res['LlmSystemPrompt'] = $this->llmSystemPrompt;
        }

        if (null !== $this->openAIExtraQuery) {
            $res['OpenAIExtraQuery'] = $this->openAIExtraQuery;
        }

        if (null !== $this->outputMaxDelay) {
            $res['OutputMaxDelay'] = $this->outputMaxDelay;
        }

        if (null !== $this->outputMinLength) {
            $res['OutputMinLength'] = $this->outputMinLength;
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
        if (isset($map['BailianAppParams'])) {
            $model->bailianAppParams = $map['BailianAppParams'];
        }

        if (isset($map['FunctionMap'])) {
            if (!empty($map['FunctionMap'])) {
                $model->functionMap = [];
                $n1 = 0;
                foreach ($map['FunctionMap'] as $item1) {
                    $model->functionMap[$n1] = functionMap::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LlmCompleteReply'])) {
            $model->llmCompleteReply = $map['LlmCompleteReply'];
        }

        if (isset($map['LlmHistory'])) {
            if (!empty($map['LlmHistory'])) {
                $model->llmHistory = [];
                $n1 = 0;
                foreach ($map['LlmHistory'] as $item1) {
                    $model->llmHistory[$n1] = llmHistory::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LlmHistoryLimit'])) {
            $model->llmHistoryLimit = $map['LlmHistoryLimit'];
        }

        if (isset($map['LlmSystemPrompt'])) {
            $model->llmSystemPrompt = $map['LlmSystemPrompt'];
        }

        if (isset($map['OpenAIExtraQuery'])) {
            $model->openAIExtraQuery = $map['OpenAIExtraQuery'];
        }

        if (isset($map['OutputMaxDelay'])) {
            $model->outputMaxDelay = $map['OutputMaxDelay'];
        }

        if (isset($map['OutputMinLength'])) {
            $model->outputMinLength = $map['OutputMinLength'];
        }

        return $model;
    }
}
