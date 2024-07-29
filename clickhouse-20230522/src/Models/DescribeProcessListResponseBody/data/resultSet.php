<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeProcessListResponseBody\data;

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
     * @example \\"79f7e40b-87e2-4ef4-b6df-21889a3a030e\\"
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
     * @example select * from test
     *
     * @var string
     */
    public $query;

    /**
     * @example 1000
     *
     * @var int
     */
    public $queryDurationMs;

    /**
     * @example 2023-07-23T10:13:23Z
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
