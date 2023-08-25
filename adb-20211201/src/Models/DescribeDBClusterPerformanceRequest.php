<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBClusterPerformanceRequest extends Model
{
    /**
     * @example amv-bp1hx5n1o8f61****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example 2022-03-11T15:01Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example AnalyticDB_CPU_Usage_Percentage
     *
     * @var string
     */
    public $key;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example user_default
     *
     * @var string
     */
    public $resourcePools;

    /**
     * @example 2022-03-10T23:56Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBClusterId'   => 'DBClusterId',
        'endTime'       => 'EndTime',
        'key'           => 'Key',
        'regionId'      => 'RegionId',
        'resourcePools' => 'ResourcePools',
        'startTime'     => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourcePools) {
            $res['ResourcePools'] = $this->resourcePools;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterPerformanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourcePools'])) {
            $model->resourcePools = $map['ResourcePools'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
