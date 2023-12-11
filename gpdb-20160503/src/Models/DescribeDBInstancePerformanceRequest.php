<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstancePerformanceRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * > You can call the [DescribeDBInstances](~~86911~~) operation to query the IDs of all AnalyticDB for PostgreSQL instances within a region.
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm*Z format. The time must be in UTC. The end time must be later than the start time.
     *
     * @example 2022-07-09T03:47Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The performance metric. Separate multiple values with commas (,). For more information, see [Performance parameters](~~86943~~).
     *
     * @example CpuUsage,MemoryUsage,Gpdb_SpaceUsage,Gpdb_IOPS,Gpdb_session
     *
     * @var string
     */
    public $key;

    /**
     * @description This parameter is no longer used.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm*Z format. The time must be in UTC.
     *
     * @example 2022-07-08T03:47Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBInstanceId'    => 'DBInstanceId',
        'endTime'         => 'EndTime',
        'key'             => 'Key',
        'resourceGroupId' => 'ResourceGroupId',
        'startTime'       => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstancePerformanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
