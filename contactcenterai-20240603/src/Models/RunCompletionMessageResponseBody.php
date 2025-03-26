<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models;

use AlibabaCloud\Dara\Model;

class RunCompletionMessageResponseBody extends Model
{
    /**
     * @var string
     */
    public $finishReason;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $inputTokens;

    /**
     * @var string
     */
    public $outputTokens;

    /**
     * @var string
     */
    public $totalTokens;
    protected $_name = [
        'finishReason' => 'FinishReason',
        'requestId' => 'RequestId',
        'text' => 'Text',
        'inputTokens' => 'inputTokens',
        'outputTokens' => 'outputTokens',
        'totalTokens' => 'totalTokens',
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->inputTokens) {
            $res['inputTokens'] = $this->inputTokens;
        }

        if (null !== $this->outputTokens) {
            $res['outputTokens'] = $this->outputTokens;
        }

        if (null !== $this->totalTokens) {
            $res['totalTokens'] = $this->totalTokens;
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['inputTokens'])) {
            $model->inputTokens = $map['inputTokens'];
        }

        if (isset($map['outputTokens'])) {
            $model->outputTokens = $map['outputTokens'];
        }

        if (isset($map['totalTokens'])) {
            $model->totalTokens = $map['totalTokens'];
        }

        return $model;
    }
}
