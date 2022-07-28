<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class ResourceInstanceWorker extends Model
{
    /**
     * @var int
     */
    public $cpuLimit;

    /**
     * @var int
     */
    public $cpuRequest;

    /**
     * @var int
     */
    public $gpuLimit;

    /**
     * @var int
     */
    public $gpuRequest;

    /**
     * @var int
     */
    public $memoryLimit;

    /**
     * @var int
     */
    public $memoryRquest;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $ready;

    /**
     * @var int
     */
    public $restartCount;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $startTime;

    /**
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
