<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class SearchHistoricalSnapshotsRequest extends Model
{
    /**
     * @var int
     */
    public $limit;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $order;
    /**
     * @var mixed[]
     */
    public $query;
    /**
     * @var string
     */
    public $sortBy;
    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'limit'      => 'Limit',
        'nextToken'  => 'NextToken',
        'order'      => 'Order',
        'query'      => 'Query',
        'sortBy'     => 'SortBy',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        if (\is_array($this->query)) {
            Model::validateArray($this->query);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->query) {
            if (\is_array($this->query)) {
                $res['Query'] = [];
                $n1           = 0;
                foreach ($this->query as $item1) {
                    $res['Query'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['Query'])) {
            if (!empty($map['Query'])) {
                $model->query = [];
                $n1           = 0;
                foreach ($map['Query'] as $item1) {
                    $model->query[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
