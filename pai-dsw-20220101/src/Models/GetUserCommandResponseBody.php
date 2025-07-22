<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetUserCommandResponseBody\onStart;
use AlibabaCloud\Tea\Model;

class GetUserCommandResponseBody extends Model
{
    /**
     * @example ValidationError
     *
     * @var string
     */
    public $code;

    /**
     * @example null
     *
     * @var string
     */
    public $message;

    /**
     * @var onStart
     */
    public $onStart;

    /**
     * @example BEBDF2EE-642E-5992-8907-D2011A7ACEFE
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

    /**
     * @example 1900
     *
     * @var string
     */
    public $userCommandId;

    /**
     * @example "AccessDeniedDetail": {
     * "PolicyType": "AccountLevelIdentityBasedPolicy",
     * "AuthPrincipalOwnerId": "xxx",
     * "EncodedDiagnosticMessage": "AQIBIAAAA....bwhg==",
     * "AuthPrincipalType": "SubUser",
     * "AuthPrincipalDisplayName": "xxx",
     * "NoPermissionType": "ImplicitDeny",
     * "AuthAction": "ram:GetUserCommand"
     * }
     *
     * @var mixed[]
     */
    public $accessDeniedDetail;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'onStart' => 'OnStart',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'userCommandId' => 'UserCommandId',
        'accessDeniedDetail' => 'accessDeniedDetail',
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
        if (null !== $this->onStart) {
            $res['OnStart'] = null !== $this->onStart ? $this->onStart->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->userCommandId) {
            $res['UserCommandId'] = $this->userCommandId;
        }
        if (null !== $this->accessDeniedDetail) {
            $res['accessDeniedDetail'] = $this->accessDeniedDetail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserCommandResponseBody
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
        if (isset($map['OnStart'])) {
            $model->onStart = onStart::fromMap($map['OnStart']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['UserCommandId'])) {
            $model->userCommandId = $map['UserCommandId'];
        }
        if (isset($map['accessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['accessDeniedDetail'];
        }

        return $model;
    }
}
