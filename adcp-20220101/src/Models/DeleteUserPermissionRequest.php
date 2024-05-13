<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DeleteUserPermissionRequest extends Model
{
    /**
     * @description The ID of the master instance.
     *
     * This parameter is required.
     * @example c09946603cd764dac96135f51d1ba****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the RAM user.
     *
     * This parameter is required.
     * @example 2176****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'userId'    => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteUserPermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
