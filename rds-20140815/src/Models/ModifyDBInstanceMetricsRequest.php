<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceMetricsRequest extends Model
{
    /**
     * @description The ID of the instance. You can call the [DescribeDBInstances](~~26232~~) operation to query the IDs of instances.
     *
     * @example pgm-bp1s1j103lo6****
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description The keys of the Enhanced Monitoring metrics that you want to display for the instance. You can enter a maximum of 30 metric keys. If you enter multiple metric keys, you must separate the metric keys with commas (,).
     *
     * You can call the [DescribeAvailableMetrics](~~314326~~) operation to query the keys of metrics.
     * @example os.cpu_usage.sys.avg,os.cpu_usage.user.avg
     *
     * @var string
     */
    public $metricsConfig;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The application scope of this modification. Valid values:
     *
     *   **instance**: This modification is applied only to the current instance.
     *   **region**: This modification is applied to all ApsaraDB RDS for PostgreSQL instances that are equipped with the same type of storage media as the current instance in the region to which the current instance belongs. For example, if the current instance is equipped with standard SSDs or enhanced SSDs (ESSDs), this modification is applied to all ApsaraDB RDS for PostgreSQL instances that are equipped with standard SSDs or ESSDs in the region to which the current instance belongs.
     *
     * @example instance
     *
     * @var string
     */
    public $scope;
    protected $_name = [
        'DBInstanceName'  => 'DBInstanceName',
        'metricsConfig'   => 'MetricsConfig',
        'resourceOwnerId' => 'ResourceOwnerId',
        'scope'           => 'Scope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->metricsConfig) {
            $res['MetricsConfig'] = $this->metricsConfig;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceMetricsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['MetricsConfig'])) {
            $model->metricsConfig = $map['MetricsConfig'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
