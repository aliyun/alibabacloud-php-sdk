<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetAsyncErrorRequestStatByCodeRequest extends Model
{
    /**
     * @description The name of a database.
     *
     * @example testdb01
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The end of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * >  The end time must be later than the start time. The interval between the start time and the end time cannot exceed 24 hours.
     * @example 1642566830000
     *
     * @var int
     */
    public $end;

    /**
     * @description The instance ID.
     *
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The node ID.
     *
     * >  This parameter must be specified for PolarDB for MySQL clusters.
     * @example pi-wz9s658475e58****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The beginning of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * >  The start time must be within the storage duration of the SQL Explorer feature of the database instance and can be up to 90 days earlier than the current time.
     * @example 1642556990714
     *
     * @var int
     */
    public $start;
    protected $_name = [
        'dbName'     => 'DbName',
        'end'        => 'End',
        'instanceId' => 'InstanceId',
        'nodeId'     => 'NodeId',
        'start'      => 'Start',
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
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAsyncErrorRequestStatByCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
