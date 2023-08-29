<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class GetRoleResponseBody extends Model
{
    /**
     * @description code
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description message
     *
     * @example .
     *
     * @var string
     */
    public $message;

    /**
     * @description requestId
     *
     * @example 4316D7DA-9816-596D-A3D7-12676FA59BDA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description role
     *
     * @var Role
     */
    public $role;

    /**
     * @description success
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'role'      => 'Role',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->role) {
            $res['Role'] = null !== $this->role ? $this->role->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRoleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Role'])) {
            $model->role = Role::fromMap($map['Role']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
