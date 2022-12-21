<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserActiveTenantResponseBody\tenant;
use AlibabaCloud\Tea\Model;

class GetUserActiveTenantResponseBody extends Model
{
    /**
     * @description The error code.
     *
     * @example TenantNotExist
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message.
     *
     * @example The specified tenant does not exist.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the request.
     *
     * @example 4B63CAC5-BD7F-5C7C-82C9-59DFFBC3C5C2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   **true**: The request is successful.
     *   **false**: The request fails.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The details of the tenant.
     *
     * @var tenant
     */
    public $tenant;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
        'tenant'       => 'Tenant',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tenant) {
            $res['Tenant'] = null !== $this->tenant ? $this->tenant->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserActiveTenantResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Tenant'])) {
            $model->tenant = tenant::fromMap($map['Tenant']);
        }

        return $model;
    }
}
