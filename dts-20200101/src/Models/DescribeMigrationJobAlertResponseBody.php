<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMigrationJobAlertResponseBody extends Model
{
    /**
     * @description Phone number of the contact for delay alarm.
     *
     * @example 1361234****,1371234****
     *
     * @var string
     */
    public $delayAlertPhone;

    /**
     * @description Whether to monitor the delay status, return values:
     * - **enable**: Yes. - **disable**: No.
     *
     * @example enable
     *
     * @var string
     */
    public $delayAlertStatus;

    /**
     * @description The threshold for triggering a delayed alarm, in seconds.
     *
     * @example 0
     *
     * @var string
     */
    public $delayOverSeconds;

    /**
     * @description Error code returned when the call fails.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description Indicates whether the call was successful.
     *
     * @example The request processing has failed due to some unknown error.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description Phone number of the contact for abnormal alarm notifications
     *
     * @example 1361234****,1371234****
     *
     * @var string
     */
    public $errorAlertPhone;

    /**
     * @description Whether to monitor for abnormal status, return values:
     * - **enable**: Yes. - **disable**: No.
     *
     * @example enable
     *
     * @var string
     */
    public $errorAlertStatus;

    /**
     * @description Data migration instance ID.
     *
     * @example dtslb9113qq11n****
     *
     * @var string
     */
    public $migrationJobId;

    /**
     * @description Name of the data migration task.
     *
     * @example zwy-test5
     *
     * @var string
     */
    public $migrationJobName;

    /**
     * @description The ID of the request.
     *
     * @example CFB89C51-6F03-519C-A921-AAE28D50AEFB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Whether the request was successful.
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'delayAlertPhone' => 'DelayAlertPhone',
        'delayAlertStatus' => 'DelayAlertStatus',
        'delayOverSeconds' => 'DelayOverSeconds',
        'errCode' => 'ErrCode',
        'errMessage' => 'ErrMessage',
        'errorAlertPhone' => 'ErrorAlertPhone',
        'errorAlertStatus' => 'ErrorAlertStatus',
        'migrationJobId' => 'MigrationJobId',
        'migrationJobName' => 'MigrationJobName',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate() {}

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
        if (null !== $this->migrationJobId) {
            $res['MigrationJobId'] = $this->migrationJobId;
        }
        if (null !== $this->migrationJobName) {
            $res['MigrationJobName'] = $this->migrationJobName;
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
     * @return DescribeMigrationJobAlertResponseBody
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
        if (isset($map['MigrationJobId'])) {
            $model->migrationJobId = $map['MigrationJobId'];
        }
        if (isset($map['MigrationJobName'])) {
            $model->migrationJobName = $map['MigrationJobName'];
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
