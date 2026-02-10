<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionResponseBody\usage;

class RunCompletionResponseBody extends Model
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
    public $ragStatus;

    /**
     * @var string
     */
    public $totalTokens;

    /**
     * @var usage
     */
    public $usage;
    protected $_name = [
        'finishReason' => 'FinishReason',
        'requestId' => 'RequestId',
        'text' => 'Text',
        'inputTokens' => 'inputTokens',
        'outputTokens' => 'outputTokens',
        'ragStatus' => 'ragStatus',
        'totalTokens' => 'totalTokens',
        'usage' => 'usage',
    ];

    public function validate()
    {
        if (null !== $this->usage) {
            $this->usage->validate();
        }
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

        if (null !== $this->ragStatus) {
            $res['ragStatus'] = $this->ragStatus;
        }

        if (null !== $this->totalTokens) {
            $res['totalTokens'] = $this->totalTokens;
        }

        if (null !== $this->usage) {
            $res['usage'] = null !== $this->usage ? $this->usage->toArray($noStream) : $this->usage;
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

        if (isset($map['ragStatus'])) {
            $model->ragStatus = $map['ragStatus'];
        }

        if (isset($map['totalTokens'])) {
            $model->totalTokens = $map['totalTokens'];
        }

        if (isset($map['usage'])) {
            $model->usage = usage::fromMap($map['usage']);
        }

        return $model;
    }
}
