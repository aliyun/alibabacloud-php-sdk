<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InviteUsersRequest;

use AlibabaCloud\Tea\Model;

class phoneInviteeList extends Model
{
    /**
     * @var string
     */
    public $nick;

    /**
     * @var string
     */
    public $phoneNumber;
    protected $_name = [
        'nick'        => 'Nick',
        'phoneNumber' => 'PhoneNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nick) {
            $res['Nick'] = $this->nick;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return phoneInviteeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Nick'])) {
            $model->nick = $map['Nick'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        return $model;
    }
}
