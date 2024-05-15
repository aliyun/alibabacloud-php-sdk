<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetAsyncErrorRequestStatResultRequest extends Model
{
    /**
     * @description The name of the database.
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
     * This parameter is required.
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The node ID.
     *
     * >  This parameter must be specified for PolarDB for MySQL instances.
     * @example pi-bp179lg03445l****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The ID of the SQL template. Separate multiple SQL IDs with commas (,). You can call the [GetAsyncErrorRequestListByCode](https://help.aliyun.com/document_detail/410746.html) operation to query the ID of the SQL query for which MySQL error code is returned.
     *
     * @example ad78a4e7d3ce81590c9dc2d5f4bc****,0f92feacd92c048b06a16617a633****
     *
     * @var string
     */
    public $sqlIdList;

    /**
     * @description The beginning of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * >  The beginning of the time range to query must be within the storage duration of the database instance and can be up to 90 days earlier than the current time.
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
        'sqlIdList'  => 'SqlIdList',
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
        if (null !== $this->sqlIdList) {
            $res['SqlIdList'] = $this->sqlIdList;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAsyncErrorRequestStatResultRequest
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
        if (isset($map['SqlIdList'])) {
            $model->sqlIdList = $map['SqlIdList'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
