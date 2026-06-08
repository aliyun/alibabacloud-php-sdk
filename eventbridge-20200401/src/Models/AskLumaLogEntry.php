<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class AskLumaLogEntry extends Model
{
    /**
     * @var string
     */
    public $agentName;

    /**
     * @var bool
     */
    public $clarificationNeeded;

    /**
     * @var string
     */
    public $clarificationQuestion;

    /**
     * @var Content
     */
    public $content;

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
    public $durationMs;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var bool
     */
    public $isError;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $question;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'agentName' => 'AgentName',
        'clarificationNeeded' => 'ClarificationNeeded',
        'clarificationQuestion' => 'ClarificationQuestion',
        'content' => 'Content',
        'conversationId' => 'ConversationId',
        'createdAt' => 'CreatedAt',
        'durationMs' => 'DurationMs',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'isError' => 'IsError',
        'messageId' => 'MessageId',
        'question' => 'Question',
        'source' => 'Source',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->content) {
            $this->content->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->clarificationNeeded) {
            $res['ClarificationNeeded'] = $this->clarificationNeeded;
        }

        if (null !== $this->clarificationQuestion) {
            $res['ClarificationQuestion'] = $this->clarificationQuestion;
        }

        if (null !== $this->content) {
            $res['Content'] = null !== $this->content ? $this->content->toArray($noStream) : $this->content;
        }

        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->durationMs) {
            $res['DurationMs'] = $this->durationMs;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->isError) {
            $res['IsError'] = $this->isError;
        }

        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['ClarificationNeeded'])) {
            $model->clarificationNeeded = $map['ClarificationNeeded'];
        }

        if (isset($map['ClarificationQuestion'])) {
            $model->clarificationQuestion = $map['ClarificationQuestion'];
        }

        if (isset($map['Content'])) {
            $model->content = Content::fromMap($map['Content']);
        }

        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['DurationMs'])) {
            $model->durationMs = $map['DurationMs'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['IsError'])) {
            $model->isError = $map['IsError'];
        }

        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
