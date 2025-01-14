<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\Tea\Model;

class DescribeSlowLogTrendRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example cc-bp100p4q1g9z3****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @example 2023-06-07 10:03:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The code of the cloud service.
     *
     * @example clickhouse
     *
     * @var string
     */
    public $product;

    /**
     * @example 3000
     *
     * @var string
     */
    public $queryDurationMs;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 2023-04-13 17:48:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBInstanceId'    => 'DBInstanceId',
        'endTime'         => 'EndTime',
        'product'         => 'Product',
        'queryDurationMs' => 'QueryDurationMs',
        'regionId'        => 'RegionId',
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
        if (null !== $this->product) {
            $res['Product'] = $this->product;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSlowLogTrendRequest
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
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
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

        return $model;
    }
}
