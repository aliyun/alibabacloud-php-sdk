<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessPointResponseBody\accessPoint;

use AlibabaCloud\Tea\Model;

class posixUser extends Model
{
    /**
     * @description The ID of the POSIX user group.
     *
     * @example 12
     *
     * @var int
     */
    public $posixGroupId;

    /**
     * @description The IDs of the secondary user groups.
     *
     * @var int[]
     */
    public $posixSecondaryGroupIds;

    /**
     * @description The ID of the POSIX user.
     *
     * @example 123
     *
     * @var int
     */
    public $posixUserId;
    protected $_name = [
        'posixGroupId' => 'PosixGroupId',
        'posixSecondaryGroupIds' => 'PosixSecondaryGroupIds',
        'posixUserId' => 'PosixUserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->posixGroupId) {
            $res['PosixGroupId'] = $this->posixGroupId;
        }
        if (null !== $this->posixSecondaryGroupIds) {
            $res['PosixSecondaryGroupIds'] = $this->posixSecondaryGroupIds;
        }
        if (null !== $this->posixUserId) {
            $res['PosixUserId'] = $this->posixUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return posixUser
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PosixGroupId'])) {
            $model->posixGroupId = $map['PosixGroupId'];
        }
        if (isset($map['PosixSecondaryGroupIds'])) {
            if (!empty($map['PosixSecondaryGroupIds'])) {
                $model->posixSecondaryGroupIds = $map['PosixSecondaryGroupIds'];
            }
        }
        if (isset($map['PosixUserId'])) {
            $model->posixUserId = $map['PosixUserId'];
        }

        return $model;
    }
}
