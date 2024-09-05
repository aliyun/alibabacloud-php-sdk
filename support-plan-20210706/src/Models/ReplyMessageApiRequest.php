<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models;

use AlibabaCloud\Tea\Model;

class ReplyMessageApiRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 消息内容
     *
     * @var string
     */
    public $msgContent;

    /**
     * @example text
     *
     * @var string
     */
    public $msgType;

    /**
     * @example cid+lUpHxTIXt7DYqJDcpVxlA==
     *
     * @var string
     */
    public $openGroupId;

    /**
     * @description This parameter is required.
     *
     * @example E2012312421
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 123
     *
     * @var string
     */
    public $userId;

    /**
     * @description This parameter is required.
     *
     * @example 用户名
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
