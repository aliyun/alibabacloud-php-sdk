<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class AddUsersToGroupRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example [user_d6sbsuumeta4h66ec3il7yxxxx}
     *
     * @var string[]
     */
    public $userIds;
    protected $_name = [
        'userIds' => 'userIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->userIds) {
            $res['userIds'] = $this->userIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddUsersToGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['userIds'])) {
            if (!empty($map['userIds'])) {
                $model->userIds = $map['userIds'];
            }
        }

        return $model;
    }
}
