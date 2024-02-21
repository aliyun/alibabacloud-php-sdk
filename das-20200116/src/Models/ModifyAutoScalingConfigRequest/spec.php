<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\ModifyAutoScalingConfigRequest;

use AlibabaCloud\Tea\Model;

class spec extends Model
{
    /**
     * @description Specifies whether to apply the **Spec** configuration of the auto scaling feature for specifications. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $apply;

    /**
     * @description The quiescent period. The value of this parameter consists of a numeric value and a time unit suffix. The **m** time unit suffix specifies the minute, the **h** time unit suffix specifies the hour, and the **d** time suffix unit specifies the day.
     *
     *   Valid values for PolarDB for MySQL Cluster Edition instances: **5m**, **10m**, **30m**, **1h**, **2h**, **3h**, **1d**, and **7d**.
     *   Valid values for ApsaraDB RDS for MySQL High-availability Edition instances that use standard SSDs or ESSDs: **5m**, **10m**, **30m**, **1h**, **2h**, **3h**, **1d**, and **7d**.
     *
     * @example 5m
     *
     * @var string
     */
    public $coolDownTime;

    /**
     * @description The average CPU utilization threshold that triggers automatic specification scale-up. Unit: %. Valid values:
     *
     *   **50**
     *   **60**
     *   **70**
     *   **80**
     *   **90**
     *
     * >  This parameter must be specified if the database instance is a PolarDB for MySQL Cluster Edition instance or an ApsaraDB RDS for MySQL High-availability Edition instance that uses standard SSDs or ESSDs.
     * @example 70
     *
     * @var int
     */
    public $cpuUsageUpperThreshold;

    /**
     * @description Specifies whether to enable the automatic specification scale-down feature. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  This parameter must be specified if the database instance is a PolarDB for MySQL Cluster Edition instance or an ApsaraDB RDS for MySQL High-availability Edition instance that uses standard SSDs or ESSDs.
     * @example true
     *
     * @var bool
     */
    public $downgrade;

    /**
     * @description The maximum number of read-only nodes of the instance.
     *
     * >  This parameter must be specified if the database instance is a PolarDB for MySQL Cluster Edition instance.
     * @example 10
     *
     * @var int
     */
    public $maxReadOnlyNodes;

    /**
     * @description The maximum specifications to which the database instance can be upgraded. The database instance can be upgraded only to a database instance of the same edition with higher specifications. For information about the specifications of different database instances, refer to the following topics:
     *
     *   PolarDB for MySQL Cluster Edition instances: [Specifications of compute nodes](~~102542~~).
     *   ApsaraDB RDS for MySQL High-availability Edition instances that use standard SSDs or ESSDs: [Specifications](~~276974~~).
     *
     * @example polar.mysql.x8.12xlarge
     *
     * @var string
     */
    public $maxSpec;

    /**
     * @description The average memory usage threshold that triggers automatic specification scale-up. Unit: %. Valid values:
     *
     *   **50**
     *   **60**
     *   **70**
     *   **80**
     *   **90**
     *
     * >  This parameter must be specified if the database instance is an ApsaraDB for Redis Community Edition instance that uses cloud disks on the China site (aliyun.com).
     * @example 70
     *
     * @var int
     */
    public $memUsageUpperThreshold;

    /**
     * @description The observation window. The value of this parameter consists of a numeric value and a time unit suffix. The **m** time unit suffix specifies the minute and the **h** time unit suffix specifies the hour.
     *
     *   Valid values for PolarDB for MySQL Cluster Edition instances: **5m**, **10m**, **15m**, and **30m**.
     *   Valid values for ApsaraDB RDS for MySQL High-availability Edition instances that use standard SSDs or ESSDs: **5m**, **20m**, **30m**, **40m**, and **1h**.
     *   Valid values for ApsaraDB for Redis Community Edition instances that use cloud disks: **5m**, **10m**, **15m**, and **30m**.
     *
     * @example 5m
     *
     * @var string
     */
    public $observationWindowSize;

    /**
     * @description Specifies whether to enable the automatic specification scale-up feature. Valid values:
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
        'apply'                  => 'Apply',
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
        if (null !== $this->apply) {
            $res['Apply'] = $this->apply;
        }
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
        if (isset($map['Apply'])) {
            $model->apply = $map['Apply'];
        }
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
