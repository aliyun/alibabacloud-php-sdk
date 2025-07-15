<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SendLiveMessageGroupRequest extends Model
{
    /**
     * @description The ID of the interactive messaging application in which the message is received.
     *
     * This parameter is required.
     *
     * @example demo
     *
     * @var string
     */
    public $appId;

    /**
     * @description The message body. The body can be up to 15 KB in length.
     *
     * @example hello,group
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
     * @description The ID of the group that receives the message.
     *
     * >  Make sure that the specified group ID exists. Otherwise, a ResourceNotExist error is returned.
     *
     * This parameter is required.
     *
     * @example grouptest
     *
     * @var string
     */
    public $groupId;

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
     * @example 1
     *
     * @var int
     */
    public $msgType;

    /**
     * @description Specifies whether to disable message caching. Valid values: true and false. Default value: false, which specifies that the message is cached to the recent message list of the group.
     *
     * @example false
     *
     * @var bool
     */
    public $noCache;

    /**
     * @description Specifies whether to disable message storage. Valid values: true and false. Default value: false, which specifies that the message is stored for a validity period of 30 days. You can find the message in the response of the ListLiveMessageGroupMessages operation. If you do not want to store the message, set this parameter to true.
     *
     * @example false
     *
     * @var bool
     */
    public $noStorage;

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
     * @description The additional information about the user who sends the message. The value can be up to 512 bytes in length.
     *
     * @example uid1meta1
     *
     * @var string
     */
    public $senderMetaInfo;

    /**
     * @description The contribution of the message to the increase in the number of messages of this type. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $staticsIncrease;

    /**
     * @description The weight of the message. Default value: 1. A greater value indicates a higher priority. For a message of the highest priority, you can set the weight to 1000000.
     *
     * @example 1
     *
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

    /**
     * @param array $map
     *
     * @return SendLiveMessageGroupRequest
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
