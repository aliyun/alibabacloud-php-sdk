<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeProcessListResponseBody\processList\data;

use AlibabaCloud\Tea\Model;

class resultSet extends Model
{
    /**
     * @description The IP address of the client that initiates the query.
     *
     * @example ::ffff:10.1.XX.XX
     *
     * @var string
     */
    public $initialAddress;

    /**
     * @description The query ID.
     *
     * @example 2dd144fd-4230-4249-b15c-e63f964fbb5a
     *
     * @var string
     */
    public $initialQueryId;

    /**
     * @description The database account.
     *
     * @example test
     *
     * @var string
     */
    public $initialUser;

    /**
     * @description The SQL statement that is executed in the query.
     *
     * @example select * from test order by score limit 1;
     *
     * @var string
     */
    public $query;

    /**
     * @description The execution duration of the query. Unit: milliseconds.
     *
     * @example 2000
     *
     * @var string
     */
    public $queryDurationMs;

    /**
     * @description The beginning of the time range to query. The value is in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in Coordinated Universal Time (UTC).
     *
     * @example 2021-02-02T09:14:48Z
     *
     * @var string
     */
    public $queryStartTime;
    protected $_name = [
        'initialAddress'  => 'InitialAddress',
        'initialQueryId'  => 'InitialQueryId',
        'initialUser'     => 'InitialUser',
        'query'           => 'Query',
        'queryDurationMs' => 'QueryDurationMs',
        'queryStartTime'  => 'QueryStartTime',
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
