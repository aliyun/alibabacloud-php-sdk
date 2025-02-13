<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InviteUsersRequest;

use AlibabaCloud\Dara\Model;

class phoneInviteeList extends Model
{
    /**
     * @var bool
     */
    public $inviteClient;
    /**
     * @var string
     */
    public $nick;
    /**
     * @var string
     */
    public $phoneNumber;
    /**
     * @var string
     */
    public $statusCode;
    protected $_name = [
        'inviteClient' => 'InviteClient',
        'nick'         => 'Nick',
        'phoneNumber'  => 'PhoneNumber',
        'statusCode'   => 'StatusCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inviteClient) {
            $res['InviteClient'] = $this->inviteClient;
        }

        if (null !== $this->nick) {
            $res['Nick'] = $this->nick;
        }

        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
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
        if (isset($map['InviteClient'])) {
            $model->inviteClient = $map['InviteClient'];
        }

        if (isset($map['Nick'])) {
            $model->nick = $map['Nick'];
        }

        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        return $model;
    }
}
