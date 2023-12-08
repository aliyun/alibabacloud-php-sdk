<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogRecordsResponseBody\slowLogRecords\data;

use AlibabaCloud\Tea\Model;

class resultSet extends Model
{
    /**
     * @example ::ffff:100.104.XX.XX
     *
     * @var string
     */
    public $initialAddress;

    /**
     * @example \"b51496f2-6b0b-4546-aff9-e17951cb9410\"
     *
     * @var string
     */
    public $initialQueryId;

    /**
     * @example test_users
     *
     * @var string
     */
    public $initialUser;

    /**
     * @example 1048576
     *
     * @var string
     */
    public $memoryUsage;

    /**
     * @example Select * from table
     *
     * @var string
     */
    public $query;

    /**
     * @example 2000
     *
     * @var string
     */
    public $queryDurationMs;

    /**
     * @example 2022-05-22 20:00:01
     *
     * @var string
     */
    public $queryStartTime;

    /**
     * @example 1048576
     *
     * @var string
     */
    public $readBytes;

    /**
     * @example 10027008
     *
     * @var string
     */
    public $readRows;

    /**
     * @example 1024
     *
     * @var string
     */
    public $resultBytes;

    /**
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
