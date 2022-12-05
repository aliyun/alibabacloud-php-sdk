<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListMessageGroupUserByIdResponseBody\result;

use AlibabaCloud\Tea\Model;

class userList extends Model
{
    /**
     * @var bool
     */
    public $isMute;

    /**
     * @var string[]
     */
    public $muteBy;

    /**
     * @var string
     */
    public $userAvatar;

    /**
     * @var string
     */
    public $userExtension;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userNick;
    protected $_name = [
        'isMute'        => 'IsMute',
        'muteBy'        => 'MuteBy',
        'userAvatar'    => 'UserAvatar',
        'userExtension' => 'UserExtension',
        'userId'        => 'UserId',
        'userNick'      => 'UserNick',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isMute) {
            $res['IsMute'] = $this->isMute;
        }
        if (null !== $this->muteBy) {
            $res['MuteBy'] = $this->muteBy;
        }
        if (null !== $this->userAvatar) {
            $res['UserAvatar'] = $this->userAvatar;
        }
        if (null !== $this->userExtension) {
            $res['UserExtension'] = $this->userExtension;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsMute'])) {
            $model->isMute = $map['IsMute'];
        }
        if (isset($map['MuteBy'])) {
            if (!empty($map['MuteBy'])) {
                $model->muteBy = $map['MuteBy'];
            }
        }
        if (isset($map['UserAvatar'])) {
            $model->userAvatar = $map['UserAvatar'];
        }
        if (isset($map['UserExtension'])) {
            $model->userExtension = $map['UserExtension'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }

        return $model;
    }
}
