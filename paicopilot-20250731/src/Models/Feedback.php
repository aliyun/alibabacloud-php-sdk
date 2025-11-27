<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAICopilot\V20250731\Models;

use AlibabaCloud\Dara\Model;

class Feedback extends Model
{
    /**
     * @var string
     */
    public $chatId;

    /**
     * @var string
     */
    public $feedbackAction;

    /**
     * @var string
     */
    public $feedbackId;

    /**
     * @var string
     */
    public $feedbackMessage;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'chatId' => 'ChatId',
        'feedbackAction' => 'FeedbackAction',
        'feedbackId' => 'FeedbackId',
        'feedbackMessage' => 'FeedbackMessage',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModified' => 'GmtModified',
        'ownerId' => 'OwnerId',
        'sessionId' => 'SessionId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chatId) {
            $res['ChatId'] = $this->chatId;
        }

        if (null !== $this->feedbackAction) {
            $res['FeedbackAction'] = $this->feedbackAction;
        }

        if (null !== $this->feedbackId) {
            $res['FeedbackId'] = $this->feedbackId;
        }

        if (null !== $this->feedbackMessage) {
            $res['FeedbackMessage'] = $this->feedbackMessage;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['ChatId'])) {
            $model->chatId = $map['ChatId'];
        }

        if (isset($map['FeedbackAction'])) {
            $model->feedbackAction = $map['FeedbackAction'];
        }

        if (isset($map['FeedbackId'])) {
            $model->feedbackId = $map['FeedbackId'];
        }

        if (isset($map['FeedbackMessage'])) {
            $model->feedbackMessage = $map['FeedbackMessage'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
