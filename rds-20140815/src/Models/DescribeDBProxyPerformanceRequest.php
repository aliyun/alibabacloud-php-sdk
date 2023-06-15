<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBProxyPerformanceRequest extends Model
{
    /**
     * @description The ID of the instance. You can call the [DescribeDBInstances](~~26232~~) operation to query the ID of the instance.
     *
     * @example rm-t4n3axxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description An internal parameter. You do not need to specify this parameter.
     *
     * @example normal
     *
     * @var string
     */
    public $DBProxyEngineType;

    /**
     * @description The type of proxy that is enabled on the instance. Set the value to **DedicatedProxy**.
     *
     * @example DedicatedProxy
     *
     * @var string
     */
    public $DBProxyInstanceType;

    /**
     * @description The end of the time range to query. The end time must be later than the start time. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2019-09-21T18:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The performance metrics that you want to query.
     *
     * If the instance runs MySQL, you can query only the **Maxscale_CpuUsage** performance metric, which indicates the CPU utilization of the instance.
     *
     * If the instance runs PostgreSQL, you can query the following performance metrics:
     *
     *   **Maxscale_TotalConns**: the number of connections per second
     *   **Maxscale_CurrentConns**: the number of connections that are established
     *   **Maxscale_DownFlows**: outbound traffic
     *   **Maxscale_UpFlows**: inbound traffic
     *   **Maxscale_QPS**: QPS
     *   **Maxscale_MemUsage**: memory usage
     *   **Maxscale_CpuUsage**: CPU utilization
     *
     * If you want to query more than one performance metric, separate the performance metrics with commas (,). You can specify up to six performance metrics in a single request.
     * @example Maxscale_CpuUsage
     *
     * @var string
     */
    public $metricsName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region where the instance resides. You can call the [DescribeRegions](~~26243~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2019-09-19T01:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBInstanceId'         => 'DBInstanceId',
        'DBProxyEngineType'    => 'DBProxyEngineType',
        'DBProxyInstanceType'  => 'DBProxyInstanceType',
        'endTime'              => 'EndTime',
        'metricsName'          => 'MetricsName',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'startTime'            => 'StartTime',
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
        if (null !== $this->DBProxyEngineType) {
            $res['DBProxyEngineType'] = $this->DBProxyEngineType;
        }
        if (null !== $this->DBProxyInstanceType) {
            $res['DBProxyInstanceType'] = $this->DBProxyInstanceType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->metricsName) {
            $res['MetricsName'] = $this->metricsName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
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
     * @return DescribeDBProxyPerformanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBProxyEngineType'])) {
            $model->DBProxyEngineType = $map['DBProxyEngineType'];
        }
        if (isset($map['DBProxyInstanceType'])) {
            $model->DBProxyInstanceType = $map['DBProxyInstanceType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MetricsName'])) {
            $model->metricsName = $map['MetricsName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
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
