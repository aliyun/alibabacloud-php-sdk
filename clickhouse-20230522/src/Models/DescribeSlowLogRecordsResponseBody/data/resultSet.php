<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeSlowLogRecordsResponseBody\data;

use AlibabaCloud\Tea\Model;

class resultSet extends Model
{
    /**
     * @description The address to which the query statement is sent.
     *
     * @example 0:0:0:0:0:ffff:1edd65ea
     *
     * @var string
     */
    public $initialAddress;

    /**
     * @description The query ID.
     *
     * @example \\"ae915a3ad30e77e67a7215d05b658cc6\\"
     *
     * @var string
     */
    public $initialQueryId;

    /**
     * @description The user who executes the query statement.
     *
     * @example bany
     *
     * @var string
     */
    public $initialUser;

    /**
     * @description The peak memory usage for the query. Unit: bytes.
     *
     * @example 4941696
     *
     * @var int
     */
    public $memoryUsage;

    /**
     * @description The query statement that is running.
     *
     * @example select * from test
     *
     * @var string
     */
    public $query;

    /**
     * @description The execution duration of slow SQL queries. Minimum value: **1000**. Unit: milliseconds.
     *
     * @example 3000
     *
     * @var int
     */
    public $queryDurationMs;

    /**
     * @description The beginning of the time range to query. The time is in the yyyy-MM-dd hh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2023-09-11 16:00:00
     *
     * @var string
     */
    public $queryStartTime;

    /**
     * @description The size of the data that is scanned. Unit: bytes.
     *
     * @example 4507128020832
     *
     * @var int
     */
    public $readBytes;

    /**
     * @description The number of read rows.
     *
     * @example 10
     *
     * @var int
     */
    public $readRows;

    /**
     * @description The size of the result data. Unit: bytes.
     *
     * @example 10
     *
     * @var int
     */
    public $resultBytes;

    /**
     * @description The type of the slow query logs.
     *
     * @example ExceptionWhileProcessing
     *
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

    public function validate(): void {}

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
