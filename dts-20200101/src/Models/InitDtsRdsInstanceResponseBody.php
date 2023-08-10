<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class InitDtsRdsInstanceResponseBody extends Model
{
    /**
     * @description The built-in account that is used by DTS to connect to the node.
     *
     * @example rdsdt_dtsacct
     *
     * @var string
     */
    public $adminAccount;

    /**
     * @description The password of the built-in account.
     *
     * @example 1jecpqrtc****
     *
     * @var string
     */
    public $adminPassword;

    /**
     * @description The error code returned if the request fails.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned if the request fails.
     *
     * @example The Value of Input Parameter %s is not valid.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var string
     */
    public $httpStatusCode;

    /**
     * @description The ID of the request.
     *
     * @example 7796ECE0-9C17-5E4D-9CE6-B7EC825A****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'adminAccount'   => 'AdminAccount',
        'adminPassword'  => 'AdminPassword',
        'errCode'        => 'ErrCode',
        'errMessage'     => 'ErrMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adminAccount) {
            $res['AdminAccount'] = $this->adminAccount;
        }
        if (null !== $this->adminPassword) {
            $res['AdminPassword'] = $this->adminPassword;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
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
     * @return InitDtsRdsInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdminAccount'])) {
            $model->adminAccount = $map['AdminAccount'];
        }
        if (isset($map['AdminPassword'])) {
            $model->adminPassword = $map['AdminPassword'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
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
