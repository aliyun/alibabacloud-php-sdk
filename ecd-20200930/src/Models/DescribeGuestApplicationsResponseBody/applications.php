<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeGuestApplicationsResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeGuestApplicationsResponseBody\applications\processData;
use AlibabaCloud\Tea\Model;

class applications extends Model
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
     * @description The CPU utilization (%).
     *
     * @example 89
     *
     * @var float
     */
    public $cpuPercent;

    /**
     * @description The GPU utilization (%).
     *
     * @example 15
     *
     * @var float
     */
    public $gpuPercent;

    /**
     * @description The icon URL of the application.
     *
     * @example https://app-center-icon-prod-shanghai.oss-cn-shanghai.aliyuncs.com/market/preload/default****.png
     *
     * @var string
     */
    public $iconUrl;

    /**
     * @description The I/O read and write performance.
     *
     * @example 124906.0
     *
     * @var float
     */
    public $ioSpeed;

    /**
     * @description The memory utilization (%).
     *
     * @example 34
     *
     * @var float
     */
    public $memPercent;

    /**
     * @description The process ID (PID).
     *
     * @example 1357
     *
     * @var int
     */
    public $pid;

    /**
     * @description The process information.
     *
     * @var processData[]
     */
    public $processData;

    /**
     * @description The path to the process.
     *
     * @example C:\\Program Files\\Google\\Chrome\\Application\\ch****.exe
     *
     * @var string
     */
    public $processPath;

    /**
     * @description The application status.
     *
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'applicationName'    => 'ApplicationName',
        'applicationVersion' => 'ApplicationVersion',
        'cpuPercent'         => 'CpuPercent',
        'gpuPercent'         => 'GpuPercent',
        'iconUrl'            => 'IconUrl',
        'ioSpeed'            => 'IoSpeed',
        'memPercent'         => 'MemPercent',
        'pid'                => 'Pid',
        'processData'        => 'ProcessData',
        'processPath'        => 'ProcessPath',
        'status'             => 'Status',
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
        if (null !== $this->iconUrl) {
            $res['IconUrl'] = $this->iconUrl;
        }
        if (null !== $this->ioSpeed) {
            $res['IoSpeed'] = $this->ioSpeed;
        }
        if (null !== $this->memPercent) {
            $res['MemPercent'] = $this->memPercent;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->processData) {
            $res['ProcessData'] = [];
            if (null !== $this->processData && \is_array($this->processData)) {
                $n = 0;
                foreach ($this->processData as $item) {
                    $res['ProcessData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->processPath) {
            $res['ProcessPath'] = $this->processPath;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applications
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
        if (isset($map['IconUrl'])) {
            $model->iconUrl = $map['IconUrl'];
        }
        if (isset($map['IoSpeed'])) {
            $model->ioSpeed = $map['IoSpeed'];
        }
        if (isset($map['MemPercent'])) {
            $model->memPercent = $map['MemPercent'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['ProcessData'])) {
            if (!empty($map['ProcessData'])) {
                $model->processData = [];
                $n                  = 0;
                foreach ($map['ProcessData'] as $item) {
                    $model->processData[$n++] = null !== $item ? processData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProcessPath'])) {
            $model->processPath = $map['ProcessPath'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
