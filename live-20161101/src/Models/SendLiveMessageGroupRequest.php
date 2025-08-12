<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class SendLiveMessageGroupRequest extends Model
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
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $msgTid;

    /**
     * @var int
     */
    public $msgType;

    /**
     * @var bool
     */
    public $noCache;

    /**
     * @var bool
     */
    public $noStorage;

    /**
     * @var string
     */
    public $senderId;

    /**
     * @var string
     */
    public $senderMetaInfo;

    /**
     * @var int
     */
    public $staticsIncrease;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'appId' => 'AppId',
        'body' => 'Body',
        'dataCenter' => 'DataCenter',
        'groupId' => 'GroupId',
        'msgTid' => 'MsgTid',
        'msgType' => 'MsgType',
        'noCache' => 'NoCache',
        'noStorage' => 'NoStorage',
        'senderId' => 'SenderId',
        'senderMetaInfo' => 'SenderMetaInfo',
        'staticsIncrease' => 'StaticsIncrease',
        'weight' => 'Weight',
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

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->msgTid) {
            $res['MsgTid'] = $this->msgTid;
        }

        if (null !== $this->msgType) {
            $res['MsgType'] = $this->msgType;
        }

        if (null !== $this->noCache) {
            $res['NoCache'] = $this->noCache;
        }

        if (null !== $this->noStorage) {
            $res['NoStorage'] = $this->noStorage;
        }

        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
        }

        if (null !== $this->senderMetaInfo) {
            $res['SenderMetaInfo'] = $this->senderMetaInfo;
        }

        if (null !== $this->staticsIncrease) {
            $res['StaticsIncrease'] = $this->staticsIncrease;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['MsgTid'])) {
            $model->msgTid = $map['MsgTid'];
        }

        if (isset($map['MsgType'])) {
            $model->msgType = $map['MsgType'];
        }

        if (isset($map['NoCache'])) {
            $model->noCache = $map['NoCache'];
        }

        if (isset($map['NoStorage'])) {
            $model->noStorage = $map['NoStorage'];
        }

        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }

        if (isset($map['SenderMetaInfo'])) {
            $model->senderMetaInfo = $map['SenderMetaInfo'];
        }

        if (isset($map['StaticsIncrease'])) {
            $model->staticsIncrease = $map['StaticsIncrease'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
