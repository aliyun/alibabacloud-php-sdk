<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetFullRequestStatResultByInstanceIdRequest extends Model
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
     * @description The name of the database.
     *
     * @example dbtest01
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The end of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     * @example 1645668213000
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
     * @description The keywords that are used for query.
     *
     * @example dbtest01
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The node ID.
     *
     * >  You must specify the node ID if your database instance is a PolarDB for MySQL cluster.
     * @example pi-bp12v7243x012****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The field by which to sort the returned entries. Default value: **count**. Valid values:
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
     * @description The IP address of the client that executes the SQL statement.
     *
     * >  This parameter is optional. If this parameter is specified, the full request statistics of the specified IP address are collected. If this parameter is left empty, the full request statistics of the entire database instance are collected.
     * @example 172.26.XX.XXX
     *
     * @var string
     */
    public $originHost;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 20.
     *
     * This parameter is required.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The role of the node in the PolarDB-X 2.0 instance. Valid values:
     *
     *   **polarx_cn**: compute node.
     *   **polarx_dn**: data node.
     *
     * @example polarx_cn
     *
     * @var string
     */
    public $role;

    /**
     * @description The SQL ID.
     *
     * >  If this parameter is specified, the full request statistics of the specified SQL query are collected. If this parameter is left empty, the full request statistics of the entire database instance are collected.
     * @example d71f82be1eef72bd105128204d2e****
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description The type of the SQL statement. Valid values: **SELECT**, **INSERT**, **UPDATE**, **DELETE**, **LOGIN**, **LOGOUT**, **MERGE**, **ALTER**, **CREATEINDEX**, **DROPINDEX**, **CREATE**, **DROP**, **SET**, **DESC**, **REPLACE**, **CALL**, **BEGIN**, **DESCRIBE**, **ROLLBACK**, **FLUSH**, **USE**, **SHOW**, **START**, **COMMIT**, and **RENAME**.
     *
     * >  If your database instance is an ApsaraDB RDS for MySQL instance, a PolarDB for MySQL cluster, or a PolarDB-X 2.0 instance, the statistics can be collected based on the SQL statement type.
     * @example SELECT
     *
     * @var string
     */
    public $sqlType;

    /**
     * @description The beginning of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     * @example 1645581813000
     *
     * @var int
     */
    public $start;

    /**
     * @description The ID of the Alibaba Cloud account that was used to create the database instance.
     *
     * >  This parameter is optional. The system can automatically obtain the Alibaba Cloud account ID based on the value of InstanceId when you call the GetFullRequestOriginStatByInstanceId operation.
     * @example 196278346919****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'asc'        => 'Asc',
        'dbName'     => 'DbName',
        'end'        => 'End',
        'instanceId' => 'InstanceId',
        'keyword'    => 'Keyword',
        'nodeId'     => 'NodeId',
        'orderBy'    => 'OrderBy',
        'originHost' => 'OriginHost',
        'pageNo'     => 'PageNo',
        'pageSize'   => 'PageSize',
        'role'       => 'Role',
        'sqlId'      => 'SqlId',
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
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->originHost) {
            $res['OriginHost'] = $this->originHost;
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
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
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
     * @return GetFullRequestStatResultByInstanceIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Asc'])) {
            $model->asc = $map['Asc'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['OriginHost'])) {
            $model->originHost = $map['OriginHost'];
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
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
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
