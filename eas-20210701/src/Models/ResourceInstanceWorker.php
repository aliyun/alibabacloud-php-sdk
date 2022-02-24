<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class ResourceInstanceWorker extends Model
{
    /**
     * @description CpuLimit
     *
     * @var int
     */
    public $cpuLimit;

    /**
     * @description CpuRequest
     *
     * @var int
     */
    public $cpuRequest;

    /**
     * @description GpuLimit
     *
     * @var int
     */
    public $gpuLimit;

    /**
     * @description GpuRequest
     *
     * @var int
     */
    public $gpuRequest;

    /**
     * @description MemoryLimit
     *
     * @var int
     */
    public $memoryLimit;

    /**
     * @description MemoryRquest
     *
     * @var int
     */
    public $memoryRquest;

    /**
     * @description pod名
     *
     * @var string
     */
    public $name;

    /**
     * @description 是否ready
     *
     * @var bool
     */
    public $ready;

    /**
     * @description RestartCount
     *
     * @var int
     */
    public $restartCount;

    /**
     * @description 服务名
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description StartTime
     *
     * @var string
     */
    public $startTime;

    /**
     * @description pod状态
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'cpuLimit'     => 'CpuLimit',
        'cpuRequest'   => 'CpuRequest',
        'gpuLimit'     => 'GpuLimit',
        'gpuRequest'   => 'GpuRequest',
        'memoryLimit'  => 'MemoryLimit',
        'memoryRquest' => 'MemoryRquest',
        'name'         => 'Name',
        'ready'        => 'Ready',
        'restartCount' => 'RestartCount',
        'serviceName'  => 'ServiceName',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuLimit) {
            $res['CpuLimit'] = $this->cpuLimit;
        }
        if (null !== $this->cpuRequest) {
            $res['CpuRequest'] = $this->cpuRequest;
        }
        if (null !== $this->gpuLimit) {
            $res['GpuLimit'] = $this->gpuLimit;
        }
        if (null !== $this->gpuRequest) {
            $res['GpuRequest'] = $this->gpuRequest;
        }
        if (null !== $this->memoryLimit) {
            $res['MemoryLimit'] = $this->memoryLimit;
        }
        if (null !== $this->memoryRquest) {
            $res['MemoryRquest'] = $this->memoryRquest;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ready) {
            $res['Ready'] = $this->ready;
        }
        if (null !== $this->restartCount) {
            $res['RestartCount'] = $this->restartCount;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResourceInstanceWorker
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuLimit'])) {
            $model->cpuLimit = $map['CpuLimit'];
        }
        if (isset($map['CpuRequest'])) {
            $model->cpuRequest = $map['CpuRequest'];
        }
        if (isset($map['GpuLimit'])) {
            $model->gpuLimit = $map['GpuLimit'];
        }
        if (isset($map['GpuRequest'])) {
            $model->gpuRequest = $map['GpuRequest'];
        }
        if (isset($map['MemoryLimit'])) {
            $model->memoryLimit = $map['MemoryLimit'];
        }
        if (isset($map['MemoryRquest'])) {
            $model->memoryRquest = $map['MemoryRquest'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Ready'])) {
            $model->ready = $map['Ready'];
        }
        if (isset($map['RestartCount'])) {
            $model->restartCount = $map['RestartCount'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
