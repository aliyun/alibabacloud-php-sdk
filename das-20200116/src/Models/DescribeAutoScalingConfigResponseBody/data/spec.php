<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeAutoScalingConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

class spec extends Model
{
    /**
     * @description The quiescent period. The return value consists of a numeric value and a time unit suffix. Valid values of the time unit suffix:
     *
     *   **s**: seconds.
     *   **m**: minutes.
     *   **h**: hours.
     *   **d**: days.
     *
     * >  A value of **5m** indicates 5 minutes.
     * @example 5m
     *
     * @var string
     */
    public $coolDownTime;

    /**
     * @description The average CPU utilization threshold that triggers automatic specification scale-up. Unit: %.
     *
     * @example 70
     *
     * @var int
     */
    public $cpuUsageUpperThreshold;

    /**
     * @description Indicates whether the automatic specification scale-down feature is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $downgrade;

    /**
     * @description The maximum number of read-only nodes of the instance.
     *
     * @example 10
     *
     * @var int
     */
    public $maxReadOnlyNodes;

    /**
     * @description The maximum specifications to which the database instance can be upgraded. For more information about the specifications of each type of supported database instances, see the following topics:
     *
     *   PolarDB for MySQL Cluster Edition instances: [Specifications of compute nodes](https://help.aliyun.com/document_detail/102542.html).
     *   ApsaraDB RDS for MySQL High-availability Edition instances that use standard SSDs or enhanced SSDs (ESSDs): [Specifications](https://help.aliyun.com/document_detail/276974.html).
     *
     * @example polar.mysql.x8.12xlarge
     *
     * @var string
     */
    public $maxSpec;

    /**
     * @description The average memory usage threshold that triggers automatic specification scale-up. Unit: %.
     *
     * @example 70
     *
     * @var int
     */
    public $memUsageUpperThreshold;

    /**
     * @description The observation window. The return value consists of a numeric value and a time unit suffix. Valid values of the time unit suffix:
     *
     *   **s**: seconds.
     *   **m**: minutes.
     *   **h**: hours.
     *   **d**: days.
     *
     * >  A value of **5m** indicates 5 minutes.
     * @example 5m
     *
     * @var string
     */
    public $observationWindowSize;

    /**
     * @description Indicates whether the automatic specification scale-up feature is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $upgrade;
    protected $_name = [
        'coolDownTime'           => 'CoolDownTime',
        'cpuUsageUpperThreshold' => 'CpuUsageUpperThreshold',
        'downgrade'              => 'Downgrade',
        'maxReadOnlyNodes'       => 'MaxReadOnlyNodes',
        'maxSpec'                => 'MaxSpec',
        'memUsageUpperThreshold' => 'MemUsageUpperThreshold',
        'observationWindowSize'  => 'ObservationWindowSize',
        'upgrade'                => 'Upgrade',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coolDownTime) {
            $res['CoolDownTime'] = $this->coolDownTime;
        }
        if (null !== $this->cpuUsageUpperThreshold) {
            $res['CpuUsageUpperThreshold'] = $this->cpuUsageUpperThreshold;
        }
        if (null !== $this->downgrade) {
            $res['Downgrade'] = $this->downgrade;
        }
        if (null !== $this->maxReadOnlyNodes) {
            $res['MaxReadOnlyNodes'] = $this->maxReadOnlyNodes;
        }
        if (null !== $this->maxSpec) {
            $res['MaxSpec'] = $this->maxSpec;
        }
        if (null !== $this->memUsageUpperThreshold) {
            $res['MemUsageUpperThreshold'] = $this->memUsageUpperThreshold;
        }
        if (null !== $this->observationWindowSize) {
            $res['ObservationWindowSize'] = $this->observationWindowSize;
        }
        if (null !== $this->upgrade) {
            $res['Upgrade'] = $this->upgrade;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoolDownTime'])) {
            $model->coolDownTime = $map['CoolDownTime'];
        }
        if (isset($map['CpuUsageUpperThreshold'])) {
            $model->cpuUsageUpperThreshold = $map['CpuUsageUpperThreshold'];
        }
        if (isset($map['Downgrade'])) {
            $model->downgrade = $map['Downgrade'];
        }
        if (isset($map['MaxReadOnlyNodes'])) {
            $model->maxReadOnlyNodes = $map['MaxReadOnlyNodes'];
        }
        if (isset($map['MaxSpec'])) {
            $model->maxSpec = $map['MaxSpec'];
        }
        if (isset($map['MemUsageUpperThreshold'])) {
            $model->memUsageUpperThreshold = $map['MemUsageUpperThreshold'];
        }
        if (isset($map['ObservationWindowSize'])) {
            $model->observationWindowSize = $map['ObservationWindowSize'];
        }
        if (isset($map['Upgrade'])) {
            $model->upgrade = $map['Upgrade'];
        }

        return $model;
    }
}
