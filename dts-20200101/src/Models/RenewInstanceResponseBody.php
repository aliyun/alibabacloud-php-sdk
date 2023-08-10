<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class RenewInstanceResponseBody extends Model
{
    /**
     * @description The billing method of the DTS instance. **PREPAY** is returned, which indicates the subscription billing method.
     *
     * @example PREPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The error code.
     *
     * >  This parameter will be removed in the future.
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The ID of the data synchronization or change tracking task.
     *
     * @example qi0r643lc31****
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
     * @description The time when the DTS instance expires after renewal. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ssZZZ* format. The time is displayed in UTC.
     *
     * >  **ZZZ** indicates the offset of the time zone, which is displayed in the format of a plus sign (+) or a minus sign (-) followed by hours and minutes, such as **+00:00**.
     * @example 2021-08-04T16:00:00.000+00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The error code returned if the request failed.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned if the request failed.
     *
     * @example The request processing has failed due to some unknown error.
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
     * @example dtsqi0r643lc31****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the request.
     *
     * @example 1112E255-0C38-4970-8159-1D54AD92****
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
     * @return RenewInstanceResponseBody
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
