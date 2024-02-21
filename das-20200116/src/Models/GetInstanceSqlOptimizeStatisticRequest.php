<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceSqlOptimizeStatisticRequest extends Model
{
    /**
     * @description The end of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1662518540764
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Specifies whether to filter instances for which DAS Professional Edition is enabled. Valid values:
     *
     *   **true**: filters instances for which DAS Professional Edition is enabled.
     *   **false**: does not filter instances for which DAS Professional Edition is enabled.
     *
     * >  If you set the value to **true**, only database instances for which DAS Professional Edition is disabled are queried. If you set the value to **false**, all database instances are queried.
     * @example false
     *
     * @var string
     */
    public $filterEnable;

    /**
     * @description The database instance ID.
     *
     * >  The database instance must be an ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster.
     * @example pc-wz90h9560rvdz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The node ID.
     *
     * >  This parameter must be specified if the database instance is an ApsaraDB RDS for MySQL Cluster Edition instance or a PolarDB for MySQL cluster.
     * @example pi-bp12v7243x012****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The beginning of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1661308902060
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The duration threshold for automatic SQL optimization events. After this parameter is specified, the system collects statistics on automatic SQL optimization events whose duration does not exceed the specified threshold.
     *
     * >  This parameter is a reserved parameter and does not take effect.
     * @example None
     *
     * @var string
     */
    public $threshold;

    /**
     * @description Specifies whether to merge automatic SQL optimization events. Valid values:
     *
     *   **true**: merges automatic SQL optimization events.
     *   **false**: does not merge automatic SQL optimization events.
     *
     * >  This parameter is a reserved parameter and does not take effect.
     * @example true
     *
     * @var string
     */
    public $useMerging;
    protected $_name = [
        'endTime'      => 'EndTime',
        'filterEnable' => 'FilterEnable',
        'instanceId'   => 'InstanceId',
        'nodeId'       => 'NodeId',
        'startTime'    => 'StartTime',
        'threshold'    => 'Threshold',
        'useMerging'   => 'UseMerging',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->filterEnable) {
            $res['FilterEnable'] = $this->filterEnable;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->useMerging) {
            $res['UseMerging'] = $this->useMerging;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceSqlOptimizeStatisticRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FilterEnable'])) {
            $model->filterEnable = $map['FilterEnable'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['UseMerging'])) {
            $model->useMerging = $map['UseMerging'];
        }

        return $model;
    }
}
