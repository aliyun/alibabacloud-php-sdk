<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeGuestApplicationsResponseBody\applications;

use AlibabaCloud\Dara\Model;

class processData extends Model
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
     * @var float
     */
    public $iospeed;

    /**
     * @var float
     */
    public $memPercent;

    /**
     * @var int
     */
    public $pid;

    /**
     * @var string
     */
    public $processPath;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'applicationVersion' => 'ApplicationVersion',
        'cpuPercent' => 'CpuPercent',
        'gpuPercent' => 'GpuPercent',
        'iospeed' => 'Iospeed',
        'memPercent' => 'MemPercent',
        'pid' => 'Pid',
        'processPath' => 'ProcessPath',
    ];

    public function validate()
    {
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
