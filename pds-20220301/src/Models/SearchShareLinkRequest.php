<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class SearchShareLinkRequest extends Model
{
    /**
     * @var string[]
     */
    public $creators;

    /**
     * @example 50
     *
     * @var int
     */
    public $limit;

    /**
     * @example NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg
     *
     * @var string
     */
    public $marker;

    /**
     * @example created_at
     *
     * @var string
     */
    public $orderBy;

    /**
     * @example ASC
     *
     * @var string
     */
    public $orderDirection;

    /**
     * @example created_at>=\"2022-01-18T02:50:00\" and created_at<\"2022-01-19T09:45:28\" and share_name_for_fuzzy match \"HD.mp4\" and status in [\"enabled\", \"disabled\"] and expired_time=\"1970-01-01T00:00:00\"
     *
     * @var string
     */
    public $query;

    /**
     * @example false
     *
     * @var bool
     */
    public $returnTotalCount;
    protected $_name = [
        'creators'         => 'creators',
        'limit'            => 'limit',
        'marker'           => 'marker',
        'orderBy'          => 'order_by',
        'orderDirection'   => 'order_direction',
        'query'            => 'query',
        'returnTotalCount' => 'return_total_count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creators) {
            $res['creators'] = $this->creators;
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

    /**
     * @param array $map
     *
     * @return SearchShareLinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['creators'])) {
            if (!empty($map['creators'])) {
                $model->creators = $map['creators'];
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
