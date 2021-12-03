<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models;

use AlibabaCloud\Tea\Model;

class ReplyMessageApiRequest extends Model
{
    /**
     * @description 消息内容
     *
     * @var string
     */
    public $msgContent;

    /**
     * @description 消息类型
     *
     * @var string
     */
    public $msgType;

    /**
     * @description 群Id
     *
     * @var string
     */
    public $openGroupId;

    /**
     * @description 任务单Id
     *
     * @var string
     */
    public $orderId;

    /**
     * @description 消息发送人Id
     *
     * @var string
     */
    public $userId;

    /**
     * @description 消息发送人
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'msgContent'  => 'MsgContent',
        'msgType'     => 'MsgType',
        'openGroupId' => 'OpenGroupId',
        'orderId'     => 'OrderId',
        'userId'      => 'UserId',
        'userName'    => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->msgContent) {
            $res['MsgContent'] = $this->msgContent;
        }
        if (null !== $this->msgType) {
            $res['MsgType'] = $this->msgType;
        }
        if (null !== $this->openGroupId) {
            $res['OpenGroupId'] = $this->openGroupId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplyMessageApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MsgContent'])) {
            $model->msgContent = $map['MsgContent'];
        }
        if (isset($map['MsgType'])) {
            $model->msgType = $map['MsgType'];
        }
        if (isset($map['OpenGroupId'])) {
            $model->openGroupId = $map['OpenGroupId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
