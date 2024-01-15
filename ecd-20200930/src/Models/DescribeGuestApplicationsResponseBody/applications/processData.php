<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeGuestApplicationsResponseBody\applications;

use AlibabaCloud\Tea\Model;

class processData extends Model
{
    /**
     * @description The application name.
     *
     * @example Google Chrome
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description The application version.
     *
     * @example 115.0.5790.110
     *
     * @var string
     */
    public $applicationVersion;

    /**
     * @description The CPU usage.
     *
     * @example 89
     *
     * @var float
     */
    public $cpuPercent;

    /**
     * @description The GPU usage.
     *
     * @example 15
     *
     * @var float
     */
    public $gpuPercent;

    /**
     * @description The I/O read and write performance.
     *
     * @example 124906.0
     *
     * @var float
     */
    public $iospeed;

    /**
     * @description The memory usage.
     *
     * @example 34
     *
     * @var float
     */
    public $memPercent;

    /**
     * @description The process ID.
     *
     * @example 1357
     *
     * @var int
     */
    public $pid;

    /**
     * @description The path to the process.
     *
     * @example C:\\Program Files\\Google\\Chrome\\Application\\ch****.exe
     *
     * @var string
     */
    public $processPath;
    protected $_name = [
        'applicationName'    => 'ApplicationName',
        'applicationVersion' => 'ApplicationVersion',
        'cpuPercent'         => 'CpuPercent',
        'gpuPercent'         => 'GpuPercent',
        'iospeed'            => 'Iospeed',
        'memPercent'         => 'MemPercent',
        'pid'                => 'Pid',
        'processPath'        => 'ProcessPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->applicationVersion) {
            $res['ApplicationVersion'] = $this->applicationVersion;
        }
        if (null !== $this->cpuPercent) {
            $res['CpuPercent'] = $this->cpuPercent;
        }
        if (null !== $this->gpuPercent) {
            $res['GpuPercent'] = $this->gpuPercent;
        }
        if (null !== $this->iospeed) {
            $res['Iospeed'] = $this->iospeed;
        }
        if (null !== $this->memPercent) {
            $res['MemPercent'] = $this->memPercent;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->processPath) {
            $res['ProcessPath'] = $this->processPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return processData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['ApplicationVersion'])) {
            $model->applicationVersion = $map['ApplicationVersion'];
        }
        if (isset($map['CpuPercent'])) {
            $model->cpuPercent = $map['CpuPercent'];
        }
        if (isset($map['GpuPercent'])) {
            $model->gpuPercent = $map['GpuPercent'];
        }
        if (isset($map['Iospeed'])) {
            $model->iospeed = $map['Iospeed'];
        }
        if (isset($map['MemPercent'])) {
            $model->memPercent = $map['MemPercent'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['ProcessPath'])) {
            $model->processPath = $map['ProcessPath'];
        }

        return $model;
    }
}
