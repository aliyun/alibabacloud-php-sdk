<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeProcessListResponseBody\data;

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
     * @example \\"79f7e40b-87e2-4ef4-b6df-21889a3a030e\\"
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
     * @description The query statement that is running.
     *
     * @example select * from test
     *
     * @var string
     */
    public $query;

    /**
     * @description The minimum query duration. Minimum value: **1000**. Unit: milliseconds.
     *
     * @example 1000
     *
     * @var int
     */
    public $queryDurationMs;

    /**
     * @description The beginning of the time range to query. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-07-23T10:13:23Z
     *
     * @var string
     */
    public $queryStartTime;
    protected $_name = [
        'initialAddress' => 'InitialAddress',
        'initialQueryId' => 'InitialQueryId',
        'initialUser' => 'InitialUser',
        'query' => 'Query',
        'queryDurationMs' => 'QueryDurationMs',
        'queryStartTime' => 'QueryStartTime',
    ];

    public function validate() {}

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
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->queryDurationMs) {
            $res['QueryDurationMs'] = $this->queryDurationMs;
        }
        if (null !== $this->queryStartTime) {
            $res['QueryStartTime'] = $this->queryStartTime;
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
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['QueryDurationMs'])) {
            $model->queryDurationMs = $map['QueryDurationMs'];
        }
        if (isset($map['QueryStartTime'])) {
            $model->queryStartTime = $map['QueryStartTime'];
        }

        return $model;
    }
}
