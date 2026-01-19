<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudCallCenter\V20200701\Models;

use AlibabaCloud\Dara\Model;

class ProcessCustomIMCallbackRequest extends Model
{
    /**
     * @var string
     */
    public $accessChannelId;

    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $messageContent;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $senderAvatarMediaId;

    /**
     * @var string
     */
    public $senderId;

    /**
     * @var string
     */
    public $senderName;
    protected $_name = [
        'accessChannelId' => 'AccessChannelId',
        'conversationId' => 'ConversationId',
        'instanceId' => 'InstanceId',
        'messageContent' => 'MessageContent',
        'requestId' => 'RequestId',
        'senderAvatarMediaId' => 'SenderAvatarMediaId',
        'senderId' => 'SenderId',
        'senderName' => 'SenderName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessChannelId) {
            $res['AccessChannelId'] = $this->accessChannelId;
        }

        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->messageContent) {
            $res['MessageContent'] = $this->messageContent;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->senderAvatarMediaId) {
            $res['SenderAvatarMediaId'] = $this->senderAvatarMediaId;
        }

        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
        }

        if (null !== $this->senderName) {
            $res['SenderName'] = $this->senderName;
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
        if (isset($map['AccessChannelId'])) {
            $model->accessChannelId = $map['AccessChannelId'];
        }

        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MessageContent'])) {
            $model->messageContent = $map['MessageContent'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SenderAvatarMediaId'])) {
            $model->senderAvatarMediaId = $map['SenderAvatarMediaId'];
        }

        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }

        if (isset($map['SenderName'])) {
            $model->senderName = $map['SenderName'];
        }

        return $model;
    }
}
