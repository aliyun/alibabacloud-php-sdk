<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class GetTemplateCategoriesResponseBody extends Model
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
     * @example ronghe
     *
     * @var string
     */
    public $appName;

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
     * @example {&quot;ErrMsg&quot;:&quot;Right angle correction failed!&quot;,&quot;ErrCode&quot;:&quot;5002&quot;}
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description module
     *
     * @var mixed[]
     */
    public $module;

    /**
     * @description requestId
     *
     * @example AF0F836D-5E0C-5701-BD55-3DA4C4F29021
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
        'appName'    => 'AppName',
        'errorCode'  => 'ErrorCode',
        'errorMsg'   => 'ErrorMsg',
        'module'     => 'Module',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
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
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
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
     * @return GetTemplateCategoriesResponseBody
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
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
