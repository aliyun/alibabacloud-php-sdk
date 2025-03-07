<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeSQLLogsRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example gp-xxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The name of the database.
     *
     * @example adbpgadmin
     *
     * @var string
     */
    public $database;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-ddTHH:mmZ* format. The time must be in UTC.
     *
     * This parameter is required.
     * @example 2021-03-17T06:30Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The execution duration of the SQL statement. Unit: seconds.
     *
     * @example 1
     *
     * @var string
     */
    public $executeCost;

    /**
     * @description The execution status of the SQL statement. Valid values:
     *
     *   **1**: successful.
     *   **0**: failed.
     *
     * @example success
     *
     * @var string
     */
    public $executeState;

    /**
     * @description The maximum amount of time consumed by a slow query. Unit: seconds. Minimum value: 0.
     *
     * @example 1000
     *
     * @var string
     */
    public $maxExecuteCost;

    /**
     * @description The minimum amount of time consumed by a slow query. Unit: seconds. Minimum value: 0.
     *
     * @example 1
     *
     * @var string
     */
    public $minExecuteCost;

    /**
     * @description The type of the query language. Valid values:
     *
     *   **DQL**
     *   **DML**
     *   **DDL**
     *   **DCL**
     *   **TCL**
     *
     * @example DQL
     *
     * @var string
     */
    public $operationClass;

    /**
     * @description The type of the SQL statement.
     *
     * >
     *
     *   If **OperationClass** is specified, the value of **OperationType** must belong to the corresponding query language. For example, if **OperationClass** is set to **DQL**, the value of **OperationType** must be a **DQL** statement such as **SELECT**.
     *
     *   If **OperationClass** is not specified, the value of **OperationType** can be an SQL statement of any query language.
     *   If **OperationClass** and **OperationType** are not specified, all types of SQL statements are returned.
     *
     * @example SELECT
     *
     * @var string
     */
    public $operationType;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values:
     *
     *   **30**
     *   **50**
     *   **100**
     *
     * Default value: **30**.
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The keywords of the SQL statement.
     *
     * @example select 1
     *
     * @var string
     */
    public $queryKeywords;

    /**
     * @description The source IP address.
     *
     * @example 100.**.**.90
     *
     * @var string
     */
    public $sourceIP;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-ddTHH:mmZ* format. The time must be in UTC.
     *
     * This parameter is required.
     * @example 2021-03-10T06:30Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the database account.
     *
     * @example testadmin
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'DBInstanceId'   => 'DBInstanceId',
        'database'       => 'Database',
        'endTime'        => 'EndTime',
        'executeCost'    => 'ExecuteCost',
        'executeState'   => 'ExecuteState',
        'maxExecuteCost' => 'MaxExecuteCost',
        'minExecuteCost' => 'MinExecuteCost',
        'operationClass' => 'OperationClass',
        'operationType'  => 'OperationType',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'queryKeywords'  => 'QueryKeywords',
        'sourceIP'       => 'SourceIP',
        'startTime'      => 'StartTime',
        'user'           => 'User',
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
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->executeCost) {
            $res['ExecuteCost'] = $this->executeCost;
        }
        if (null !== $this->executeState) {
            $res['ExecuteState'] = $this->executeState;
        }
        if (null !== $this->maxExecuteCost) {
            $res['MaxExecuteCost'] = $this->maxExecuteCost;
        }
        if (null !== $this->minExecuteCost) {
            $res['MinExecuteCost'] = $this->minExecuteCost;
        }
        if (null !== $this->operationClass) {
            $res['OperationClass'] = $this->operationClass;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryKeywords) {
            $res['QueryKeywords'] = $this->queryKeywords;
        }
        if (null !== $this->sourceIP) {
            $res['SourceIP'] = $this->sourceIP;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSQLLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExecuteCost'])) {
            $model->executeCost = $map['ExecuteCost'];
        }
        if (isset($map['ExecuteState'])) {
            $model->executeState = $map['ExecuteState'];
        }
        if (isset($map['MaxExecuteCost'])) {
            $model->maxExecuteCost = $map['MaxExecuteCost'];
        }
        if (isset($map['MinExecuteCost'])) {
            $model->minExecuteCost = $map['MinExecuteCost'];
        }
        if (isset($map['OperationClass'])) {
            $model->operationClass = $map['OperationClass'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryKeywords'])) {
            $model->queryKeywords = $map['QueryKeywords'];
        }
        if (isset($map['SourceIP'])) {
            $model->sourceIP = $map['SourceIP'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
