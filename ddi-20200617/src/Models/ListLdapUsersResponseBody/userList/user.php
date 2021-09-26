<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListLdapUsersResponseBody\userList;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @var int
     */
    public $userCreateTime;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $keytabHex;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'userCreateTime' => 'UserCreateTime',
        'groupName'      => 'GroupName',
        'userId'         => 'UserId',
        'note'           => 'Note',
        'keytabHex'      => 'KeytabHex',
        'userName'       => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userCreateTime) {
            $res['UserCreateTime'] = $this->userCreateTime;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->keytabHex) {
            $res['KeytabHex'] = $this->keytabHex;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserCreateTime'])) {
            $model->userCreateTime = $map['UserCreateTime'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['KeytabHex'])) {
            $model->keytabHex = $map['KeytabHex'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
