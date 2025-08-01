<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Tea\Model;

class GetServiceIdentityRoleResponseBody extends Model
{
    /**
     * @description The internal error code. This parameter is returned only when an error occurs.
     *
     * @example EntityNotExist
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message. This parameter is returned only when an error occurs.
     *
     * @example Serivce role does not exit.
     *
     * @var string
     */
    public $message;

    /**
     * @description Id of the request
     *
     * @example 6A87228C-969A-1381-98CF-AE07AE630FA5
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The role details.
     *
     * @example AliyunServiceRoleForPaiLLMTrace
     *
     * @var string
     */
    public $roleDetail;

    /**
     * @description The name of the service-linked role. Default value: AliyunServiceRoleForPaiLLMTrace.
     *
     * @example AliyunServiceRoleForPaiLLMTrace
     *
     * @var string
     */
    public $roleName;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'roleDetail' => 'RoleDetail',
        'roleName' => 'RoleName',
    ];

    public function validate() {}

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
        if (null !== $this->roleDetail) {
            $res['RoleDetail'] = $this->roleDetail;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceIdentityRoleResponseBody
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
        if (isset($map['RoleDetail'])) {
            $model->roleDetail = $map['RoleDetail'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
