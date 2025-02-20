<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models;

use AlibabaCloud\Dara\Model;

class AnalyzeConversationResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $errorInfo;
    /**
     * @var string
     */
    public $finishReason;
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
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    /**
     * @var string
     */
    public $text;
    /**
     * @var string
     */
    public $totalTokens;
    protected $_name = [
        'errorCode'    => 'errorCode',
        'errorInfo'    => 'errorInfo',
        'finishReason' => 'finishReason',
        'inputTokens'  => 'inputTokens',
        'outputTokens' => 'outputTokens',
        'requestId'    => 'requestId',
        'success'      => 'success',
        'text'         => 'text',
        'totalTokens'  => 'totalTokens',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorInfo) {
            $res['errorInfo'] = $this->errorInfo;
        }

        if (null !== $this->finishReason) {
            $res['finishReason'] = $this->finishReason;
        }

        if (null !== $this->inputTokens) {
            $res['inputTokens'] = $this->inputTokens;
        }

        if (null !== $this->outputTokens) {
            $res['outputTokens'] = $this->outputTokens;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
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
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorInfo'])) {
            $model->errorInfo = $map['errorInfo'];
        }

        if (isset($map['finishReason'])) {
            $model->finishReason = $map['finishReason'];
        }

        if (isset($map['inputTokens'])) {
            $model->inputTokens = $map['inputTokens'];
        }

        if (isset($map['outputTokens'])) {
            $model->outputTokens = $map['outputTokens'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        if (isset($map['totalTokens'])) {
            $model->totalTokens = $map['totalTokens'];
        }

        return $model;
    }
}
