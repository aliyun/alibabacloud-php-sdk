<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeSlowLogRecordsResponseBody\data;

use AlibabaCloud\Dara\Model;

class resultSet extends Model
{
    /**
     * @var string
     */
    public $initialAddress;

    /**
     * @var string
     */
    public $initialQueryId;

    /**
     * @var string
     */
    public $initialUser;

    /**
     * @var int
     */
    public $memoryUsage;

    /**
     * @var string
     */
    public $query;

    /**
     * @var int
     */
    public $queryDurationMs;

    /**
     * @var string
     */
    public $queryStartTime;

    /**
     * @var int
     */
    public $readBytes;

    /**
     * @var int
     */
    public $readRows;

    /**
     * @var int
     */
    public $resultBytes;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'initialAddress' => 'InitialAddress',
        'initialQueryId' => 'InitialQueryId',
        'initialUser' => 'InitialUser',
        'memoryUsage' => 'MemoryUsage',
        'query' => 'Query',
        'queryDurationMs' => 'QueryDurationMs',
        'queryStartTime' => 'QueryStartTime',
        'readBytes' => 'ReadBytes',
        'readRows' => 'ReadRows',
        'resultBytes' => 'ResultBytes',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
