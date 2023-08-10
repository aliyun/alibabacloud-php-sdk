<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterUsedUtilizationResponseBody extends Model
{
    /**
     * @description The error code returned by the backend service. The number is incremented.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The CPU utilization of the cluster. Unit: percentage.
     *
     * @example 50
     *
     * @var float
     */
    public $cpuTotal;

    /**
     * @description The ID of the cluster.
     *
     * @example dtscluster_h3fl1cs217sx952
     *
     * @var string
     */
    public $dedicatedClusterId;

    /**
     * @description The total disk size of the cluster. Unit: GB.
     *
     * @example 1024
     *
     * @var float
     */
    public $diskTotal;

    /**
     * @description The disk usage of the cluster. Unit: GB.
     *
     * @example 96
     *
     * @var float
     */
    public $diskUsed;

    /**
     * @description The total number of DTS units (DUs).
     *
     * @example 30
     *
     * @var int
     */
    public $duTotal;

    /**
     * @description The usage of DUs.
     *
     * @example 2
     *
     * @var int
     */
    public $duUsed;

    /**
     * @description The dynamic part in the error message. This parameter is used to replace %s in the ErrMessage parameter.
     *
     * @example Type
     *
     * @var string
     */
    public $dynamicMessage;

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
     * @description The HTTP status code returned.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The total amount of memory. A value of 0 is temporarily returned.
     *
     * @example 0
     *
     * @var float
     */
    public $memoryTotal;

    /**
     * @description The memory usage. A value of 0 is temporarily returned.
     *
     * @example 0
     *
     * @var float
     */
    public $memoryUsed;

    /**
     * @description The memory usage.
     *
     * @example 1.0
     *
     * @var float
     */
    public $memoryUsedPercentage;

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
     * @var bool
     */
    public $success;

    /**
     * @description The number of tasks that are in progress.
     *
     * @example 3
     *
     * @var int
     */
    public $taskRunning;
    protected $_name = [
        'code'                 => 'Code',
        'cpuTotal'             => 'CpuTotal',
        'dedicatedClusterId'   => 'DedicatedClusterId',
        'diskTotal'            => 'DiskTotal',
        'diskUsed'             => 'DiskUsed',
        'duTotal'              => 'DuTotal',
        'duUsed'               => 'DuUsed',
        'dynamicMessage'       => 'DynamicMessage',
        'errCode'              => 'ErrCode',
        'errMessage'           => 'ErrMessage',
        'httpStatusCode'       => 'HttpStatusCode',
        'memoryTotal'          => 'MemoryTotal',
        'memoryUsed'           => 'MemoryUsed',
        'memoryUsedPercentage' => 'MemoryUsedPercentage',
        'requestId'            => 'RequestId',
        'success'              => 'Success',
        'taskRunning'          => 'TaskRunning',
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
        if (null !== $this->cpuTotal) {
            $res['CpuTotal'] = $this->cpuTotal;
        }
        if (null !== $this->dedicatedClusterId) {
            $res['DedicatedClusterId'] = $this->dedicatedClusterId;
        }
        if (null !== $this->diskTotal) {
            $res['DiskTotal'] = $this->diskTotal;
        }
        if (null !== $this->diskUsed) {
            $res['DiskUsed'] = $this->diskUsed;
        }
        if (null !== $this->duTotal) {
            $res['DuTotal'] = $this->duTotal;
        }
        if (null !== $this->duUsed) {
            $res['DuUsed'] = $this->duUsed;
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
        if (null !== $this->memoryTotal) {
            $res['MemoryTotal'] = $this->memoryTotal;
        }
        if (null !== $this->memoryUsed) {
            $res['MemoryUsed'] = $this->memoryUsed;
        }
        if (null !== $this->memoryUsedPercentage) {
            $res['MemoryUsedPercentage'] = $this->memoryUsedPercentage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->taskRunning) {
            $res['TaskRunning'] = $this->taskRunning;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterUsedUtilizationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CpuTotal'])) {
            $model->cpuTotal = $map['CpuTotal'];
        }
        if (isset($map['DedicatedClusterId'])) {
            $model->dedicatedClusterId = $map['DedicatedClusterId'];
        }
        if (isset($map['DiskTotal'])) {
            $model->diskTotal = $map['DiskTotal'];
        }
        if (isset($map['DiskUsed'])) {
            $model->diskUsed = $map['DiskUsed'];
        }
        if (isset($map['DuTotal'])) {
            $model->duTotal = $map['DuTotal'];
        }
        if (isset($map['DuUsed'])) {
            $model->duUsed = $map['DuUsed'];
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
        if (isset($map['MemoryTotal'])) {
            $model->memoryTotal = $map['MemoryTotal'];
        }
        if (isset($map['MemoryUsed'])) {
            $model->memoryUsed = $map['MemoryUsed'];
        }
        if (isset($map['MemoryUsedPercentage'])) {
            $model->memoryUsedPercentage = $map['MemoryUsedPercentage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TaskRunning'])) {
            $model->taskRunning = $map['TaskRunning'];
        }

        return $model;
    }
}
