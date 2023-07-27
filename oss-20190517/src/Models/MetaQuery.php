<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\SDK\Oss\V20190517\Models\MetaQuery\aggregations;
use AlibabaCloud\Tea\Model;

class MetaQuery extends Model
{
    /**
     * @var aggregations
     */
    public $aggregations;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $sort;
    protected $_name = [
        'aggregations' => 'Aggregations',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'order'        => 'Order',
        'query'        => 'Query',
        'sort'         => 'Sort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregations) {
            $res['Aggregations'] = null !== $this->aggregations ? $this->aggregations->toMap() : null;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MetaQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aggregations'])) {
            $model->aggregations = aggregations::fromMap($map['Aggregations']);
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        return $model;
    }
}
