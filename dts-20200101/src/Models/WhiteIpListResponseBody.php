<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class WhiteIpListResponseBody extends Model
{
    /**
     * @example 403
     *
     * @var string
     */
    public $dynamicCode;

    /**
     * @description The dynamic error code. This parameter will be removed in the future.
     *
     * @example Type
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @description Indicates whether the call was successful. Valid values:
     *
     *   **true**: The call was successful.
     *   **false**: The call failed.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The CIDR blocks of DTS servers. Multiple CIDR blocks are separated by commas (,).
     *
     * @example The Value of Input Parameter %s is not valid.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The ID of the request.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The dynamic part in the error message. This parameter is used to replace **%s** in the **ErrMessage** parameter.
     *
     * @example 10.151.12.0/24,47.102.181.0/24,47.101.109.0/24,120.55.129.0/24,11.115.103.0/24,47.102.234.0/24
     *
     * @var string
     */
    public $ipList;

    /**
     * @description The error code returned if the call failed.
     *
     * @example AD823BD3-1BA6-4117-A536-165CB280****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The error message returned if the call failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'dynamicCode'    => 'DynamicCode',
        'dynamicMessage' => 'DynamicMessage',
        'errCode'        => 'ErrCode',
        'errMessage'     => 'ErrMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'ipList'         => 'IpList',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicCode) {
            $res['DynamicCode'] = $this->dynamicCode;
        }
        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
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
        if (null !== $this->ipList) {
            $res['IpList'] = $this->ipList;
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
     * @return WhiteIpListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicCode'])) {
            $model->dynamicCode = $map['DynamicCode'];
        }
        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
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
        if (isset($map['IpList'])) {
            $model->ipList = $map['IpList'];
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
