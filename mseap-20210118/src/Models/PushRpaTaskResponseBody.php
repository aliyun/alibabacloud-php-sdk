<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\Tea\Model;

class PushRpaTaskResponseBody extends Model
{
    /**
     * @description allowRetry
     *
     * @example False
     *
     * @var bool
     */
    public $allowRetry;

    /**
     * @description appName
     *
     * @example itl-material
     *
     * @var string
     */
    public $appName;

    /**
     * @description dynamicCode
     *
     * @example 1
     *
     * @var string
     */
    public $dynamicCode;

    /**
     * @description dynamicMessage
     *
     * @example can not find env: lazada-sg-pre
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @description errorCode
     *
     * @example 200
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description errorMsg
     *
     * @example 11111111111111111111111
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description httpStatusCode
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example 58.23.71.83:3128
     *
     * @var string
     */
    public $module;

    /**
     * @description requestId
     *
     * @example ECE5E7EF-6898-5E24-97A1-B96C73BDE26C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description success
     *
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'allowRetry' => 'AllowRetry',
        'appName' => 'AppName',
        'dynamicCode' => 'DynamicCode',
        'dynamicMessage' => 'DynamicMessage',
        'errorCode' => 'ErrorCode',
        'errorMsg' => 'ErrorMsg',
        'httpStatusCode' => 'HttpStatusCode',
        'module' => 'Module',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate() {}

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
            $res['Module'] = $this->module;
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
     * @return PushRpaTaskResponseBody
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
            $model->module = $map['Module'];
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
