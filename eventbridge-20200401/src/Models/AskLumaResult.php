<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class AskLumaResult extends Model
{
    /**
     * @var bool
     */
    public $clarificationNeeded;

    /**
     * @var string
     */
    public $clarificationQuestion;

    /**
     * @var Constraints
     */
    public $constraints;

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
    public $status;

    /**
     * @var bool
     */
    public $storageTruncated;
    protected $_name = [
        'clarificationNeeded' => 'ClarificationNeeded',
        'clarificationQuestion' => 'ClarificationQuestion',
        'constraints' => 'Constraints',
        'content' => 'Content',
        'conversationId' => 'ConversationId',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'isError' => 'IsError',
        'messageId' => 'MessageId',
        'status' => 'Status',
        'storageTruncated' => 'StorageTruncated',
    ];

    public function validate()
    {
        if (null !== $this->constraints) {
            $this->constraints->validate();
        }
        if (null !== $this->content) {
            $this->content->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clarificationNeeded) {
            $res['ClarificationNeeded'] = $this->clarificationNeeded;
        }

        if (null !== $this->clarificationQuestion) {
            $res['ClarificationQuestion'] = $this->clarificationQuestion;
        }

        if (null !== $this->constraints) {
            $res['Constraints'] = null !== $this->constraints ? $this->constraints->toArray($noStream) : $this->constraints;
        }

        if (null !== $this->content) {
            $res['Content'] = null !== $this->content ? $this->content->toArray($noStream) : $this->content;
        }

        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageTruncated) {
            $res['StorageTruncated'] = $this->storageTruncated;
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
        if (isset($map['ClarificationNeeded'])) {
            $model->clarificationNeeded = $map['ClarificationNeeded'];
        }

        if (isset($map['ClarificationQuestion'])) {
            $model->clarificationQuestion = $map['ClarificationQuestion'];
        }

        if (isset($map['Constraints'])) {
            $model->constraints = Constraints::fromMap($map['Constraints']);
        }

        if (isset($map['Content'])) {
            $model->content = Content::fromMap($map['Content']);
        }

        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StorageTruncated'])) {
            $model->storageTruncated = $map['StorageTruncated'];
        }

        return $model;
    }
}
