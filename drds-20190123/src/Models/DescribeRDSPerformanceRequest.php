<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class DescribeRDSPerformanceRequest extends Model
{
    /**
     * @description The type of the database engine.
     *
     * @example mysql
     *
     * @var string
     */
    public $dbInstType;

    /**
     * @description The ID of the Distributed Relational Database Service (DRDS) instance.
     *
     * @example drds*********
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The end time of the query. Specify the time in the UNIX timestamp format. The time must be in UTC. Unit: ms.
     *
     * @example 1603209690000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The performance monitoring metrics. You can specify one or more metrics for a query at a time. Separate multiple metric parameters with commas (,).
     *
     * >  For more information about the details of performance monitoring metrics, see [Storage monitoring](~~186705~~).
     * @example MySQL_MemCpuUsage
     *
     * @var string
     */
    public $keys;

    /**
     * @description The ID of the storage-layer ApsaraDB RDS for MySQL instance.
     *
     * @example rm-************
     *
     * @var string
     */
    public $rdsInstanceId;

    /**
     * @description The start time of the query. Specify the time in the UNIX timestamp format. The time must be in UTC. Unit: ms.
     *
     * @example 1603123290000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'dbInstType'     => 'DbInstType',
        'drdsInstanceId' => 'DrdsInstanceId',
        'endTime'        => 'EndTime',
        'keys'           => 'Keys',
        'rdsInstanceId'  => 'RdsInstanceId',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbInstType) {
            $res['DbInstType'] = $this->dbInstType;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->keys) {
            $res['Keys'] = $this->keys;
        }
        if (null !== $this->rdsInstanceId) {
            $res['RdsInstanceId'] = $this->rdsInstanceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRDSPerformanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbInstType'])) {
            $model->dbInstType = $map['DbInstType'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Keys'])) {
            $model->keys = $map['Keys'];
        }
        if (isset($map['RdsInstanceId'])) {
            $model->rdsInstanceId = $map['RdsInstanceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
