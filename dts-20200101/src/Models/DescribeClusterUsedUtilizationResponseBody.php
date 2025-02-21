<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;

class DescribeClusterUsedUtilizationResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var float
     */
    public $cpuTotal;
    /**
     * @var string
     */
    public $dedicatedClusterId;
    /**
     * @var float
     */
    public $diskTotal;
    /**
     * @var float
     */
    public $diskUsed;
    /**
     * @var int
     */
    public $duTotal;
    /**
     * @var int
     */
    public $duUsed;
    /**
     * @var string
     */
    public $dynamicMessage;
    /**
     * @var string
     */
    public $errCode;
    /**
     * @var string
     */
    public $errMessage;
    /**
     * @var int
     */
    public $httpStatusCode;
    /**
     * @var float
     */
    public $memoryTotal;
    /**
     * @var float
     */
    public $memoryUsed;
    /**
     * @var float
     */
    public $memoryUsedPercentage;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
