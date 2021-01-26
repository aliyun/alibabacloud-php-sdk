<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\GetUserProfileCallbackResponseBody\result;

use AlibabaCloud\Tea\Model;

class userProfileList extends Model
{
    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @var string
     */
    public $nick;

    /**
     * @var string
     */
    public $nickPinyin;
    protected $_name = [
        'userId'     => 'UserId',
        'avatarUrl'  => 'AvatarUrl',
        'nick'       => 'Nick',
        'nickPinyin' => 'NickPinyin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->nick) {
            $res['Nick'] = $this->nick;
        }
        if (null !== $this->nickPinyin) {
            $res['NickPinyin'] = $this->nickPinyin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userProfileList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['AvatarUrl'])) {
            $model->avatarUrl = $map['AvatarUrl'];
        }
        if (isset($map['Nick'])) {
            $model->nick = $map['Nick'];
        }
        if (isset($map['NickPinyin'])) {
            $model->nickPinyin = $map['NickPinyin'];
        }

        return $model;
    }
}
