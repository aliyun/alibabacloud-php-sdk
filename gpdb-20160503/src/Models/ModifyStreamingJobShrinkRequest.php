<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ModifyStreamingJobShrinkRequest extends Model
{
    /**
     * @description Account name.
     *
     * @example test-account
     *
     * @var string
     */
    public $account;

    /**
     * @description Delivery guarantee.
     *
     * @example ATLEAST / EXACTLY
     *
     * @var string
     */
    public $consistency;

    /**
     * @description Instance ID
     *
     * This parameter is required.
     *
     * @example ModifyStreamingJob
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Target data table mapping field list.
     *
     * @var string
     */
    public $destColumnsShrink;

    /**
     * @description Target database name.
     *
     * @example dest-db
     *
     * @var string
     */
    public $destDatabase;

    /**
     * @description Target schema.
     *
     * @example dest-schema
     *
     * @var string
     */
    public $destSchema;

    /**
     * @description Target table name.
     *
     * @example dest-table
     *
     * @var string
     */
    public $destTable;

    /**
     * @description When the data in Kafka does not match the ADBPG target table, it will cause a write failure. This value is the number of error rows allowed; exceeding this will cause the task to fail.
     *
     * @example 5
     *
     * @var int
     */
    public $errorLimitCount;

    /**
     * @description FallbackOffset rollback position, offset rollback
     *
     * - The FallbackOffset parameter defines the behavior when the consumer does not request a specific consumption point or the requested consumption point exceeds the current Kafka cluster\\"s recorded points. You can choose to start consuming from the earliest (newest) or latest (oldest) point.
     *
     * @example EARLIEST /  LATEST
     *
     * @var string
     */
    public $fallbackOffset;

    /**
     * @description Kafka group name
     *
     * @example group_name
     *
     * @var string
     */
    public $groupName;

    /**
     * @description Job configuration file, required for professional mode.
     *
     * @example DATABASE: adbpgss_test
     * USER: adbpgss_test
     * PASSWORD: adbpgssTest
     * HOST: gp-xxx-master.gpdb.rds-aliyun-pre.rds.aliyuncs.com
     * PORT: 5432
     * KAFKA:
     * INPUT:
     * SOURCE:
     * BROKERS: broker1:9092,broker2:9092,broker3:9092
     * TOPIC: testtopic
     * FALLBACK_OFFSET: earliest
     * KEY:
     * COLUMNS:
     * - NAME: customer_id
     * TYPE: int
     * FORMAT: delimited
     * DELIMITED_OPTION:
     * DELIMITER: \\"|\\"
     * VALUE:
     * COLUMNS:
     * - TYPE: integer
     * NAME: l_orderkey
     * - TYPE: integer
     * NAME: l_partkey
     * - TYPE: integer
     * NAME: l_suppkey
     * - TYPE: integer
     * NAME: l_linenumber
     * - TYPE: decimal
     * NAME: l_quantity
     * - TYPE: decimal
     * NAME: l_extendedprice
     * - TYPE: decimal
     * NAME: l_discount
     * - TYPE: decimal
     * NAME: l_tax
     * - TYPE: char
     * NAME: l_returnflag
     * - TYPE: char
     * NAME: l_linestatus
     * - TYPE: date
     * NAME: l_shipdate
     * - TYPE: date
     * NAME: l_commitdate
     * - TYPE: date
     * NAME: l_receiptdate
     * - TYPE: text
     * NAME: l_shipinstruct
     * - TYPE: text
     * NAME: l_shipmode
     * - TYPE: text
     * NAME: l_comment
     * FORMAT: delimited
     * DELIMITED_OPTION:
     * DELIMITER: \\"|\\"
     * ERROR_LIMIT: 10
     * OUTPUT:
     * SCHEMA: adbpgss_test
     * TABLE: write_with_insert_plaintext
     * MODE: MERGE
     * MATCH_COLUMNS:
     * - l_orderkey
     * - l_partkey
     * - l_suppkey
     * UPDATE_COLUMNS:
     * - l_linenumber
     * - l_quantity
     * - l_extendedprice
     * - l_discount
     * - l_tax
     * - l_returnflag
     * - l_linestatus
     * - l_shipdate
     * - l_commitdate
     * - l_receiptdate
     * - l_shipinstruct
     * - l_shipmode
     * - l_comment
     * MAPPING:
     * - EXPRESSION: l_orderkey
     * NAME: l_orderkey
     * - EXPRESSION: l_partkey
     * NAME: l_partkey
     * - EXPRESSION: l_suppkey
     * NAME: l_suppkey
     * - EXPRESSION: l_linenumber
     * NAME: l_linenumber
     * - EXPRESSION: l_quantity
     * NAME: l_quantity
     * - EXPRESSION: l_extendedprice
     * NAME: l_extendedprice
     * - EXPRESSION: l_discount
     * NAME: l_discount
     * - EXPRESSION: l_tax
     * NAME: l_tax
     * - EXPRESSION: l_returnflag
     * NAME: l_returnflag
     * - EXPRESSION: l_linestatus
     * NAME: l_linestatus
     * - EXPRESSION: l_shipdate
     * NAME: l_shipdate
     * - EXPRESSION: l_commitdate
     * NAME: l_commitdate
     * - EXPRESSION: l_receiptdate
     * NAME: l_receiptdate
     * - EXPRESSION: l_shipinstruct
     * NAME: l_shipinstruct
     * - EXPRESSION: l_shipmode
     * NAME: l_shipmode
     * - EXPRESSION: l_comment
     * NAME: l_comment
     * COMMIT:
     * MAX_ROW: 1000
     * MINIMAL_INTERVAL: 1000
     * CONSISTENCY: ATLEAST
     * POLL:
     * BATCHSIZE: 1000
     * TIMEOUT: 1000
     * PROPERTIES:
     * group.id: testgroup
     *
     * @var string
     */
    public $jobConfig;

    /**
     * @description Job description.
     *
     * @example test-job
     *
     * @var string
     */
    public $jobDescription;

    /**
     * @description Job ID.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $jobId;

    /**
     * @description Match columns, usually all primary key columns of the target table. If all column values in this configuration are the same, the two rows of data are considered duplicates.
     *
     * @var string
     */
    public $matchColumnsShrink;

    /**
     * @description Password.
     *
     * @example pwd123
     *
     * @var string
     */
    public $password;

    /**
     * @description Region ID.
     *
     * > You can call the [DescribeRegions](https://help.aliyun.com/document_detail/86912.html) API to view available region IDs.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Source data field list.
     *
     * @var string
     */
    public $srcColumnsShrink;

    /**
     * @description Whether to test the real-time task, values:
     *
     * -  true
     * - false
     *
     * Default value: false.
     *
     * @example true
     *
     * @var bool
     */
    public $tryRun;

    /**
     * @description Update columns, usually all non-primary key columns of the target table. When data duplication is determined through MatchColumns, updating the UpdateColumns column values will result in new data overwriting old data.
     *
     * @var string
     */
    public $updateColumnsShrink;

    /**
     * @description Write mode.
     *
     * @example INSERT/UPDATE/MERGE
     *
     * @var string
     */
    public $writeMode;
    protected $_name = [
        'account' => 'Account',
        'consistency' => 'Consistency',
        'DBInstanceId' => 'DBInstanceId',
        'destColumnsShrink' => 'DestColumns',
        'destDatabase' => 'DestDatabase',
        'destSchema' => 'DestSchema',
        'destTable' => 'DestTable',
        'errorLimitCount' => 'ErrorLimitCount',
        'fallbackOffset' => 'FallbackOffset',
        'groupName' => 'GroupName',
        'jobConfig' => 'JobConfig',
        'jobDescription' => 'JobDescription',
        'jobId' => 'JobId',
        'matchColumnsShrink' => 'MatchColumns',
        'password' => 'Password',
        'regionId' => 'RegionId',
        'srcColumnsShrink' => 'SrcColumns',
        'tryRun' => 'TryRun',
        'updateColumnsShrink' => 'UpdateColumns',
        'writeMode' => 'WriteMode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->consistency) {
            $res['Consistency'] = $this->consistency;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->destColumnsShrink) {
            $res['DestColumns'] = $this->destColumnsShrink;
        }
        if (null !== $this->destDatabase) {
            $res['DestDatabase'] = $this->destDatabase;
        }
        if (null !== $this->destSchema) {
            $res['DestSchema'] = $this->destSchema;
        }
        if (null !== $this->destTable) {
            $res['DestTable'] = $this->destTable;
        }
        if (null !== $this->errorLimitCount) {
            $res['ErrorLimitCount'] = $this->errorLimitCount;
        }
        if (null !== $this->fallbackOffset) {
            $res['FallbackOffset'] = $this->fallbackOffset;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->jobConfig) {
            $res['JobConfig'] = $this->jobConfig;
        }
        if (null !== $this->jobDescription) {
            $res['JobDescription'] = $this->jobDescription;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->matchColumnsShrink) {
            $res['MatchColumns'] = $this->matchColumnsShrink;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->srcColumnsShrink) {
            $res['SrcColumns'] = $this->srcColumnsShrink;
        }
        if (null !== $this->tryRun) {
            $res['TryRun'] = $this->tryRun;
        }
        if (null !== $this->updateColumnsShrink) {
            $res['UpdateColumns'] = $this->updateColumnsShrink;
        }
        if (null !== $this->writeMode) {
            $res['WriteMode'] = $this->writeMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyStreamingJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['Consistency'])) {
            $model->consistency = $map['Consistency'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DestColumns'])) {
            $model->destColumnsShrink = $map['DestColumns'];
        }
        if (isset($map['DestDatabase'])) {
            $model->destDatabase = $map['DestDatabase'];
        }
        if (isset($map['DestSchema'])) {
            $model->destSchema = $map['DestSchema'];
        }
        if (isset($map['DestTable'])) {
            $model->destTable = $map['DestTable'];
        }
        if (isset($map['ErrorLimitCount'])) {
            $model->errorLimitCount = $map['ErrorLimitCount'];
        }
        if (isset($map['FallbackOffset'])) {
            $model->fallbackOffset = $map['FallbackOffset'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['JobConfig'])) {
            $model->jobConfig = $map['JobConfig'];
        }
        if (isset($map['JobDescription'])) {
            $model->jobDescription = $map['JobDescription'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['MatchColumns'])) {
            $model->matchColumnsShrink = $map['MatchColumns'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SrcColumns'])) {
            $model->srcColumnsShrink = $map['SrcColumns'];
        }
        if (isset($map['TryRun'])) {
            $model->tryRun = $map['TryRun'];
        }
        if (isset($map['UpdateColumns'])) {
            $model->updateColumnsShrink = $map['UpdateColumns'];
        }
        if (isset($map['WriteMode'])) {
            $model->writeMode = $map['WriteMode'];
        }

        return $model;
    }
}
