<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class DescribeDrdsInstanceDbMonitorRequest extends Model
{
    /**
     * @description The name of the database.
     *
     * @example drds_test
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The ID of the Distributed Relational Database Service (DRDS) instance.
     *
     * @example drds*************
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The end time. Specify the time in the UNIX timestamp format. The time must be in UTC. Unit: ms.
     *
     * @example 1603166400000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The performance monitoring metrics. You can specify one or more metrics for a query at a time. Separate multiple metric parameters with commas (,).
     *
     * >  For more information about the details of performance monitoring metrics, see [Database monitoring](~~186704~~).
     * @example qps
     *
     * @var string
     */
    public $key;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The start time. Specify the time in the UNIX timestamp format. The time must be in UTC. Unit: ms.
     *
     * @example 1603162800000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'dbName'         => 'DbName',
        'drdsInstanceId' => 'DrdsInstanceId',
        'endTime'        => 'EndTime',
        'key'            => 'Key',
        'regionId'       => 'RegionId',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDrdsInstanceDbMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
