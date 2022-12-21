<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetProxyAccessResponseBody\proxyAccess;
use AlibabaCloud\Tea\Model;

class GetProxyAccessResponseBody extends Model
{
    /**
     * @example UserNotExist
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example The specified user not exists.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @var proxyAccess
     */
    public $proxyAccess;

    /**
     * @description Id of the request
     *
     * @example 3CDB8601-AD74-4A47-8114-08E08CD6****
     *
     * @var string
     */
    public $requestId;

    /**
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
