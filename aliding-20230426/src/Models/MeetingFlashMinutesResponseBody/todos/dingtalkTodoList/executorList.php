<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\MeetingFlashMinutesResponseBody\todos\dingtalkTodoList;

use AlibabaCloud\Dara\Model;

class executorList extends Model
{
    /**
     * @var string
     */
    public $avatar;

    /**
     * @var string
     */
    public $nick;

    /**
     * @var string
     */
    public $unionId;
    protected $_name = [
        'avatar' => 'avatar',
        'nick' => 'nick',
        'unionId' => 'unionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avatar) {
            $res['avatar'] = $this->avatar;
        }

        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }

        if (null !== $this->unionId) {
            $res['unionId'] = $this->unionId;
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
        if (isset($map['avatar'])) {
            $model->avatar = $map['avatar'];
        }

        if (isset($map['nick'])) {
            $model->nick = $map['nick'];
        }

        if (isset($map['unionId'])) {
            $model->unionId = $map['unionId'];
        }

        return $model;
    }
}
