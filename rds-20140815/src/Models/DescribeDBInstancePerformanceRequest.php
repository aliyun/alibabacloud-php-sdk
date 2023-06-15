<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstancePerformanceRequest extends Model
{
    /**
     * @description The ID of the instance. You can call the [DescribeDBInstances](~~26232~~) operation to query the ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The end of the time range to query. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm*Z format. The time is displayed in UTC.
     *
     * >  The time span between the beginning time and the end time must be longer than the monitoring frequency. Otherwise, this operation may return an empty array.
     * @example 2012-06-18T15:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The performance metric that you want to query. If you enter more than one performance metric, separate them with commas (,). You can enter up to 30 performance metrics. For more information, see [Performance parameters](~~26316~~).
     *
     * >  If you set the **Key** parameter to **MySQL_SpaceUsage** or **SQLServer_SpaceUsage**, you can query the performance metric only over one day.
     * @example MySQL_Sessions
     *
     * @var string
     */
    public $key;

    /**
     * @description The unique ID of the instance.
     *
     * @example 339****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm*Z format. The time must be in UTC.
     *
     * >  The time span between the beginning time and the end time must be longer than the monitoring frequency. Otherwise, this operation may return an empty array.
     * @example 2012-06-08T15:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBInstanceId'    => 'DBInstanceId',
        'endTime'         => 'EndTime',
        'key'             => 'Key',
        'nodeId'          => 'NodeId',
        'resourceOwnerId' => 'ResourceOwnerId',
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
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
