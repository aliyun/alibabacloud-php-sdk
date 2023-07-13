<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechPushJobResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example tBUm***********************QPGT
     *
     * @var string
     */
    public $code;

    /**
     * @example 1620634297000
     *
     * @var int
     */
    public $createdTime;

    /**
     * @example test
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example 1620634297000
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $failDeviceNum;

    /**
     * @example test_group
     *
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @example 0iOf*****************n001
     *
     * @var string
     */
    public $iotId;

    /**
     * @example den0ZLt****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example ALL
     *
     * @var string
     */
    public $pushMode;

    /**
     * @example 2
     *
     * @var int
     */
    public $runningDeviceNum;

    /**
     * @example 1
     *
     * @var int
     */
    public $speechNum;

    /**
     * @example true
     *
     * @var bool
     */
    public $speechStatus;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @example 1
     *
     * @var int
     */
    public $successDeviceNum;

    /**
     * @example 3
     *
     * @var int
     */
    public $totalDeviceNum;
    protected $_name = [
        'code'             => 'Code',
        'createdTime'      => 'CreatedTime',
        'deviceName'       => 'DeviceName',
        'expiredTime'      => 'ExpiredTime',
        'failDeviceNum'    => 'FailDeviceNum',
        'groupId'          => 'GroupId',
        'groupName'        => 'GroupName',
        'iotId'            => 'IotId',
        'productKey'       => 'ProductKey',
        'pushMode'         => 'PushMode',
        'runningDeviceNum' => 'RunningDeviceNum',
        'speechNum'        => 'SpeechNum',
        'speechStatus'     => 'SpeechStatus',
        'status'           => 'Status',
        'successDeviceNum' => 'SuccessDeviceNum',
        'totalDeviceNum'   => 'TotalDeviceNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->failDeviceNum) {
            $res['FailDeviceNum'] = $this->failDeviceNum;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->pushMode) {
            $res['PushMode'] = $this->pushMode;
        }
        if (null !== $this->runningDeviceNum) {
            $res['RunningDeviceNum'] = $this->runningDeviceNum;
        }
        if (null !== $this->speechNum) {
            $res['SpeechNum'] = $this->speechNum;
        }
        if (null !== $this->speechStatus) {
            $res['SpeechStatus'] = $this->speechStatus;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->successDeviceNum) {
            $res['SuccessDeviceNum'] = $this->successDeviceNum;
        }
        if (null !== $this->totalDeviceNum) {
            $res['TotalDeviceNum'] = $this->totalDeviceNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['FailDeviceNum'])) {
            $model->failDeviceNum = $map['FailDeviceNum'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['PushMode'])) {
            $model->pushMode = $map['PushMode'];
        }
        if (isset($map['RunningDeviceNum'])) {
            $model->runningDeviceNum = $map['RunningDeviceNum'];
        }
        if (isset($map['SpeechNum'])) {
            $model->speechNum = $map['SpeechNum'];
        }
        if (isset($map['SpeechStatus'])) {
            $model->speechStatus = $map['SpeechStatus'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SuccessDeviceNum'])) {
            $model->successDeviceNum = $map['SuccessDeviceNum'];
        }
        if (isset($map['TotalDeviceNum'])) {
            $model->totalDeviceNum = $map['TotalDeviceNum'];
        }

        return $model;
    }
}
