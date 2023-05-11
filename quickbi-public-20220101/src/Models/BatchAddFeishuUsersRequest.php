<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class BatchAddFeishuUsersRequest extends Model
{
    /**
     * @var string
     */
    public $feishuUsers;

    /**
     * @example False
     *
     * @var bool
     */
    public $isAdmin;

    /**
     * @example true
     *
     * @var bool
     */
    public $isAuthAdmin;

    /**
     * @example "0d5fb19b-5555-41f0-99da-1248fc27ca51,0f868dd6_68dd_4d13_8422_c5dca3bd4b61"
     *
     * @var string
     */
    public $userGroupIds;

    /**
     * @example 1
     *
     * @var int
     */
    public $userType;
    protected $_name = [
        'feishuUsers'  => 'FeishuUsers',
        'isAdmin'      => 'IsAdmin',
        'isAuthAdmin'  => 'IsAuthAdmin',
        'userGroupIds' => 'UserGroupIds',
        'userType'     => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return BatchAddFeishuUsersRequest
     */
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
