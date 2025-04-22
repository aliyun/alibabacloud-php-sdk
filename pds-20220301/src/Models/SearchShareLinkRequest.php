<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class SearchShareLinkRequest extends Model
{
    /**
     * @var string[]
     */
    public $creators;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $marker;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $orderDirection;

    /**
     * @var string
     */
    public $query;

    /**
     * @var bool
     */
    public $returnTotalCount;
    protected $_name = [
        'creators' => 'creators',
        'limit' => 'limit',
        'marker' => 'marker',
        'orderBy' => 'order_by',
        'orderDirection' => 'order_direction',
        'query' => 'query',
        'returnTotalCount' => 'return_total_count',
    ];

    public function validate()
    {
        if (\is_array($this->creators)) {
            Model::validateArray($this->creators);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creators) {
            if (\is_array($this->creators)) {
                $res['creators'] = [];
                $n1 = 0;
                foreach ($this->creators as $item1) {
                    $res['creators'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }

        if (null !== $this->orderBy) {
            $res['order_by'] = $this->orderBy;
        }

        if (null !== $this->orderDirection) {
            $res['order_direction'] = $this->orderDirection;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->returnTotalCount) {
            $res['return_total_count'] = $this->returnTotalCount;
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
        if (isset($map['creators'])) {
            if (!empty($map['creators'])) {
                $model->creators = [];
                $n1 = 0;
                foreach ($map['creators'] as $item1) {
                    $model->creators[$n1++] = $item1;
                }
            }
        }

        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }

        if (isset($map['order_by'])) {
            $model->orderBy = $map['order_by'];
        }

        if (isset($map['order_direction'])) {
            $model->orderDirection = $map['order_direction'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['return_total_count'])) {
            $model->returnTotalCount = $map['return_total_count'];
        }

        return $model;
    }
}
