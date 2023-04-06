<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class SearchDomainsRequest extends Model
{
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
     * @var string
     */
    public $name;

    /**
     * @example created_at
     *
     * @var string
     */
    public $orderBy;
    protected $_name = [
        'limit'   => 'limit',
        'marker'  => 'marker',
        'name'    => 'name',
        'orderBy' => 'order_by',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->orderBy) {
            $res['order_by'] = $this->orderBy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchDomainsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['order_by'])) {
            $model->orderBy = $map['order_by'];
        }

        return $model;
    }
}
