<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessPointResponseBody\accessPoint;

use AlibabaCloud\Tea\Model;

class rootPathPermission extends Model
{
    /**
     * @description The ID of the owner group.
     *
     * @example 123
     *
     * @var int
     */
    public $ownerGroupId;

    /**
     * @description The owner ID.
     *
     * @example 1
     *
     * @var int
     */
    public $ownerUserId;

    /**
     * @description The POSIX permission.
     *
     * @example 0755
     *
     * @var string
     */
    public $permission;
    protected $_name = [
        'ownerGroupId' => 'OwnerGroupId',
        'ownerUserId' => 'OwnerUserId',
        'permission' => 'Permission',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerGroupId) {
            $res['OwnerGroupId'] = $this->ownerGroupId;
        }
        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }
        if (null !== $this->permission) {
            $res['Permission'] = $this->permission;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rootPathPermission
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerGroupId'])) {
            $model->ownerGroupId = $map['OwnerGroupId'];
        }
        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }
        if (isset($map['Permission'])) {
            $model->permission = $map['Permission'];
        }

        return $model;
    }
}
