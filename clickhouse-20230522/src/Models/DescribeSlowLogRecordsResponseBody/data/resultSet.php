<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeSlowLogRecordsResponseBody\data;

use AlibabaCloud\Tea\Model;

class resultSet extends Model
{
    /**
     * @example 0:0:0:0:0:ffff:1edd65ea
     *
     * @var string
     */
    public $initialAddress;

    /**
     * @example \\"ae915a3ad30e77e67a7215d05b658cc6\\"
     *
     * @var string
     */
    public $initialQueryId;

    /**
     * @example bany
     *
     * @var string
     */
    public $initialUser;

    /**
     * @example 4941696
     *
     * @var int
     */
    public $memoryUsage;

    /**
     * @example select * from test
     *
     * @var string
     */
    public $query;

    /**
     * @example 3000
     *
     * @var int
     */
    public $queryDurationMs;

    /**
     * @example 2023-09-11 16:00:00
     *
     * @var string
     */
    public $queryStartTime;

    /**
     * @example 4507128020832
     *
     * @var int
     */
    public $readBytes;

    /**
     * @example 10
     *
     * @var int
     */
    public $readRows;

    /**
     * @example 10
     *
     * @var int
     */
    public $resultBytes;

    /**
     * @example ExceptionWhileProcessing
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
