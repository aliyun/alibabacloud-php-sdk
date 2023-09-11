<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeSQLLogsV2Request extends Model
{
    /**
     * @description The ID of instance.
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
     * @example adbpgadmin
     *
     * @var string
     */
    public $database;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-ddTHH:mmZ* format. The time must be in UTC.
     *
     * >  The end time must be later than the start time. The interval cannot be more than 24 hours.
     * @example 2022-03-17T06:30Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The execution duration of the query. Unit: seconds.
     *
     * @example 1
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
     * > *   If the **OperationClass** parameter is specified, the **OperationType** value must belong to the corresponding query language. For example, if the **OperationClass** value is **DQL**, the **OperationType** value must be a **DQL** SQL statement such as **SELECT**.
     * >*   If the **OperationClass** parameter is not specified, the **OperationType** value can be an SQL statement of all query languages.
     * >*   If neither of the **OperationClass** and **OperationType** parameters is specified, all types of SQL statements are returned.
     * @example SELECT
     *
     * @var string
     */
    public $operationType;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of the page to return. The maximum value is 200.
     *
     * @example 1
     *
     * @var string
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
     * @description The region ID of the instance.
     *
     * > You can call the [DescribeRegions](~~86912~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The source IP address.
     *
     * @example 100.XX.XX.90
     *
     * @var string
     */
    public $sourceIP;

    /**
     * @description The beginning of the time range. Specify the time in the ISO 8601 standard in the *yyyy-MM-ddTHH:mmZ* format. The time must be in UTC.
     *
     * @example 2022-03-10T06:30Z
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
        'DBInstanceId'    => 'DBInstanceId',
        'database'        => 'Database',
        'endTime'         => 'EndTime',
        'executeCost'     => 'ExecuteCost',
        'executeState'    => 'ExecuteState',
        'maxExecuteCost'  => 'MaxExecuteCost',
        'minExecuteCost'  => 'MinExecuteCost',
        'operationClass'  => 'OperationClass',
        'operationType'   => 'OperationType',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'queryKeywords'   => 'QueryKeywords',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'sourceIP'        => 'SourceIP',
        'startTime'       => 'StartTime',
        'user'            => 'User',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
     * @return DescribeSQLLogsV2Request
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
