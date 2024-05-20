<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogRecordsResponseBody\slowLogRecords\data;

use AlibabaCloud\Tea\Model;

class resultSet extends Model
{
    /**
     * @description The IP address of the client that initiated the query.
     *
     * @example ::ffff:100.104.XX.XX
     *
     * @var string
     */
    public $initialAddress;

    /**
     * @description The query ID.
     *
     * @example \\"b51496f2-6b0b-4546-aff9-e17951cb9410\\"
     *
     * @var string
     */
    public $initialQueryId;

    /**
     * @description The username that is used to initiate the query.
     *
     * @example test_users
     *
     * @var string
     */
    public $initialUser;

    /**
     * @description The peak memory usage for the query. Unit: bytes.
     *
     * @example 1048576
     *
     * @var string
     */
    public $memoryUsage;

    /**
     * @description The statement that was executed in the query.
     *
     * @example Select * from table
     *
     * @var string
     */
    public $query;

    /**
     * @description The duration of the query. Unit: milliseconds.
     *
     * @example 2000
     *
     * @var string
     */
    public $queryDurationMs;

    /**
     * @description The beginning of the time range to query. The time is in the yyyy-MM-dd hh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2022-05-22 20:00:01
     *
     * @var string
     */
    public $queryStartTime;

    /**
     * @description The size of the data read by executing the statement. Unit: bytes.
     *
     * @example 1048576
     *
     * @var string
     */
    public $readBytes;

    /**
     * @description The number of rows read by executing the statement.
     *
     * @example 10027008
     *
     * @var string
     */
    public $readRows;

    /**
     * @description The size of the result data. Unit: bytes.
     *
     * @example 1024
     *
     * @var string
     */
    public $resultBytes;

    /**
     * @description The query status. Valid values:
     *
     *   **QueryFinish**: The query is complete.
     *   **Processing**: The query is running.
     *
     * @example QueryFinish
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'initialAddress'  => 'InitialAddress',
        'initialQueryId'  => 'InitialQueryId',
        'initialUser'     => 'InitialUser',
        'memoryUsage'     => 'MemoryUsage',
        'query'           => 'Query',
        'queryDurationMs' => 'QueryDurationMs',
        'queryStartTime'  => 'QueryStartTime',
        'readBytes'       => 'ReadBytes',
        'readRows'        => 'ReadRows',
        'resultBytes'     => 'ResultBytes',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->initialAddress) {
            $res['InitialAddress'] = $this->initialAddress;
        }
        if (null !== $this->initialQueryId) {
            $res['InitialQueryId'] = $this->initialQueryId;
        }
        if (null !== $this->initialUser) {
            $res['InitialUser'] = $this->initialUser;
        }
        if (null !== $this->memoryUsage) {
            $res['MemoryUsage'] = $this->memoryUsage;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->queryDurationMs) {
            $res['QueryDurationMs'] = $this->queryDurationMs;
        }
        if (null !== $this->queryStartTime) {
            $res['QueryStartTime'] = $this->queryStartTime;
        }
        if (null !== $this->readBytes) {
            $res['ReadBytes'] = $this->readBytes;
        }
        if (null !== $this->readRows) {
            $res['ReadRows'] = $this->readRows;
        }
        if (null !== $this->resultBytes) {
            $res['ResultBytes'] = $this->resultBytes;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InitialAddress'])) {
            $model->initialAddress = $map['InitialAddress'];
        }
        if (isset($map['InitialQueryId'])) {
            $model->initialQueryId = $map['InitialQueryId'];
        }
        if (isset($map['InitialUser'])) {
            $model->initialUser = $map['InitialUser'];
        }
        if (isset($map['MemoryUsage'])) {
            $model->memoryUsage = $map['MemoryUsage'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['QueryDurationMs'])) {
            $model->queryDurationMs = $map['QueryDurationMs'];
        }
        if (isset($map['QueryStartTime'])) {
            $model->queryStartTime = $map['QueryStartTime'];
        }
        if (isset($map['ReadBytes'])) {
            $model->readBytes = $map['ReadBytes'];
        }
        if (isset($map['ReadRows'])) {
            $model->readRows = $map['ReadRows'];
        }
        if (isset($map['ResultBytes'])) {
            $model->resultBytes = $map['ResultBytes'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
