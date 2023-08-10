<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class TransferPayTypeResponseBody extends Model
{
    /**
     * @description The billing method of the DTS instance. Valid values:
     *
     *   **PrePaid**: subscription
     *   **PostPaid**: pay-as-you-go
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The error code. This parameter will be removed in the future.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The ID of the DTS task.
     *
     * @example o4nh3g7jg56****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The dynamic part in the error message. This parameter is used to replace the **%s** variable in the **ErrMessage** parameter.
     *
     * >  If the return value of the **ErrMessage** parameter is **The Value of Input Parameter %s is not valid** and the return value of the **DynamicMessage** parameter is **DtsJobId**, the specified **DtsJobId** parameter is invalid.
     * @example DtsJobId
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @description The expiration time of the subscription instance. The value is a UNIX timestamp.
     *
     * >
     *   If the DTS instance is a pay-as-you-go instance, the value of this parameter is empty.
     *   You can use a search engine to obtain a UNIX timestamp converter.
     *
     * @example 1614916318
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The error code returned if the call failed.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned if the call failed.
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
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The ID of the DTS instance.
     *
     * @example dtso4nh3g7jg56****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the request.
     *
     * @example 601B6F25-21E7-4484-99D5-3EF2625C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful. Valid values:
     *
     *   **true**: The call was successful.
     *   **false**: The call failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'chargeType'     => 'ChargeType',
        'code'           => 'Code',
        'dtsJobId'       => 'DtsJobId',
        'dynamicMessage' => 'DynamicMessage',
        'endTime'        => 'EndTime',
        'errCode'        => 'ErrCode',
        'errMessage'     => 'ErrMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'instanceId'     => 'InstanceId',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
     * @return TransferPayTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
