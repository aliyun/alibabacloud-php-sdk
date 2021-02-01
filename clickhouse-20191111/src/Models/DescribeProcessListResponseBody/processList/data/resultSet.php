<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeProcessListResponseBody\processList\data;

use AlibabaCloud\Tea\Model;

class resultSet extends Model
{
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
     * @var string
     */
    public $queryDurationMs;
    protected $_name = [
        'queryStartTime'  => 'QueryStartTime',
        'query'           => 'Query',
        'initialAddress'  => 'InitialAddress',
        'initialQueryId'  => 'InitialQueryId',
        'initialUser'     => 'InitialUser',
        'queryDurationMs' => 'QueryDurationMs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queryStartTime) {
            $res['QueryStartTime'] = $this->queryStartTime;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->initialAddress) {
            $res['InitialAddress'] = $this->initialAddress;
        }
        if (null !== $this->initialQueryId) {
            $res['InitialQueryId'] = $this->initialQueryId;
        }
        if (null !== $this->initialUser) {
            $res['InitialUser'] = $this->initialUser;
        }
        if (null !== $this->queryDurationMs) {
            $res['QueryDurationMs'] = $this->queryDurationMs;
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
        if (isset($map['QueryStartTime'])) {
            $model->queryStartTime = $map['QueryStartTime'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['InitialAddress'])) {
            $model->initialAddress = $map['InitialAddress'];
        }
        if (isset($map['InitialQueryId'])) {
            $model->initialQueryId = $map['InitialQueryId'];
        }
        if (isset($map['InitialUser'])) {
            $model->initialUser = $map['InitialUser'];
        }
        if (isset($map['QueryDurationMs'])) {
            $model->queryDurationMs = $map['QueryDurationMs'];
        }

        return $model;
    }
}
