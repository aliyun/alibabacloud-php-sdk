<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSlowQueryTrendRequest extends Model
{
    /**
     * @example cc-bp1qx68m06981****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example 2021-02-02T09:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 1000
     *
     * @var int
     */
    public $queryDurationMs;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 2021-02-02T08:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description This parameter is required.
     *
     * @example vw-uf62965t8lt50****
     *
     * @var string
     */
    public $virtualWareHouseId;
    protected $_name = [
        'DBClusterId'        => 'DBClusterId',
        'endTime'            => 'EndTime',
        'queryDurationMs'    => 'QueryDurationMs',
        'regionId'           => 'RegionId',
        'startTime'          => 'StartTime',
        'virtualWareHouseId' => 'VirtualWareHouseId',
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
        if (null !== $this->queryDurationMs) {
            $res['QueryDurationMs'] = $this->queryDurationMs;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->virtualWareHouseId) {
            $res['VirtualWareHouseId'] = $this->virtualWareHouseId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSlowQueryTrendRequest
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
        if (isset($map['QueryDurationMs'])) {
            $model->queryDurationMs = $map['QueryDurationMs'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['VirtualWareHouseId'])) {
            $model->virtualWareHouseId = $map['VirtualWareHouseId'];
        }

        return $model;
    }
}
