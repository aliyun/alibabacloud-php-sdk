<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class RemoveUserFromDesktopOversoldUserGroupRequest extends Model
{
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
    public $userDesktopId;

    /**
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'endUserId' => 'EndUserId',
        'oversoldGroupId' => 'OversoldGroupId',
        'userDesktopId' => 'UserDesktopId',
        'userGroupId' => 'UserGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->oversoldGroupId) {
            $res['OversoldGroupId'] = $this->oversoldGroupId;
        }

        if (null !== $this->userDesktopId) {
            $res['UserDesktopId'] = $this->userDesktopId;
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
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['OversoldGroupId'])) {
            $model->oversoldGroupId = $map['OversoldGroupId'];
        }

        if (isset($map['UserDesktopId'])) {
            $model->userDesktopId = $map['UserDesktopId'];
        }

        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}
