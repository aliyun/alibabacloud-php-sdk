<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SendLiveMessageUserRequest extends Model
{
    /**
     * @description The ID of the interactive messaging application in which the message is sent.
     *
     * This parameter is required.
     *
     * @example demo
     *
     * @var string
     */
    public $appId;

    /**
     * @description The message body. It can be up to 15 KB in length.
     *
     * @example hello, user
     *
     * @var string
     */
    public $body;

    /**
     * @description The data center. It must be the same as the data center that was specified when you called the [CreateLiveMessageApp](https://help.aliyun.com/document_detail/2848162.html) operation to create the interactive messaging application. Valid values: cn-shanghai and ap-southeast-1 (Singapore).
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $dataCenter;

    /**
     * @description Specifies whether to set the message as a highly reliable message. A highly reliable message ensures that success is returned only after the receiver has received the message and responded. If the receiver does not respond within 3 seconds, failure is returned.
     *
     *   true: sets the message as a highly reliable message.
     *   false (default): does not set the message as a highly reliable message.
     *
     * >  This parameter is supported only by the client SDK V1.5.1 and later. When you send a message to a client with an earlier SDK version, the message can be successfully sent without waiting for an acknowledgement (ACK) response.
     *
     * @example false
     *
     * @var bool
     */
    public $highReliability;

    /**
     * @description The ID of the message, which is a unique identifier that can be used to delete the message. The ID can be up to 64 bytes in length and can contain letters and digits.
     *
     * @example 169830****
     *
     * @var string
     */
    public $msgTid;

    /**
     * @description The message type.
     *
     * @example 2
     *
     * @var int
     */
    public $msgType;

    /**
     * @description The ID of the user who receives the message. The ID can be up to 64 bytes in length and can contain letters and digits.
     *
     * >  Make sure that the user who receives the message is online. You can call the CheckLiveMessageUsersOnline operation to query whether the user is online.
     *
     * This parameter is required.
     *
     * @example uid2
     *
     * @var string
     */
    public $receiverId;

    /**
     * @description The ID of the user who sends the message. The ID can be up to 64 bytes in length and can contain letters and digits.
     *
     * This parameter is required.
     *
     * @example uid1
     *
     * @var string
     */
    public $senderId;

    /**
     * @description The additional information about the user who sends the message. It can be up to 512 bytes in length.
     *
     * @example uid1meta1
     *
     * @var string
     */
    public $senderInfo;

    /**
     * @description Specifies whether to store the message.
     *
     *   true: stores the message.
     *   false (default): does not store the message.
     *
     * @example false
     *
     * @var bool
     */
    public $storage;
    protected $_name = [
        'appId' => 'AppId',
        'body' => 'Body',
        'dataCenter' => 'DataCenter',
        'highReliability' => 'HighReliability',
        'msgTid' => 'MsgTid',
        'msgType' => 'MsgType',
        'receiverId' => 'ReceiverId',
        'senderId' => 'SenderId',
        'senderInfo' => 'SenderInfo',
        'storage' => 'Storage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }
        if (null !== $this->highReliability) {
            $res['HighReliability'] = $this->highReliability;
        }
        if (null !== $this->msgTid) {
            $res['MsgTid'] = $this->msgTid;
        }
        if (null !== $this->msgType) {
            $res['MsgType'] = $this->msgType;
        }
        if (null !== $this->receiverId) {
            $res['ReceiverId'] = $this->receiverId;
        }
        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
        }
        if (null !== $this->senderInfo) {
            $res['SenderInfo'] = $this->senderInfo;
        }
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendLiveMessageUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }
        if (isset($map['HighReliability'])) {
            $model->highReliability = $map['HighReliability'];
        }
        if (isset($map['MsgTid'])) {
            $model->msgTid = $map['MsgTid'];
        }
        if (isset($map['MsgType'])) {
            $model->msgType = $map['MsgType'];
        }
        if (isset($map['ReceiverId'])) {
            $model->receiverId = $map['ReceiverId'];
        }
        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }
        if (isset($map['SenderInfo'])) {
            $model->senderInfo = $map['SenderInfo'];
        }
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }

        return $model;
    }
}
