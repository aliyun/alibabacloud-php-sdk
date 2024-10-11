<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeSlowQueryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example ::ffff:10.1.XX.XX
     *
     * @var string
     */
    public $initialAddress;

    /**
     * @example 7c28bbbb-753b-4eba-98b1-efcbe2b9bdf6
     *
     * @var string
     */
    public $initialQueryId;

    /**
     * @example test
     *
     * @var string
     */
    public $initialUser;

    /**
     * @example 1024000000
     *
     * @var int
     */
    public $memoryUsage;

    /**
     * @example select * from test order by score limit 1;
     *
     * @var string
     */
    public $query;

    /**
     * @example 2000
     *
     * @var int
     */
    public $queryDurationMs;

    /**
     * @example 2021-02-02T08:30:00Z
     *
     * @var string
     */
    public $queryStartTime;

    /**
     * @example QueryFinish
     *
     * @var string
     */
    public $queryState;

    /**
     * @example 9141300000
     *
     * @var int
     */
    public $readBytes;

    /**
     * @example 1000000
     *
     * @var int
     */
    public $readRows;

    /**
     * @example 8174
     *
     * @var int
     */
    public $resultBytes;

    /**
     * @example 1
     *
     * @var int
     */
    public $resultRows;
    protected $_name = [
        'initialAddress'  => 'InitialAddress',
        'initialQueryId'  => 'InitialQueryId',
        'initialUser'     => 'InitialUser',
        'memoryUsage'     => 'MemoryUsage',
        'query'           => 'Query',
        'queryDurationMs' => 'QueryDurationMs',
        'queryStartTime'  => 'QueryStartTime',
        'queryState'      => 'QueryState',
        'readBytes'       => 'ReadBytes',
        'readRows'        => 'ReadRows',
        'resultBytes'     => 'ResultBytes',
        'resultRows'      => 'ResultRows',
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
        if (null !== $this->queryState) {
            $res['QueryState'] = $this->queryState;
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
        if (null !== $this->resultRows) {
            $res['ResultRows'] = $this->resultRows;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['QueryState'])) {
            $model->queryState = $map['QueryState'];
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
        if (isset($map['ResultRows'])) {
            $model->resultRows = $map['ResultRows'];
        }

        return $model;
    }
}
