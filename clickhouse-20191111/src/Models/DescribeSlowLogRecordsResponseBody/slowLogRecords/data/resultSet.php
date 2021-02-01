<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogRecordsResponseBody\slowLogRecords\data;

use AlibabaCloud\Tea\Model;

class resultSet extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $queryStartTime;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $readRows;

    /**
     * @var string
     */
    public $initialAddress;

    /**
     * @var string
     */
    public $memoryUsage;

    /**
     * @var string
     */
    public $initialUser;

    /**
     * @var string
     */
    public $initialQueryId;

    /**
     * @var string
     */
    public $readBytes;

    /**
     * @var string
     */
    public $queryDurationMs;

    /**
     * @var string
     */
    public $resultBytes;
    protected $_name = [
        'type'            => 'Type',
        'queryStartTime'  => 'QueryStartTime',
        'query'           => 'Query',
        'readRows'        => 'ReadRows',
        'initialAddress'  => 'InitialAddress',
        'memoryUsage'     => 'MemoryUsage',
        'initialUser'     => 'InitialUser',
        'initialQueryId'  => 'InitialQueryId',
        'readBytes'       => 'ReadBytes',
        'queryDurationMs' => 'QueryDurationMs',
        'resultBytes'     => 'ResultBytes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->queryStartTime) {
            $res['QueryStartTime'] = $this->queryStartTime;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->readRows) {
            $res['ReadRows'] = $this->readRows;
        }
        if (null !== $this->initialAddress) {
            $res['InitialAddress'] = $this->initialAddress;
        }
        if (null !== $this->memoryUsage) {
            $res['MemoryUsage'] = $this->memoryUsage;
        }
        if (null !== $this->initialUser) {
            $res['InitialUser'] = $this->initialUser;
        }
        if (null !== $this->initialQueryId) {
            $res['InitialQueryId'] = $this->initialQueryId;
        }
        if (null !== $this->readBytes) {
            $res['ReadBytes'] = $this->readBytes;
        }
        if (null !== $this->queryDurationMs) {
            $res['QueryDurationMs'] = $this->queryDurationMs;
        }
        if (null !== $this->resultBytes) {
            $res['ResultBytes'] = $this->resultBytes;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['QueryStartTime'])) {
            $model->queryStartTime = $map['QueryStartTime'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['ReadRows'])) {
            $model->readRows = $map['ReadRows'];
        }
        if (isset($map['InitialAddress'])) {
            $model->initialAddress = $map['InitialAddress'];
        }
        if (isset($map['MemoryUsage'])) {
            $model->memoryUsage = $map['MemoryUsage'];
        }
        if (isset($map['InitialUser'])) {
            $model->initialUser = $map['InitialUser'];
        }
        if (isset($map['InitialQueryId'])) {
            $model->initialQueryId = $map['InitialQueryId'];
        }
        if (isset($map['ReadBytes'])) {
            $model->readBytes = $map['ReadBytes'];
        }
        if (isset($map['QueryDurationMs'])) {
            $model->queryDurationMs = $map['QueryDurationMs'];
        }
        if (isset($map['ResultBytes'])) {
            $model->resultBytes = $map['ResultBytes'];
        }

        return $model;
    }
}
