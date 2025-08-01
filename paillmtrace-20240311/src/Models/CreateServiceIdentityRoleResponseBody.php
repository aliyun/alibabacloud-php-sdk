<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceIdentityRoleResponseBody extends Model
{
    /**
     * @description The error code returned if the request fails.
     *
     * @example InvalidInputParams
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message returned if the request fails.
     *
     * @example User don\\"t have permission to create SLR.
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
    public $roleDetails;

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
        'roleDetails' => 'RoleDetails',
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
        if (null !== $this->roleDetails) {
            $res['RoleDetails'] = $this->roleDetails;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceIdentityRoleResponseBody
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
        if (isset($map['RoleDetails'])) {
            $model->roleDetails = $map['RoleDetails'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
