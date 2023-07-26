<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeSQLLogCountRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * >  You can call the [DescribeDBInstances](~~86911~~) operation to query details of all AnalyticDB for PostgreSQL instances in a specific region, including instance IDs.
     * @example gp-xxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The name of the database.
     *
     * @example testdb
     *
     * @var string
     */
    public $database;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the `yyyy-MM-ddTHH:mmZ` format. The time must be in UTC.
     *
     * >  The end time must be later than the start time. Their interval cannot be more than seven days.
     * @example 2020-12-14T11:22Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The execution duration of the query. Unit: seconds.
     *
     * @example 100
     *
     * @var string
     */
    public $executeCost;

    /**
     * @description The execution state of the query. Valid values:
     *
     *   **success**
     *   **fail**
     *
     * @example success
     *
     * @var string
     */
    public $executeState;

    /**
     * @description The maximum amount of time consumed by a slow query. Minimum value: 0. Unit: seconds.
     *
     * @example 1000
     *
     * @var string
     */
    public $maxExecuteCost;

    /**
     * @description The minimum amount of time consumed by a slow query. Minimum value: 0. Unit: seconds.
     *
     * @example 10
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
     * > *   If the **OperationClass** parameter is specified, the **OperationType** value must belong to the corresponding query language. For example, if the **OperationClass** value is **DQL**, the **OperationType** value must be a **DQL** SQL statement such as **SELECT**.
     * >*   If the **OperationClass** parameter is not specified, the **OperationType** value can be an SQL statement of all query languages.
     * >*   If neither of the **OperationClass** and **OperationType** parameters is specified, all types of SQL statements are returned.
     * @example SELECT
     *
     * @var string
     */
    public $operationType;

    /**
     * @description The keywords used to query.
     *
     * @example test
     *
     * @var string
     */
    public $queryKeywords;

    /**
     * @description The source IP address.
     *
     * @example 10.**.**.13
     *
     * @var string
     */
    public $sourceIP;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the `yyyy-MM-ddTHH:mmZ` format. The time must be in UTC.
     *
     * @example 2020-12-12T11:22Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The username that is used to log on to the database.
     *
     * @example adbpgadmin
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
     * @return DescribeSQLLogCountRequest
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
