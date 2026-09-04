<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetCopilotTurnByClientMessageIdResponseBody;

use AlibabaCloud\Dara\Model;

class turn extends Model
{
    /**
     * @var string
     */
    public $clientMessageId;

    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var int
     */
    public $feedback;

    /**
     * @var int
     */
    public $inputTokens;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var int
     */
    public $outputTokens;

    /**
     * @var int
     */
    public $reasoningTokens;

    /**
     * @var bool
     */
    public $retryAllowed;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $turnId;
    protected $_name = [
        'clientMessageId' => 'ClientMessageId',
        'conversationId' => 'ConversationId',
        'createdAt' => 'CreatedAt',
        'feedback' => 'Feedback',
        'inputTokens' => 'InputTokens',
        'modelId' => 'ModelId',
        'outputTokens' => 'OutputTokens',
        'reasoningTokens' => 'ReasoningTokens',
        'retryAllowed' => 'RetryAllowed',
        'status' => 'Status',
        'turnId' => 'TurnId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientMessageId) {
            $res['ClientMessageId'] = $this->clientMessageId;
        }

        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }

        if (null !== $this->inputTokens) {
            $res['InputTokens'] = $this->inputTokens;
        }

        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }

        if (null !== $this->outputTokens) {
            $res['OutputTokens'] = $this->outputTokens;
        }

        if (null !== $this->reasoningTokens) {
            $res['ReasoningTokens'] = $this->reasoningTokens;
        }

        if (null !== $this->retryAllowed) {
            $res['RetryAllowed'] = $this->retryAllowed;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->turnId) {
            $res['TurnId'] = $this->turnId;
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
        if (isset($map['ClientMessageId'])) {
            $model->clientMessageId = $map['ClientMessageId'];
        }

        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }

        if (isset($map['InputTokens'])) {
            $model->inputTokens = $map['InputTokens'];
        }

        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }

        if (isset($map['OutputTokens'])) {
            $model->outputTokens = $map['OutputTokens'];
        }

        if (isset($map['ReasoningTokens'])) {
            $model->reasoningTokens = $map['ReasoningTokens'];
        }

        if (isset($map['RetryAllowed'])) {
            $model->retryAllowed = $map['RetryAllowed'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TurnId'])) {
            $model->turnId = $map['TurnId'];
        }

        return $model;
    }
}
