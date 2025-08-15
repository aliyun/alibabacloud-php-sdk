<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Dara\Model;

class CreateAdvancedQueryHistoryResponseBody extends Model
{
    /**
     * @var string
     */
    public $queryId;

    /**
     * @var string
     */
    public $querySql;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $simpleQuery;
    protected $_name = [
        'queryId' => 'QueryId',
        'querySql' => 'QuerySql',
        'requestId' => 'RequestId',
        'simpleQuery' => 'SimpleQuery',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queryId) {
            $res['QueryId'] = $this->queryId;
        }

        if (null !== $this->querySql) {
            $res['QuerySql'] = $this->querySql;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->simpleQuery) {
            $res['SimpleQuery'] = $this->simpleQuery;
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
        if (isset($map['QueryId'])) {
            $model->queryId = $map['QueryId'];
        }

        if (isset($map['QuerySql'])) {
            $model->querySql = $map['QuerySql'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SimpleQuery'])) {
            $model->simpleQuery = $map['SimpleQuery'];
        }

        return $model;
    }
}
