<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSynchronizationJobAlertResponseBody extends Model
{
    /**
     * @description The mobile phone numbers that receive latency-related alerts.
     *
     * @example 1361234****,1371234****
     *
     * @var string
     */
    public $delayAlertPhone;

    /**
     * @description Indicates whether task latency is monitored. Valid values:
     *
     *   **enable**: yes
     *   **disable**: no
     *
     * @example enable
     *
     * @var string
     */
    public $delayAlertStatus;

    /**
     * @description The threshold for triggering latency alerts. Unit: seconds.
     *
     * @example 10
     *
     * @var string
     */
    public $delayOverSeconds;

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
     * @example The request processing has failed due to some unknown error.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The mobile phone numbers that receive status-related alerts.
     *
     * @example 1361234****,1371234****
     *
     * @var string
     */
    public $errorAlertPhone;

    /**
     * @description Indicates whether task status is monitored. Valid values:
     *
     *   **enable**: yes
     *   **disable**: no
     *
     * @example enable
     *
     * @var string
     */
    public $errorAlertStatus;

    /**
     * @description The ID of the request.
     *
     * @example 210ec20e16055205968635339d****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful.
     *
     * @example true
     *
     * @var string
     */
    public $success;

    /**
     * @description The synchronization direction. Valid values:
     *
     *   **Forward**
     *
     *   **Reverse**
     *
     * > This parameter is returned only when the topology of data synchronization is two-way synchronization.
     * @example Forward
     *
     * @var string
     */
    public $synchronizationDirection;

    /**
     * @description The ID of the data synchronization instance.
     *
     * @example kxz1170c10p****
     *
     * @var string
     */
    public $synchronizationJobId;

    /**
     * @description The name of the data synchronization task.
     *
     * @example Polar MySQL_TO_RDS MySQL
     *
     * @var string
     */
    public $synchronizationJobName;
    protected $_name = [
        'delayAlertPhone'          => 'DelayAlertPhone',
        'delayAlertStatus'         => 'DelayAlertStatus',
        'delayOverSeconds'         => 'DelayOverSeconds',
        'errCode'                  => 'ErrCode',
        'errMessage'               => 'ErrMessage',
        'errorAlertPhone'          => 'ErrorAlertPhone',
        'errorAlertStatus'         => 'ErrorAlertStatus',
        'requestId'                => 'RequestId',
        'success'                  => 'Success',
        'synchronizationDirection' => 'SynchronizationDirection',
        'synchronizationJobId'     => 'SynchronizationJobId',
        'synchronizationJobName'   => 'SynchronizationJobName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delayAlertPhone) {
            $res['DelayAlertPhone'] = $this->delayAlertPhone;
        }
        if (null !== $this->delayAlertStatus) {
            $res['DelayAlertStatus'] = $this->delayAlertStatus;
        }
        if (null !== $this->delayOverSeconds) {
            $res['DelayOverSeconds'] = $this->delayOverSeconds;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->errorAlertPhone) {
            $res['ErrorAlertPhone'] = $this->errorAlertPhone;
        }
        if (null !== $this->errorAlertStatus) {
            $res['ErrorAlertStatus'] = $this->errorAlertStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }
        if (null !== $this->synchronizationJobId) {
            $res['SynchronizationJobId'] = $this->synchronizationJobId;
        }
        if (null !== $this->synchronizationJobName) {
            $res['SynchronizationJobName'] = $this->synchronizationJobName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSynchronizationJobAlertResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DelayAlertPhone'])) {
            $model->delayAlertPhone = $map['DelayAlertPhone'];
        }
        if (isset($map['DelayAlertStatus'])) {
            $model->delayAlertStatus = $map['DelayAlertStatus'];
        }
        if (isset($map['DelayOverSeconds'])) {
            $model->delayOverSeconds = $map['DelayOverSeconds'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['ErrorAlertPhone'])) {
            $model->errorAlertPhone = $map['ErrorAlertPhone'];
        }
        if (isset($map['ErrorAlertStatus'])) {
            $model->errorAlertStatus = $map['ErrorAlertStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }
        if (isset($map['SynchronizationJobId'])) {
            $model->synchronizationJobId = $map['SynchronizationJobId'];
        }
        if (isset($map['SynchronizationJobName'])) {
            $model->synchronizationJobName = $map['SynchronizationJobName'];
        }

        return $model;
    }
}
