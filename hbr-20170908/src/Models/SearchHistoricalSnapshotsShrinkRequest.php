<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class SearchHistoricalSnapshotsShrinkRequest extends Model
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
     * @var string
     */
    public $queryShrink;
    /**
     * @var string
     */
    public $sortBy;
    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'limit'       => 'Limit',
        'nextToken'   => 'NextToken',
        'order'       => 'Order',
        'queryShrink' => 'Query',
        'sortBy'      => 'SortBy',
        'sourceType'  => 'SourceType',
    ];

    public function validate()
    {
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

        if (null !== $this->queryShrink) {
            $res['Query'] = $this->queryShrink;
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
            $model->queryShrink = $map['Query'];
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
