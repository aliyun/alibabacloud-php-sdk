<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class InstanceMetricInfo extends Model
{
    /**
     * @var string
     */
    public $applicationID;

    /**
     * @var float
     */
    public $cpuPercent;

    /**
     * @var float
     */
    public $cpuQuotaPercent;

    /**
     * @var string
     */
    public $instanceID;

    /**
     * @var float
     */
    public $memoryLimitMB;

    /**
     * @var float
     */
    public $memoryUsageMB;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'applicationID' => 'applicationID',
        'cpuPercent' => 'cpuPercent',
        'cpuQuotaPercent' => 'cpuQuotaPercent',
        'instanceID' => 'instanceID',
        'memoryLimitMB' => 'memoryLimitMB',
        'memoryUsageMB' => 'memoryUsageMB',
        'timestamp' => 'timestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationID) {
            $res['applicationID'] = $this->applicationID;
        }

        if (null !== $this->cpuPercent) {
            $res['cpuPercent'] = $this->cpuPercent;
        }

        if (null !== $this->cpuQuotaPercent) {
            $res['cpuQuotaPercent'] = $this->cpuQuotaPercent;
        }

        if (null !== $this->instanceID) {
            $res['instanceID'] = $this->instanceID;
        }

        if (null !== $this->memoryLimitMB) {
            $res['memoryLimitMB'] = $this->memoryLimitMB;
        }

        if (null !== $this->memoryUsageMB) {
            $res['memoryUsageMB'] = $this->memoryUsageMB;
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
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
        if (isset($map['applicationID'])) {
            $model->applicationID = $map['applicationID'];
        }

        if (isset($map['cpuPercent'])) {
            $model->cpuPercent = $map['cpuPercent'];
        }

        if (isset($map['cpuQuotaPercent'])) {
            $model->cpuQuotaPercent = $map['cpuQuotaPercent'];
        }

        if (isset($map['instanceID'])) {
            $model->instanceID = $map['instanceID'];
        }

        if (isset($map['memoryLimitMB'])) {
            $model->memoryLimitMB = $map['memoryLimitMB'];
        }

        if (isset($map['memoryUsageMB'])) {
            $model->memoryUsageMB = $map['memoryUsageMB'];
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        return $model;
    }
}
