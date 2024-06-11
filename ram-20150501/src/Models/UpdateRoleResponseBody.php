<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateRoleResponseBody\role;
use AlibabaCloud\Tea\Model;

class UpdateRoleResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information of the RAM role.
     *
     * @var role
     */
    public $role;
    protected $_name = [
        'requestId' => 'RequestId',
        'role'      => 'Role',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->role) {
            $res['Role'] = null !== $this->role ? $this->role->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRoleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Role'])) {
            $model->role = role::fromMap($map['Role']);
        }

        return $model;
    }
}
