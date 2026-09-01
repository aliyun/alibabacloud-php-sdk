<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeKnowledgeBaseAnswerResponseBody\sources;

class DescribeKnowledgeBaseAnswerResponseBody extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $answer;

    /**
     * @var int
     */
    public $completionTokens;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $errorType;

    /**
     * @var string
     */
    public $LLMModelId;

    /**
     * @var int
     */
    public $promptTokens;

    /**
     * @var string
     */
    public $queryId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sources[]
     */
    public $sources;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'agentId' => 'AgentId',
        'answer' => 'Answer',
        'completionTokens' => 'CompletionTokens',
        'errorMessage' => 'ErrorMessage',
        'errorType' => 'ErrorType',
        'LLMModelId' => 'LLMModelId',
        'promptTokens' => 'PromptTokens',
        'queryId' => 'QueryId',
        'requestId' => 'RequestId',
        'sources' => 'Sources',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->sources)) {
            Model::validateArray($this->sources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->answer) {
            $res['Answer'] = $this->answer;
        }

        if (null !== $this->completionTokens) {
            $res['CompletionTokens'] = $this->completionTokens;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->errorType) {
            $res['ErrorType'] = $this->errorType;
        }

        if (null !== $this->LLMModelId) {
            $res['LLMModelId'] = $this->LLMModelId;
        }

        if (null !== $this->promptTokens) {
            $res['PromptTokens'] = $this->promptTokens;
        }

        if (null !== $this->queryId) {
            $res['QueryId'] = $this->queryId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sources) {
            if (\is_array($this->sources)) {
                $res['Sources'] = [];
                $n1 = 0;
                foreach ($this->sources as $item1) {
                    $res['Sources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['Answer'])) {
            $model->answer = $map['Answer'];
        }

        if (isset($map['CompletionTokens'])) {
            $model->completionTokens = $map['CompletionTokens'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['ErrorType'])) {
            $model->errorType = $map['ErrorType'];
        }

        if (isset($map['LLMModelId'])) {
            $model->LLMModelId = $map['LLMModelId'];
        }

        if (isset($map['PromptTokens'])) {
            $model->promptTokens = $map['PromptTokens'];
        }

        if (isset($map['QueryId'])) {
            $model->queryId = $map['QueryId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Sources'])) {
            if (!empty($map['Sources'])) {
                $model->sources = [];
                $n1 = 0;
                foreach ($map['Sources'] as $item1) {
                    $model->sources[$n1] = sources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
