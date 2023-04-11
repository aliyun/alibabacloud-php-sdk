<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetProxyAccessResponseBody\proxyAccess;
use AlibabaCloud\Tea\Model;

class GetProxyAccessResponseBody extends Model
{
    /**
     * @description The error code.
     *
     * @example UserNotExist
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned if the request failed.
     *
     * @example The specified user not exists.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The authorization information about the secure access proxy feature.
     *
     * @var proxyAccess
     */
    public $proxyAccess;

    /**
     * @description The ID of the request.
     *
     * @example 3CDB8601-AD74-4A47-8114-08E08CD6****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**: The request was successful.
     *   **false**: The request failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'proxyAccess'  => 'ProxyAccess',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
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
        if (null !== $this->proxyAccess) {
            $res['ProxyAccess'] = null !== $this->proxyAccess ? $this->proxyAccess->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProxyAccessResponseBody
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
        if (isset($map['ProxyAccess'])) {
            $model->proxyAccess = proxyAccess::fromMap($map['ProxyAccess']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
