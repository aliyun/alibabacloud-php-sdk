<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;

class DescribeDedicatedClusterMonitorRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $cpuAlarmThreshold;
    /**
     * @var string
     */
    public $dedicatedClusterId;
    /**
     * @var string
     */
    public $diskAlarmThreshold;
    /**
     * @var string
     */
    public $duAlarmThreshold;
    /**
     * @var string
     */
    public $errCode;
    /**
     * @var string
     */
    public $errMessage;
    /**
     * @var string
     */
    public $httpStatusCode;
    /**
     * @var string
     */
    public $memAlarmThreshold;
    /**
     * @var string
     */
    public $noticeSwitch;
    /**
     * @var string
     */
    public $phones;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $success;
    protected $_name = [
        'cpuAlarmThreshold'  => 'CpuAlarmThreshold',
        'dedicatedClusterId' => 'DedicatedClusterId',
        'diskAlarmThreshold' => 'DiskAlarmThreshold',
        'duAlarmThreshold'   => 'DuAlarmThreshold',
        'errCode'            => 'ErrCode',
        'errMessage'         => 'ErrMessage',
        'httpStatusCode'     => 'HttpStatusCode',
        'memAlarmThreshold'  => 'MemAlarmThreshold',
        'noticeSwitch'       => 'NoticeSwitch',
        'phones'             => 'Phones',
        'requestId'          => 'RequestId',
        'success'            => 'Success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuAlarmThreshold) {
            $res['CpuAlarmThreshold'] = $this->cpuAlarmThreshold;
        }

        if (null !== $this->dedicatedClusterId) {
            $res['DedicatedClusterId'] = $this->dedicatedClusterId;
        }

        if (null !== $this->diskAlarmThreshold) {
            $res['DiskAlarmThreshold'] = $this->diskAlarmThreshold;
        }

        if (null !== $this->duAlarmThreshold) {
            $res['DuAlarmThreshold'] = $this->duAlarmThreshold;
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

        if (null !== $this->memAlarmThreshold) {
            $res['MemAlarmThreshold'] = $this->memAlarmThreshold;
        }

        if (null !== $this->noticeSwitch) {
            $res['NoticeSwitch'] = $this->noticeSwitch;
        }

        if (null !== $this->phones) {
            $res['Phones'] = $this->phones;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuAlarmThreshold'])) {
            $model->cpuAlarmThreshold = $map['CpuAlarmThreshold'];
        }

        if (isset($map['DedicatedClusterId'])) {
            $model->dedicatedClusterId = $map['DedicatedClusterId'];
        }

        if (isset($map['DiskAlarmThreshold'])) {
            $model->diskAlarmThreshold = $map['DiskAlarmThreshold'];
        }

        if (isset($map['DuAlarmThreshold'])) {
            $model->duAlarmThreshold = $map['DuAlarmThreshold'];
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

        if (isset($map['MemAlarmThreshold'])) {
            $model->memAlarmThreshold = $map['MemAlarmThreshold'];
        }

        if (isset($map['NoticeSwitch'])) {
            $model->noticeSwitch = $map['NoticeSwitch'];
        }

        if (isset($map['Phones'])) {
            $model->phones = $map['Phones'];
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
