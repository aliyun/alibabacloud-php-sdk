<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ProcessCustomIMCallbackRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example cf584733-***-***-9699-cb77aa3b7aa6
     *
     * @var string
     */
    public $accessChannelId;

    /**
     * @description This parameter is required.
     *
     * @example d165de4f-9851-445e-9535-66ebfa72fa51
     *
     * @var string
     */
    public $conversationId;

    /**
     * @description This parameter is required.
     *
     * @example 9cfad875-6260-4a53-ab6e-b13e3fb31f7d
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $messageContent;

    /**
     * @example 03C67DAD-EB26-41D8-949D-9B0C470FB716
     *
     * @var string
     */
    public $requestId;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $senderAvatarMediaId;

    /**
     * @description This parameter is required.
     *
     * @example 63061274befd6b545aab4c83
     *
     * @var string
     */
    public $senderId;

    /**
     * @example tom
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ProcessCustomIMCallbackRequest
     */
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
