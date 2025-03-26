<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeGuestApplicationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeGuestApplicationsResponseBody\applications\processData;

class applications extends Model
{
    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $applicationVersion;

    /**
     * @var float
     */
    public $cpuPercent;

    /**
     * @var float
     */
    public $gpuPercent;

    /**
     * @var string
     */
    public $iconUrl;

    /**
     * @var float
     */
    public $ioSpeed;

    /**
     * @var float
     */
    public $memPercent;

    /**
     * @var int
     */
    public $pid;

    /**
     * @var processData[]
     */
    public $processData;

    /**
     * @var string
     */
    public $processPath;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'applicationVersion' => 'ApplicationVersion',
        'cpuPercent' => 'CpuPercent',
        'gpuPercent' => 'GpuPercent',
        'iconUrl' => 'IconUrl',
        'ioSpeed' => 'IoSpeed',
        'memPercent' => 'MemPercent',
        'pid' => 'Pid',
        'processData' => 'ProcessData',
        'processPath' => 'ProcessPath',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->processData)) {
            Model::validateArray($this->processData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->processData)) {
                $res['ProcessData'] = [];
                $n1 = 0;
                foreach ($this->processData as $item1) {
                    $res['ProcessData'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['ProcessData'] as $item1) {
                    $model->processData[$n1++] = processData::fromMap($item1);
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
