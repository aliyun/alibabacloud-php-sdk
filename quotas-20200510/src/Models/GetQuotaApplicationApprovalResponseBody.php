<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaApplicationApprovalResponseBody\module;
use AlibabaCloud\Tea\Model;

class GetQuotaApplicationApprovalResponseBody extends Model
{
    /**
     * @description Indicates whether retries are allowed. Valid values:
     *
     *   false
     *   true
     *
     * @example false
     *
     * @var bool
     */
    public $allowRetry;

    /**
     * @description The dynamic error code.
     *
     * @example PARAMETER.ILLEGALL
     *
     * @var string
     */
    public $dynamicCode;

    /**
     * @description The dynamic error message.
     *
     * @example Parameter[%s] is required.
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @description The parameters whose values are invalid.
     *
     * @var mixed[]
     */
    public $errorArgs;

    /**
     * @description The error code.
     *
     * @example RAM.PERMISSION.DENIED
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message.
     *
     * @example You are not authorized to do this action or the API input parameter is invalid.
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The information about quota application approval.
     *
     * @var module
     */
    public $module;

    /**
     * @description The request ID.
     *
     * @example 7ED584FB-ECBF-4A2A-969D-F54D25EFABF9
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   true
     *   false
     *
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'allowRetry'     => 'AllowRetry',
        'dynamicCode'    => 'DynamicCode',
        'dynamicMessage' => 'DynamicMessage',
        'errorArgs'      => 'ErrorArgs',
        'errorCode'      => 'ErrorCode',
        'errorMsg'       => 'ErrorMsg',
        'httpStatusCode' => 'HttpStatusCode',
        'module'         => 'Module',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowRetry) {
            $res['AllowRetry'] = $this->allowRetry;
        }
        if (null !== $this->dynamicCode) {
            $res['DynamicCode'] = $this->dynamicCode;
        }
        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }
        if (null !== $this->errorArgs) {
            $res['ErrorArgs'] = $this->errorArgs;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->module) {
            $res['Module'] = null !== $this->module ? $this->module->toMap() : null;
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
     * @return GetQuotaApplicationApprovalResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowRetry'])) {
            $model->allowRetry = $map['AllowRetry'];
        }
        if (isset($map['DynamicCode'])) {
            $model->dynamicCode = $map['DynamicCode'];
        }
        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }
        if (isset($map['ErrorArgs'])) {
            if (!empty($map['ErrorArgs'])) {
                $model->errorArgs = $map['ErrorArgs'];
            }
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Module'])) {
            $model->module = module::fromMap($map['Module']);
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
