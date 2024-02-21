<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetPfsSqlSampleRequest extends Model
{
    /**
     * @description The end of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * >  The end time must be later than the start time. You can query the data of up to seven days within the last month.
     * @example 1678074351197
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The instance ID.
     *
     * >  Only ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters are supported.
     * @example rm-2ze1jdv45i7l6****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The node ID.
     *
     * >  This parameter must be specified for ApsaraDB RDS for MySQL Cluster Edition instances and PolarDB for MySQL clusters.
     * @example r-x****-db-0
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The SQL ID.
     *
     * @example 651b56fe9418d48edb8fdf0980ec****
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description The beginning of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1676511134614
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'    => 'EndTime',
        'instanceId' => 'InstanceId',
        'nodeId'     => 'NodeId',
        'sqlId'      => 'SqlId',
        'startTime'  => 'StartTime',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPfsSqlSampleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
