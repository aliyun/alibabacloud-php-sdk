<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class SendCommentRequest extends Model
{
    /**
     * @description 应用唯一标识，可以包含小写字母、数字，长度为6个字符。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 发送的文本内容。最大的长度不超过256个字节。
     *
     * @var string
     */
    public $content;

    /**
     * @description 扩展字段，服务端仅做透传。
     *
     * @var string[]
     */
    public $extension;

    /**
     * @description 直播间唯一标识，在调用CreateRoom返回。
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 弹幕发送者的用户ID，最大长度不超过32个字节。
     *
     * @var string
     */
    public $senderId;
    protected $_name = [
        'appId'     => 'AppId',
        'content'   => 'Content',
        'extension' => 'Extension',
        'roomId'    => 'RoomId',
        'senderId'  => 'SenderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendCommentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }

        return $model;
    }
}
