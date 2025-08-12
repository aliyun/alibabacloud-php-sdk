<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListMessageGroupUserByIdResponseBody\result;

use AlibabaCloud\Dara\Model;

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
        'isMute' => 'IsMute',
        'muteBy' => 'MuteBy',
        'userAvatar' => 'UserAvatar',
        'userExtension' => 'UserExtension',
        'userId' => 'UserId',
        'userNick' => 'UserNick',
    ];

    public function validate()
    {
        if (\is_array($this->muteBy)) {
            Model::validateArray($this->muteBy);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isMute) {
            $res['IsMute'] = $this->isMute;
        }

        if (null !== $this->muteBy) {
            if (\is_array($this->muteBy)) {
                $res['MuteBy'] = [];
                $n1 = 0;
                foreach ($this->muteBy as $item1) {
                    $res['MuteBy'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsMute'])) {
            $model->isMute = $map['IsMute'];
        }

        if (isset($map['MuteBy'])) {
            if (!empty($map['MuteBy'])) {
                $model->muteBy = [];
                $n1 = 0;
                foreach ($map['MuteBy'] as $item1) {
                    $model->muteBy[$n1] = $item1;
                    ++$n1;
                }
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
