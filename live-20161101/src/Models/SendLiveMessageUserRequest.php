<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class SendLiveMessageUserRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $dataCenter;

    /**
     * @var bool
     */
    public $highReliability;

    /**
     * @var string
     */
    public $msgTid;

    /**
     * @var int
     */
    public $msgType;

    /**
     * @var string
     */
    public $receiverId;

    /**
     * @var string
     */
    public $senderId;

    /**
     * @var string
     */
    public $senderInfo;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
