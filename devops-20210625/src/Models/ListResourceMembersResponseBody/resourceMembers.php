<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListResourceMembersResponseBody;

use AlibabaCloud\Tea\Model;

class resourceMembers extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'accountId' => 'accountId',
        'roleName'  => 'roleName',
        'username'  => 'username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->roleName) {
            $res['roleName'] = $this->roleName;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceMembers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['roleName'])) {
            $model->roleName = $map['roleName'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
