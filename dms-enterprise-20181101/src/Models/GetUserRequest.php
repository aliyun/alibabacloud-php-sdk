<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetUserRequest extends Model
{
    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) operation to query the ID of the tenant.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @description The UID of the user. You can view your UID by moving the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console.
     *
     * @example 22973492647626****
     *
     * @var string
     */
    public $uid;

    /**
     * @description The ID of the user. You can call the [ListUsers](~~141938~~) operation to query the ID of the user.
     *
     * @example 51****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'tid'    => 'Tid',
        'uid'    => 'Uid',
        'userId' => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
