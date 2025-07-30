<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDedicatedClusterMonitorRuleResponseBody extends Model
{
    /**
     * @description The alert threshold for CPU utilization. Unit: percentage.
     *
     * @example 80
     *
     * @var string
     */
    public $cpuAlarmThreshold;

    /**
     * @description The ID of the cluster.
     *
     * @example dtsClustervcwn1oeyu5fx4yf
     *
     * @var string
     */
    public $dedicatedClusterId;

    /**
     * @description The alert threshold for disk usage. Unit: percentage.
     *
     * @example 80
     *
     * @var string
     */
    public $diskAlarmThreshold;

    /**
     * @description The alert threshold for DTS Unit (DU) usage. Unit: percentage.
     *
     * @example 46
     *
     * @var string
     */
    public $duAlarmThreshold;

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
     * @description The alert threshold for memory usage. Unit: percentage.
     *
     * @example 80
     *
     * @var string
     */
    public $memAlarmThreshold;

    /**
     * @description Indicates whether the alert feature is enabled. Valid values:
     *
     *   **1**: The alert feature is enabled.
     *   **0**: The alert feature is disabled.
     *
     * @example 1
     *
     * @var string
     */
    public $noticeSwitch;

    /**
     * @description The mobile phone number to which alerts are sent. Separate multiple mobile phone numbers with commas (,).
     *
     * @example 186****7653
     *
     * @var string
     */
    public $phones;

    /**
     * @description The ID of the request.
     *
     * @example 621BB4F8-3016-4FAA-8D5A-5D3163CC****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'cpuAlarmThreshold' => 'CpuAlarmThreshold',
        'dedicatedClusterId' => 'DedicatedClusterId',
        'diskAlarmThreshold' => 'DiskAlarmThreshold',
        'duAlarmThreshold' => 'DuAlarmThreshold',
        'errCode' => 'ErrCode',
        'errMessage' => 'ErrMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'memAlarmThreshold' => 'MemAlarmThreshold',
        'noticeSwitch' => 'NoticeSwitch',
        'phones' => 'Phones',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeDedicatedClusterMonitorRuleResponseBody
     */
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
