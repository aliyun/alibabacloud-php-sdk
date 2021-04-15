<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\OpenWhiteBoardResponseBody\result\documentAccessInfo;

use AlibabaCloud\Tea\Model;

class userInfo extends Model
{
    /**
     * @description 用户头像的URL
     *
     * @var string
     */
    public $avatarUrl;

    /**
     * @description 用户昵称
     *
     * @var string
     */
    public $nick;

    /**
     * @description 用户的拼音昵称
     *
     * @var string
     */
    public $nickPinyin;

    /**
     * @description 打开白板的用户ID
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'avatarUrl'  => 'AvatarUrl',
        'nick'       => 'Nick',
        'nickPinyin' => 'NickPinyin',
        'userId'     => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->nick) {
            $res['Nick'] = $this->nick;
        }
        if (null !== $this->nickPinyin) {
            $res['NickPinyin'] = $this->nickPinyin;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvatarUrl'])) {
            $model->avatarUrl = $map['AvatarUrl'];
        }
        if (isset($map['Nick'])) {
            $model->nick = $map['Nick'];
        }
        if (isset($map['NickPinyin'])) {
            $model->nickPinyin = $map['NickPinyin'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
