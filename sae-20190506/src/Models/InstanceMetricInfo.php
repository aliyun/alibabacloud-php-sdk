<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class InstanceMetricInfo extends Model
{
    /**
     * @example a03aa9f9-3d32-4655-8394-05fd10dcbd8a
     *
     * @var string
     */
    public $applicationID;

    /**
     * @example 1.98
     *
     * @var float
     */
    public $cpuPercent;

    /**
     * @example 35.0
     *
     * @var float
     */
    public $cpuQuotaPercent;

    /**
     * @example c-6498f0fe-33bb4f9249b54789a023
     *
     * @var string
     */
    public $instanceID;

    /**
     * @example 512.0
     *
     * @var float
     */
    public $memoryLimitMB;

    /**
     * @example 8.81
     *
     * @var float
     */
    public $memoryUsageMB;

    /**
     * @example 1686568800000
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'applicationID'   => 'applicationID',
        'cpuPercent'      => 'cpuPercent',
        'cpuQuotaPercent' => 'cpuQuotaPercent',
        'instanceID'      => 'instanceID',
        'memoryLimitMB'   => 'memoryLimitMB',
        'memoryUsageMB'   => 'memoryUsageMB',
        'timestamp'       => 'timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return InstanceMetricInfo
     */
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
