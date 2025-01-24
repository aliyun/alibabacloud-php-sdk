<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class AddUserToDesktopOversoldUserGroupRequest extends Model
{
    /**
     * @var int
     */
    public $addUserAmount;
    /**
     * @var string
     */
    public $endUserId;
    /**
     * @var string
     */
    public $oversoldGroupId;
    /**
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'addUserAmount'   => 'AddUserAmount',
        'endUserId'       => 'EndUserId',
        'oversoldGroupId' => 'OversoldGroupId',
        'userGroupId'     => 'UserGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addUserAmount) {
            $res['AddUserAmount'] = $this->addUserAmount;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->oversoldGroupId) {
            $res['OversoldGroupId'] = $this->oversoldGroupId;
        }

        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
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
        if (isset($map['AddUserAmount'])) {
            $model->addUserAmount = $map['AddUserAmount'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['OversoldGroupId'])) {
            $model->oversoldGroupId = $map['OversoldGroupId'];
        }

        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}
