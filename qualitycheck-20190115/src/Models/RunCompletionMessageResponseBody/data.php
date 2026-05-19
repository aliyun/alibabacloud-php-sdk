<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\RunCompletionMessageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $finishReason;

    /**
     * @var int
     */
    public $inputTokens;

    /**
     * @var string
     */
    public $llmRequestId;

    /**
     * @var int
     */
    public $outputTokens;

    /**
     * @var string
     */
    public $text;

    /**
     * @var int
     */
    public $totalTokens;
    protected $_name = [
        'finishReason' => 'FinishReason',
        'inputTokens' => 'InputTokens',
        'llmRequestId' => 'LlmRequestId',
        'outputTokens' => 'OutputTokens',
        'text' => 'Text',
        'totalTokens' => 'TotalTokens',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->finishReason) {
            $res['FinishReason'] = $this->finishReason;
        }

        if (null !== $this->inputTokens) {
            $res['InputTokens'] = $this->inputTokens;
        }

        if (null !== $this->llmRequestId) {
            $res['LlmRequestId'] = $this->llmRequestId;
        }

        if (null !== $this->outputTokens) {
            $res['OutputTokens'] = $this->outputTokens;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->totalTokens) {
            $res['TotalTokens'] = $this->totalTokens;
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
        if (isset($map['FinishReason'])) {
            $model->finishReason = $map['FinishReason'];
        }

        if (isset($map['InputTokens'])) {
            $model->inputTokens = $map['InputTokens'];
        }

        if (isset($map['LlmRequestId'])) {
            $model->llmRequestId = $map['LlmRequestId'];
        }

        if (isset($map['OutputTokens'])) {
            $model->outputTokens = $map['OutputTokens'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['TotalTokens'])) {
            $model->totalTokens = $map['TotalTokens'];
        }

        return $model;
    }
}
