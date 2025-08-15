<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeAdvancedQueryHistoryResponseBody;

use AlibabaCloud\Dara\Model;

class queryHistoryList extends Model
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
     * @var bool
     */
    public $simpleQuery;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'queryId' => 'QueryId',
        'querySql' => 'QuerySql',
        'simpleQuery' => 'SimpleQuery',
        'timeStamp' => 'TimeStamp',
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

        if (null !== $this->simpleQuery) {
            $res['SimpleQuery'] = $this->simpleQuery;
        }

        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
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

        if (isset($map['SimpleQuery'])) {
            $model->simpleQuery = $map['SimpleQuery'];
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
