<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DownloadDiagnosisRecordsRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * >  You can call the [DescribeDBInstances](~~86911~~) operation to query the details of all AnalyticDB for PostgreSQL instances in a specific region, including instance IDs.
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The name of the database.
     *
     * @example adbtest
     *
     * @var string
     */
    public $database;

    /**
     * @description The end of the time range to query. Specify the time in the *yyyy-MM-dd*T*HH:mm*Z format. The time must be in UTC.
     *
     * @example 2022-05-07T07:59Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The language of the file that contains the query diagnostic information. Valid values:
     *
     *   **zh**: simplified Chinese
     *   **en**: English
     *   **ja**: Japanese
     *   **zh-tw**: traditional Chinese
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The filter condition on queries. The value is in the JSON format. Valid values:
     *
     *   `{"Type":"maxCost", "Value":"100"}`: filters the top 100 queries that are the most time-consuming.
     *   `{"Type":"status","Value":"finished"}`: filters completed queries.
     *   `{"Type":"status","Value":"running"}`: filters running queries.
     *   `{"Type":"cost","Max":"200"}`: filters the queries that consume less than 200 milliseconds.
     *   `{"Type":"cost","Min":"200","Max":"60000"}`: filters the queries that consume 200 milliseconds or more and less than 1 minute.
     *   `{"Type":"cost","Min":"60000"}`: filters the queries that consume 1 minute or more.
     *   `{"Type":"cost","Min":"30","Max":"50"}`: filters the queries that consume 30 milliseconds or more and less than 50 milliseconds. You can customize a filter condition by setting **Min** and **Max**.
     *
     * @example { "Type":"maxCost", "Value":"100" }
     *
     * @var string
     */
    public $queryCondition;

    /**
     * @description The ID of the resource group to which the instance belongs. For more information about how to obtain the ID of a resource group, see [View basic information of a resource group](~~151181~~).
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The beginning of the time range to query. Specify the time in the *yyyy-MM-dd*T*HH:mm*Z format. The time must be in UTC.
     *
     * @example 2022-05-07T06:59Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the database account.
     *
     * @example adbpguser
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'DBInstanceId'    => 'DBInstanceId',
        'database'        => 'Database',
        'endTime'         => 'EndTime',
        'lang'            => 'Lang',
        'queryCondition'  => 'QueryCondition',
        'resourceGroupId' => 'ResourceGroupId',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->queryCondition) {
            $res['QueryCondition'] = $this->queryCondition;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
     * @return DownloadDiagnosisRecordsRequest
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['QueryCondition'])) {
            $model->queryCondition = $map['QueryCondition'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
