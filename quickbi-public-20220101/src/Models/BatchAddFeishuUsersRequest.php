<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class BatchAddFeishuUsersRequest extends Model
{
    /**
     * @var string
     */
    public $feishuUsers;

    /**
     * @var bool
     */
    public $isAdmin;

    /**
     * @var bool
     */
    public $isAuthAdmin;

    /**
     * @var string
     */
    public $userGroupIds;

    /**
     * @var int
     */
    public $userType;
    protected $_name = [
        'feishuUsers' => 'FeishuUsers',
        'isAdmin' => 'IsAdmin',
        'isAuthAdmin' => 'IsAuthAdmin',
        'userGroupIds' => 'UserGroupIds',
        'userType' => 'UserType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->feishuUsers) {
            $res['FeishuUsers'] = $this->feishuUsers;
        }

        if (null !== $this->isAdmin) {
            $res['IsAdmin'] = $this->isAdmin;
        }

        if (null !== $this->isAuthAdmin) {
            $res['IsAuthAdmin'] = $this->isAuthAdmin;
        }

        if (null !== $this->userGroupIds) {
            $res['UserGroupIds'] = $this->userGroupIds;
        }

        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
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
        if (isset($map['FeishuUsers'])) {
            $model->feishuUsers = $map['FeishuUsers'];
        }

        if (isset($map['IsAdmin'])) {
            $model->isAdmin = $map['IsAdmin'];
        }

        if (isset($map['IsAuthAdmin'])) {
            $model->isAuthAdmin = $map['IsAuthAdmin'];
        }

        if (isset($map['UserGroupIds'])) {
            $model->userGroupIds = $map['UserGroupIds'];
        }

        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
