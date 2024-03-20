<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainSpecialBizDetailResponseBody\module;
use AlibabaCloud\Tea\Model;

class QueryDomainSpecialBizDetailResponseBody extends Model
{
    /**
     * @description Indicates whether retries are allowed.
     *
     * @example False
     *
     * @var bool
     */
    public $allowRetry;

    /**
     * @description The name of the application for which the error code is returned.
     *
     * @example test-com
     *
     * @var string
     */
    public $appName;

    /**
     * @description The dynamic error code.
     *
     * @example -
     *
     * @var string
     */
    public $dynamicCode;

    /**
     * @description The dynamic error message.
     *
     * @example -
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @description The array of error parameters that are returned.
     *
     * @var mixed[]
     */
    public $errorArgs;

    /**
     * @description The error code.
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message.
     *
     * @example 110001
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description The HTTP status code that is directly returned.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The returned data.
     *
     * @var module
     */
    public $module;

    /**
     * @description The request ID.
     *
     * @example A83E1D74-E46B-505C-947A-8C6B7E41C011
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example True
     *
     * @var bool
     */
    public $success;

    /**
     * @description Indicates whether to perform synchronous processing.
     *
     * @example true
     *
     * @var bool
     */
    public $synchro;
    protected $_name = [
        'allowRetry'     => 'AllowRetry',
        'appName'        => 'AppName',
        'dynamicCode'    => 'DynamicCode',
        'dynamicMessage' => 'DynamicMessage',
        'errorArgs'      => 'ErrorArgs',
        'errorCode'      => 'ErrorCode',
        'errorMsg'       => 'ErrorMsg',
        'httpStatusCode' => 'HttpStatusCode',
        'module'         => 'Module',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'synchro'        => 'Synchro',
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
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
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
        if (null !== $this->synchro) {
            $res['Synchro'] = $this->synchro;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDomainSpecialBizDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowRetry'])) {
            $model->allowRetry = $map['AllowRetry'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
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
        if (isset($map['Synchro'])) {
            $model->synchro = $map['Synchro'];
        }

        return $model;
    }
}
