<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetFullRequestOriginStatByInstanceIdRequest extends Model
{
    /**
     * @description Specifies whether to sort the results in ascending order. By default, the results are not sorted in ascending order.
     *
     * @example Disabled
     *
     * @var bool
     */
    public $asc;

    /**
     * @description The end of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * >  The end time must be later than the start time. The interval between the start time and the end time cannot exceed 24 hours.
     * @example 1644803409000
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
     * >  This parameter must be specified if the database instance is a PolarDB for MySQL cluster.
     * @example pi-bp12v7243x012****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The field by which the results to be returned are sorted. Default value: **count**. Valid values:
     *
     *   **count**: the number of executions.
     *   **avgRt**: the average execution duration.
     *   **rtRate**: the execution duration percentage.
     *   **rowsExamined**: the total number of scanned rows.
     *   **avgRowsExamined**: the average number of scanned rows.
     *   **avgRowsReturned**: the average number of returned rows.
     *
     * @example count
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The role of the PolarDB-X 2.0 node. Valid values:
     *
     *   **polarx_cn**: compute node.
     *   **polarx_en**: data node.
     *
     * @example polarx_cn
     *
     * @var string
     */
    public $role;

    /**
     * @description The type of the SQL statement. Valid values: **SELECT**, **INSERT**, **UPDATE**, **DELETE**, **LOGIN**, **LOGOUT**, **MERGE**, **ALTER**, **CREATEINDEX**, **DROPINDEX**, **CREATE**, **DROP**, **SET**, **DESC**, **REPLACE**, **CALL**, **BEGIN**, **DESCRIBE**, **ROLLBACK**, **FLUSH**, **USE**, **SHOW**, **START**, **COMMIT**, and **RENAME**.
     *
     * >  If the database instance is an ApsaraDB RDS for MySQL instance, a PolarDB for MySQL cluster, or a PolarDB-X 2.0 instance, the statistics can be collected based on the SQL statement type.
     * @example SELECT
     *
     * @var string
     */
    public $sqlType;

    /**
     * @description The beginning of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * >  The start time must be within the storage duration of the SQL Explorer of the database instance, and can be up to 90 days earlier than the current time.
     * @example 1644716649000
     *
     * @var int
     */
    public $start;

    /**
     * @description The ID of the Alibaba Cloud account that is used to create the database instance.
     *
     * >  This parameter is optional. The system can automatically obtain the account ID based on the value of InstanceId when you call this operation.
     * @example 196278346919****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'asc'        => 'Asc',
        'end'        => 'End',
        'instanceId' => 'InstanceId',
        'nodeId'     => 'NodeId',
        'orderBy'    => 'OrderBy',
        'pageNo'     => 'PageNo',
        'pageSize'   => 'PageSize',
        'role'       => 'Role',
        'sqlType'    => 'SqlType',
        'start'      => 'Start',
        'userId'     => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asc) {
            $res['Asc'] = $this->asc;
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
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFullRequestOriginStatByInstanceIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Asc'])) {
            $model->asc = $map['Asc'];
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
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
